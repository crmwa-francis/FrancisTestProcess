<?PHP
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/iems_Project/iems_Project_sugar.php');

class iems_Project extends iems_Project_sugar
{
    /**
     * Relationship link to listings
     *
     * @var Link2
     */
    public $project_projectlisting;

    /**
     * Relationship link to documents
     *
     * @var Link2
     */
    public $documents_iems_project;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Project()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function retrieve($id = '-1', $encode = true, $deleted = true)
    {
        parent::retrieve($id, $encode, $deleted);

        $this->temporaryAddress = $this->primary_address_lot_number . ' / ' . $this->primary_address_street_number;
        $this->temporaryAddress .= ' ' . $this->primary_address_street_name;

        if (isset($this->builder_id) && !empty($this->builder_id)) {
            $builder = $this->retrieveCstmFlexRelateFieldName($this->builder_type, $this->builder_id);
            if (!empty($builder->id)) {
                $this->builder_name = $builder->name;
            }
        }

        if (isset($this->referrer_id) && !empty($this->referrer_id)) {
            $referrer = $this->retrieveCstmFlexRelateFieldName($this->referrer_type, $this->referrer_id);
            if (!empty($referrer->id)) {
                $this->referrer_name = $referrer->name;
            }
        }

        return $this;
    }

    public function save($check_notify = false)
    {
        if (is_array($this->property_type) && count($this->property_type) > 0) {
            $this->property_type = encodeMultienumValue($this->property_type);
        }

        $this->updateNullIdToEmptyString();
        $this->cleanStages();
        $isNew = false;

        if (empty($this->date_entered)) {
            $this->project_id = $this->incrementProjectId();
            $isNew = true;
        }
        if (!empty($this->fetched_row['id'])) {

            $this->updateRelatedListingsAddress();
        }
        $this->updatePricing($this->pricing_id, true);

        $updateDateFields = $this->updateDateFields();

        parent::save($check_notify);

        if ($isNew) {
            /**Create one for webtab*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_project_iems_webtab');

            /**Create one for pricing*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_project_iems_pricing');

            /**Create one for mastercontract*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_mastercontract_iems_project');

            /**Create one for title*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_title_iems_project');
        }

        if (!empty($this->fetched_row['id']) && $updateDateFields === true) {

            $this->updateRelatedListingsAndContractsField(
                array('expected_completion', 'titles_expected', 'titles_released'),
                array($this->expected_completion, $this->titles_expected, $this->titles_released)
            );

        }
        return $this->id;
    }

    private function updateDateFields()
    {
        $changedFields = $this->db->getDataChanges($this);
        if (!empty($changedFields['expected_completion']) || !empty($changedFields['titles_released']) || !empty($changedFields['titles_expected'])) {
            return true;
        }
        return false;
    }

    /**
     * Sync the Listing Delete before actually deleting the record
     * @param $id
     * Test comment
     */
    public function mark_deleted($id)
    {
        /**@ var $afterDeleteSync AfterDeleteWordpressSync*/
        require_once('custom/WebsiteHelpers/AfterDeleteWordpressSync.php');
        $afterDeleteSync = new AfterDeleteWordpressSync();
        $afterDeleteSync->deleteSync($this, '', '');
        parent::mark_deleted($id);
    }

    /**
     * Updates a field in related listings and contracts record.
     *
     * @param string $relatedFieldName The field that will be updated.
     * @param mixed $value The new field value.
     */
    public function updateRelatedListingsAndContractsField($relatedFieldName, $value)
    {
        if (empty($relatedFieldName)) {
            return;
        }

        if (!in_array('project_projectlisting', $this->loaded_relationships)) {
            $this->load_relationship('project_projectlisting');
        }

        if (!in_array('project_contracts', $this->loaded_relationships)) {
            $this->load_relationship('project_contracts');
        }

        $relatedListings = $this->project_projectlisting->getBeans();
        $relatedContracts = $this->project_contracts->getBeans();

        if (!empty($relatedListings)) {
            /**@var $listing iems_Listing */
            foreach ($relatedListings as $listing) {
                $listing->updatePricing = false;
                if (is_array(($relatedFieldName))) {
                    foreach ($relatedFieldName as $key => $field) {
                        $listing->$field = $value[$key];
                    }
                } else {
                    $listing->$relatedFieldName = $value;
                }
                $listing->save();
            }
        }

        if (!empty($relatedContracts)) {
            /**@var $contract Contract */
            foreach ($relatedContracts as $contract) {
                if (is_array($relatedFieldName)) {
                    foreach ($relatedFieldName as $key => $field) {
                        $contract->$field = $value[$key];
                    }
                } else {
                    $contract->$relatedFieldName = $value;
                }
                $contract->save();
            }
        }
    }

    private function updateRelatedListingsAddress()
    {
        $dataChange = $this->db->getDataChanges($this);
        if (
            !empty($dataChange['primary_address_street_number']) ||
            !empty($dataChange['primary_address_street_name']) ||
            !empty($dataChange['primary_address_suburb']) ||
            !empty($dataChange['primary_address_state']) ||
            !empty($dataChange['primary_address_postalcode'])
        ) {

            if (!in_array('project_projectlisting', $this->loaded_relationships)) {
                $this->load_relationship('project_projectlisting');
            }

            $listings = $this->project_projectlisting->getBeans();
            if (!empty($listings)) {
                foreach ($listings as $listing) {
                    if (empty($listing->id)) {
                        continue;
                    }
                    $listing->parentProject = $this;
                    $listing->copyAddressFromParentProject();
                }
            }
        }
    }

    /**
     * Clean the stages values by removing whites spaces
     * and duplicate entries.
     */
    private function cleanStages()
    {
        $stages = explode(',', $this->stages);
        foreach ($stages as $stage) {
            $stage = trim($stage);
            if (empty($stage)) {
                continue;
            }

            if (preg_match('/[^\w\d\s-]+/', $stage, $matches)) {
                continue;
            }

            $trimmed[] = $stage;
        }

        sort($trimmed, SORT_STRING);
        $trimmed = array_unique($trimmed);
        $this->stages = implode(',', $trimmed);
    }

    /**
     * @return int
     */
    private function getPreviousProjectId()
    {
        $sq = new SugarQuery();
        $sq->select(array('project_id'));
        $sq->from($this);
        $sq->orderBy('date_entered');
        $sq->limit(1);
        $prj = $sq->execute();
        return empty($prj[0]['project_id']) ? 0 : $prj[0]['project_id'];
    }

    /**
     * @return int
     */
    private function incrementProjectId()
    {
        $prevousProjectId = (int)$this->getPreviousProjectId();
        return $prevousProjectId += 1;
    }

    /**
     * Creates and relates a record based on the linkname
     * This method is only intended for creating record with one to one relationship with this bean.
     *
     * @param string $linkName
     * @return mixed|SugarBean
     */
    private function oneTimeCreateAndRelateOneToOneRecord($linkName)
    {
        if (empty($linkName)) {
            return null;
        }

        if (!in_array($linkName, $this->loaded_relationships)) {
            $this->load_relationship($linkName);
        }

        $relatedModule = $this->$linkName->getRelatedModuleName();
        $newRelated = new $relatedModule;

        if (strpos($relatedModule, 'iems') !== false) {
            $moduleName = explode('iems_', $relatedModule);
            $noPrefixModuleName = array_pop($moduleName);
            $newRelated->name = $this->name . '-' . $noPrefixModuleName;
        }

        $newRelated->save();

        $this->$linkName->add($newRelated->id);
    }

    /**
     * Check if the property type contains values for townhouse_vila and unit_apartment
     * @return bool
     */
    public function checkPropertyType()
    {
        $return = true;
        if (!empty($this->property_type)) {
            $propertyType = explode('^,^', substr($this->property_type, 1, -1));
            if (in_array('townhouse_villa', $propertyType) || in_array('unit_apartment', $propertyType) || in_array('house_land', $propertyType)) {
                $return = false;
            }
        }
        return $return;
    }

    /**
     * Check if state is NSW
     * @return bool
     */
    public function isNSW()
    {
        return ($this->primary_address_state == 'NSW' ? true : false);
    }

    /**
     * Update related pricing record if project fields have particular values
     * @param string $pricing_id
     * @param bool $save
     */
    private function updatePricing($pricing_id, $save = false)
    {
        if (!empty($pricing_id)) {
            /**@var $pricing iems_Pricing */
            $pricing = BeanFactory::getBean('iems_Pricing', $pricing_id);

            if (!empty($pricing->id) && $pricing instanceof iems_Pricing) {
                if ($this->checkPropertyType() == false) {
                    $pricing->land_deposit_amount = '';
                    $pricing->land_deposit_percent = '';
                    $pricing->house_deposit_amount = '';
                    $pricing->house_deposit_percent = '';
                }
                if ($this->isNSW() == false) {
                    $pricing->days_to_exchange = '';
                }
                if ($save == true) {
                    $pricing->save();
                }
            }
        }
    }

    /**
     * Saves the custom configuration to the config_override file
     */
    public function saveSettings()
    {
        /**@var Administa*/
        $admin = new Administration();
        $sql = "DELETE FROM config WHERE category IN ('inproperty_email_templates' ,'inproperty_wp_url')";
        $admin->db->query($sql);


        foreach (array_unique($_REQUEST['wordpress_url']) as $url) {
            if (!empty($url)) {
                $admin->saveSetting('inproperty_wp_url',$url,$url);
            }
        }

        if (!empty($_REQUEST['template_key']) && !empty($_REQUEST['template_id'])) {
            foreach ($_REQUEST['template_key'] as $key => $value) {
                if (!empty($_REQUEST['template_id'][$key]) && empty($emailPrep[$value])) {
                    $admin->saveSetting('inproperty_email_templates',$value,$_REQUEST['template_id'][$key]);
                }
            }

        }
    }

    /**
     * Retrieves bean of custom flex relate fields
     *
     * @param $module_name
     * @param $id
     * @return $this|null
     */
    public function retrieveCstmFlexRelateFieldName($module_name, $id)
    {
        if (!empty($module_name) && !empty($id)) {
            $bean = BeanFactory::getBean($module_name)->retrieve($id);
            return $bean;
        }
    }


    /**
     * Temporary fix wherein it causes an error
     * on the sugarcrm listview filter when relate fields with empty ids
     * are used as filter
     */
    public function updateNullIdToEmptyString()
    {
        $idFields = array(
            'iems_project_id',
            'vendor_id',
            'property_valuer_id',
            'ucv_valuer_id',
            'land_valuer_id'
        );

        foreach ($idFields as $k => $v) {
            if (!isset($this->$v) && empty($this->$v)) {
                $this->$v = "";
            }
        }
    }
}