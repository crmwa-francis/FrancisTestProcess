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
require_once('modules/iems_ListingPricing/iems_ListingPricing_sugar.php');
class iems_ListingPricing extends iems_ListingPricing_sugar
{
    public $updateByRelatedRecord = false;
    public $updatedByListing = false;
    /**
     * @var iems_Listing
     */
    public $listing;

    /**
     * @var Link2
     */
    public $iems_listing_iems_pricing;

    /**
     * @var iems_Project
     */
    private $project;
    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_ListingPricing()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        $this->grabProjectPricingFields();
        $this->computeForCalculatedFields();
        $this->checkForRelatedListingPropertyType();
        parent::save($check_notify);
        if($this->updatedByListing == false){
            $this->updateRelatedListingRecordLandPriceField();
        }
        if ($this->updateByRelatedRecord === false) {

            $this->updateDepositFieldsOnRelatedProjectPricing();
        }
    }

    /**
     * Land Deposit Amount = Land Deposit Percet * Land Price
     * Land Deposit Percent = (Land Deposit Amount / Land Price) * 100
     */
    private function computeForCalculatedFields()
    {
        if (!empty($this->land_price)) {
            if (!empty($this->land_deposit_percent)) {
                $this->land_deposit_amount = $this->land_price * ($this->land_deposit_percent / 100);
            } elseif (empty($this->land_deposit_percent) && !empty($this->land_deposit_amount)) {
                $this->land_deposit_percent = ($this->land_deposit_amount / $this->land_price) * 100;
            }
        }

    }

    /**
     * Remove Land deposit fields if listing property type is invalid
     */
    private function checkForRelatedListingPropertyType(){
        if(empty($this->fetched_row['id'])){
            return true;
        }
        $this->getRelatedListingProjectId();
        if(empty($this->listing->id) || !($this->listing instanceof iems_Listing)){
            return;
        }
        if($this->listing->checkPropertyType() === false){
            $this->land_deposit_amount = '';
            $this->land_deposit_percent = '';
        }
    }

    /**
     * Update the 'Land Price' field in the related listing record
     *
     */
    private function updateRelatedListingRecordLandPriceField()
    {
        if(empty($this->listing->id) || !($this->listing instanceof iems_Listing)){
            global $service;
            if ($service && $service instanceof RestService) {
                $request = $service->getRequest();
                $args = $request->getArgs();
            }
            if (!empty($this->listing_id)) {
                $this->listing = BeanFactory::getBean('iems_Listing')->retrieve($this->listing_id);
            } elseif (strtolower($args['module']) == 'iems_listing' && !empty($args['record'])) {
                $this->listing = BeanFactory::getBean($args['module'])->retrieve($args['record']);
            }
        }


        /**@var $property iems_Listing */
        if ($this->listing instanceof iems_Listing && !empty($this->listing->id)) {
            $this->listing->updatePricing = false;
            $this->listing->land_price = $this->land_price;
            $this->listing->save();
        }
    }

    /**
     * Update the
     */
    private function updateDepositFieldsOnRelatedProjectPricing()
    {
        if(empty($this->listing->id)){
            return;
        }
        if($this->listing->checkForRelatedContract($this->listing->id) === true){
            return;
        }
        if(($pricing = $this->getProjectPricing()) === false){
            if (!empty($this->listing) && !empty($this->listing->iems_project_id_c)) {
                $this->project = BeanFactory::getBean('iems_Project')->retrieve($this->listing->iems_project_id_c);
                if (!empty($this->project) && !empty($this->project->id) && !empty($this->project->pricing_id)) {
                    /**@var $pricing iems_Pricing */
                    $pricing = BeanFactory::getBean('iems_Pricing', $this->project->pricing_id);


                }

            }
        }
        if (!empty($pricing) && !empty($pricing->id) && $this->project->checkPropertyType() == true) {
            $pricing->triggerPricingWorkflow = true;
            $pricing->land_deposit_percent = $this->land_deposit_percent;
            $pricing->land_deposit_amount = $this->land_deposit_amount;
            $pricing->save();
        }
    }

    /**
     * Populate the pricing property
     * If the pricing property already contains a value then return it
     * If not then retrieve it
     * @return bool|iems_Pricing|null|SugarBean
     */
    private function getProjectPricing()
    {
        if (!empty($this->projectPricing) && $this->projectPricing instanceof iems_Pricing && !empty($this->projectPricing->id)) {
            return $this->projectPricing;
        } elseif (($project_id = $this->getRelatedListingProjectId()) != '') {
            $this->project = BeanFactory::getBean('iems_Project')->retrieve($this->listing->iems_project_id_c);
            if (!empty($this->project) && !empty($this->project->id) && !empty($this->project->pricing_id)) {
                /**@var $pricing iems_Pricing */
                $pricing = BeanFactory::getBean('iems_Pricing', $this->project->pricing_id);
                if (!empty($pricing->id)) {
                    return ($this->projectPricing = $pricing);
                }
            }
        }

        return false;
    }

    /**
     * Populate the listing property and get the project id
     * @return string Project ID
     */
    private function getRelatedListingProjectId()
    {
        if(!empty($this->listing->id) && $this->listing instanceof iems_Listing){
            return $this->listing;
        }
        if (!($this->iems_listing_iems_pricing instanceof Link2)) {
            $this->load_relationship('iems_listing_iems_pricing');
        }
        try {
            $this->listing = $this->iems_listing_iems_pricing->getBeans();
            $this->listing = $this->listing = array_shift($this->listing);
        } catch (Exception $e) {
        }

        if (!empty($this->listing) && !empty($this->listing->iems_project_id_c)) {
            return $this->listing->iems_project_id_c;
        }
        return '';
    }

    /**
     * When creating a new pricing get the project pricing related fields
     */
    private function grabProjectPricingFields()
    {
        /**@var $pricing iems_Pricing */
        if (empty($this->fetched_row['id']) && ($pricing = $this->getProjectPricing()) !== false) {
            $this->land_deposit_amount = $pricing->land_deposit_amount;
            $this->land_deposit_percent = $pricing->land_deposit_percent;
        }
    }

    /*
     * this function will be an alternative if the bean files were to experience PHP runtime errors
    function updateRecords()
    {
        $sql = "Update iems_pricing p ";
        $sql+= "INNER JOIN iems_project_iems_pricing ppr on (p.id = ppr.pricing_id and ppr.deleted <> 1) ";
        $sql+= "INNER JOIN iems_listing l ON (ppr.project_id = l.iems_project_id_c and l.deleted <> 1) ";
        $sql+= "INNER JOIN iems_listing_iems_pricing llp on (l.id = llp.listing_id and llp.deleted <> 1) ";
        $sql+= "INNER JOIN iems_listingpricing lp on (llp.pricing_id = lp.id and lp.deleted = 0) ";
        $sql+= "SET p.land_deposit_percent = '{$this->land_deposit_percent}', l.land_price = '$this->land_price' ";
        $sql+= "WHERE lp.id = '{$this->id}' ";

        $this->db->query($sql);
    }
    */
}

?>