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
require_once('modules/iems_Listing/iems_Listing_sugar.php');

class iems_Listing extends iems_Listing_sugar
{
    /**
     * @var Link2
     */
    public $iems_listing_contracts;

    /**
     * @var Link2
     */
    public $project_projectlisting;

    /**
     * @var bool
     */
    private $selfUpdate = false;

    /**
     * @var bool
     */
    public $updatePricing = true;
    /**
     * @var iems_Project
     */
    public $parentProject;

    public function __construct()
    {
        parent::__construct();
    }

    public function retrieve($id = '-1', $encode = true, $deleted = true)
    {
        parent::retrieve($id, $encode, $deleted);
        $this->temporaryAddress = $this->primary_address_lot_number . ' / ' . $this->primary_address_street_number;
        $this->temporaryAddress .= ' ' . $this->primary_address_street_name;
        return $this;
    }

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Listing()
    {
        self::__construct();
    }

    public function save($check_notify = false)
    {
        $isNew = false;
        if (empty($this->date_entered) && empty($this->fetched_row['id'])) {
            $isNew = true;
            $this->listing_id = $this->incrementListingtId();
            $this->name = str_pad($this->listing_id, 5, '0', STR_PAD_LEFT);
            $this->grabAddressFromParentProject();
        }

        if (!empty($this->fetched_row['id'])) {
            if ($this->fetched_row['titles_released'] !== $this->titles_released) {
                $this->updateRelatedContractsField('titles_released', $this->titles_released);
            }
        }

        if ($this->updatePricing == true) {
            $this->updateRelatedPricing();
        }
        if ($isNew === false) {
            $this->setProjectId();
        }
        $return = parent::save($check_notify);

        if ($isNew) {
            /**Create one for webtab*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_listing_iems_listingtitle');

            /**Create one for pricing*/
            $this->oneTimeCreateAndRelateOneToOneRecord('iems_listing_iems_pricing');
        }

        return $return;
    }

    public function checkForRelatedContract($listingId)
    {
        $sq = new SugarQuery();
        $sq->select(array('id'));
        $sq->from(BeanFactory::getBean('Contracts'));
        $sq->where()->equals('iems_listing_id_c', $listingId);
        $sq->offset(1);
        $contract = $sq->execute();
        return !empty($contract) ? true : false;
    }

    /**
     * Loads the iems_Project bean related to this listing.
     *
     * @return iems_Project
     */
    public function getParentProject()
    {
        if (!($this->parentProject instanceof iems_Project) || empty($this->parentProject->id)) {
            $this->setParentProject();
        }
        return $this->parentProject;
    }

    public function setParentProject($parentProject = null)
    {
        if ($parentProject instanceof iems_Project && !empty($this->parentProject->id)) {
            return $this->parentProject;
        } elseif ($parentProject instanceof iems_Project && !empty($parentProject->id) && !empty($parentProject)) {
            $this->parentProject = $parentProject;
        } else {
            $this->parentProject = null;
            global $service;
            /**@var $service RestService */

            if ($service && $service instanceof RestService) {
                $request = $service->getRequest();
                $args = $request->getArgs();

                if (strtolower($args['module']) == 'iems_property' && !empty($args['record'])) {
                    /**@var $parentProperty iems_Property */
                    $parentProperty = BeanFactory::getBean($args['module'], $args['record']);
                    if (!empty($parentProperty->id) && !empty($parentProperty->iems_project_id_c)) {
                        $this->parentProject = BeanFactory::getBean('iems_Project', $parentProperty->iems_project_id_c);
                        if (empty ($this->parentProject) || empty($this->parentProject->id)) {
                            $this->parentProject = null;
                        }
                        $this->iems_project_id_c = $this->parentProject->id;
                    }
                }
            }
        }
        return $this->parentProject;
    }

    /**
     *
     */
    private function updateRelatedPricing()
    {
        if (!empty($this->pricing_id)) {
            /**@var $pricing iems_ListingPricing */
            $pricing = BeanFactory::getBean('iems_ListingPricing', $this->pricing_id);
            $pricing->updatedByListing = true;
            $pricing->land_price = $this->land_price;
            if ($this->removeCalculatedFields($pricing) === false) {
                $pricing->updateByRelatedRecord = true;
            }
            $pricing->save();
        }
    }

    /**
     * Updates a field in related contracts.
     *
     * @param string $relatedFieldName
     * @param string $value
     */
    public function updateRelatedContractsField($relatedFieldName, $value)
    {
        $this->load_relationship('iems_listing_contracts');
        if (!($this->iems_listing_contracts instanceof Link2)) {
            return;
        }

        try {
            $relatedContracts = $this->iems_listing_contracts->getBeans();
        } catch (Exception $e) {
        };

        if (!empty($relatedContracts)) {
            foreach ($relatedContracts as $contract) {
                /**@var $contract Contract */
                $contract->$relatedFieldName = $value;
                $contract->save();
            }
        }
    }

    /**
     * Sync the Listing Delete before actually deleting the record
     * @param $id
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
     * Copy address fields from parent project.
     *
     * street number
     * street name
     * suburb
     * state
     * postcode
     * country
     */
    public function copyAddressFromParentProject()
    {
        $this->grabAddressFromParentProject();
        $this->save();
    }

    /**
     * @return int
     */
    private function getPreviousListingtId()
    {
        try {
            $sq = new SugarQuery();
            $sq->select(array('listing_id'));
            $sq->from($this);
            $sq->orderBy('date_entered');
            $sq->limit(1);
            $listing = $sq->execute();
            return empty($listing[0]['listing_id']) ? 0 : $listing[0]['listing_id'];
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * @return int
     */
    private function incrementListingtId()
    {
        $prevousListingtId = (int)$this->getPreviousListingtId();
        return $prevousListingtId += 1;
    }

    private function setProjectId()
    {
        $parentProject = $this->setParentProject();
        if(!empty($parentProject->id)){
            $this->iems_project_id_c = $parentProject->id;
        }
    }

    private function grabAddressFromParentProject()
    {
        $parentProject = $this->getParentProject();
        if ($parentProject->id) {
            $this->primary_address_street_number = $parentProject->primary_address_street_number;
            $this->primary_address_street_name = $parentProject->primary_address_street_name;
            $this->primary_address_suburb = $parentProject->primary_address_suburb;
            $this->primary_address_state = $parentProject->primary_address_state;
            $this->primary_address_postalcode = $parentProject->primary_address_postalcode;
            $this->primary_address_country = $parentProject->primary_address_country;
//            $this->primary_address_lot_number = $parentProject->primary_address_lot_number;
            //$this->selfUpdate = true;
            //$this->save();
        }
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

    public function checkPropertyType()
    {
        $return = true;

        $bannedPropertyType = array('townhouse_villa', 'unit_apartment', 'house_land');
        if (!empty($this->property_type) && in_array($this->property_type, $bannedPropertyType)) {
            $return = false;
        }
        return $return;
    }

    /**
     * Set listing pricing fields to null
     * @param iems_ListingPricing $listingPricing
     * @param bool $save
     */
    public function removeCalculatedFields(&$listingPricing, $save = false)
    {

        if ($listingPricing instanceof iems_ListingPricing && !empty($listingPricing)) {
            $listingPricing->listing = $this;
            $dataChange = $this->db->getDataChanges($this);
            $unit = array('unit_apartment', 'townhouse_villa', 'house_land');
            if (!empty($dataChange['property_type']) && $unit) {
                if ($this->checkPropertyType() == false) {
                    $listingPricing->land_deposit_amount = '';
                    $listingPricing->land_deposit_percent = '';
                }
            } else {
                return false;
            }

            if ($save === true) {
                $listingPricing->save();
            }
        }
        return true;
    }

    public function getRelatedRecords($link, $params = array())
    {
        if (empty($link)) {
            return false;
        }

        $this->load_relationship($link);

        if (!($this->$link instanceof Link2)) {
            return false;
        }

        return $this->$link->getBeans($params);
    }
}