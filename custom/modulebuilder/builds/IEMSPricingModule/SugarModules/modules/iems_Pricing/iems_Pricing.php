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
require_once('modules/iems_Pricing/iems_Pricing_sugar.php');

class iems_Pricing extends iems_Pricing_sugar
{

    public $triggerPricingWorkflow = false;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Pricing()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        $this->otherWorkflows('before_save');
        parent::save($check_notify);
        $this->otherWorkflows('after_save');
    }

    /**
     * Perform other workflow validations for IEMS
     */
    public function otherWorkflows($type)
    {
        if ($type == 'before_save') {
            $this->beforeSaveWorkflows();
        } elseif ($type == 'after_save') {
            $this->afterSaveWorkflows();
        }
    }

    private function beforeSaveWorkflows()
    {
        $land = $this->land_deposit_amount != 0 ? $this->land_deposit_amount : $this->land_deposit_percent;
        $house = $this->house_deposit_amount != 0 ? $this->house_deposit_amount : $this->house_deposit_percent;
        $deposit = $this->exchange_deposit_amount != 0 ? $this->exchange_deposit_amount : $this->exchange_deposit_percent;
        if((!empty($land) && !empty($deposit)) || (!empty($house) && !empty($deposit))){
            throw new SugarApiException('Land Deposit or House Deposit cannot be entered with Exchange Deposit <br /> Please Reload your page', null, 'iems_Pricing', 550);
        }
        $this->checkProjectForWorkflowFields();
        if(!empty($this->fetched_row['id']) && !empty($deposit)){
            $this->exchangeDepositWorkflow();
        }
    }

    private function exchangeDepositWorkflow(){
        if(empty($this->project_id)){
            return;
        }
        /**@var iems_Project $project*/
        $project = BeanFactory::retrieveBean('iems_Project',$this->project_id);
        if(empty($project->id)){
            return;
        }

        if($project->checkPropertyType() === true){
            throw new SugarApiException('Parent Project must have property type of either TownHouse/Villa, Unit/Apartment or House and Land', null, 'iems_Pricing', 550);
        }
        if(strtolower($this->settle_land_first) == 'yes'){
            throw new SugarApiException('Settle land first should not be equal to Yes, if Exchange/Deposit has a value', null, 'iems_Pricing', 550);
        }
    }

    private function afterSaveWorkflows()
    {
        $this->updateRelatedListingPricing();
    }

    private function updateRelatedListingPricing()
    {
        if ($this->triggerPricingWorkflow === true || empty($this->project_id)) {
            return false;
        }
        $sq = new SugarQuery();
        $sq->select(array('id'));
        $sq->from(BeanFactory::newBean('iems_Listing'));
        $sq->where()
            ->equals('iems_project_id_c',$this->project_id);
        $sq->orderBy('date_entered','DESC');
        $result = $sq->execute();
        if(empty($result)){
            return;
        }
        foreach ($result as $record) {
            if(empty($record['id'])){
                continue;
            }
            /**@var iems_Listing $listing*/
            $listing = BeanFactory::retrieveBean('iems_Listing',$record['id']);
            if(empty($listing->id) || $listing->checkForRelatedContract($record['id']) === true){
                continue;
            }
            if($listing->checkPropertyType() === false){
                continue;
            }
            $listingPricing = array_shift($listing->getRelatedRecords('iems_listing_iems_pricing'));
            if (!empty($listingPricing)) {
                /**@var $bean iems_ListingPricing */
                $bean = $listingPricing;
                $bean->updateByRelatedRecord = true;
                $bean->land_deposit_amount = $this->land_deposit_amount;
                $bean->land_deposit_percent = $this->land_deposit_percent;
                $bean->save();
            }
        }
    }

    private function checkProjectForWorkflowFields()
    {
        if (!empty($this->project_id)) {
            /**@var $project iems_Project */
            $project = BeanFactory::getBean('iems_Project', $this->project_id);

            if (!empty($project->id) && $project instanceof iems_Project) {
                if ($project->checkPropertyType() == false) {
                    $this->land_deposit_amount = '';
                    $this->land_deposit_percent = '';
                    $this->house_deposit_amount = '';
                    $this->house_deposit_percent = '';
                }
                if ($project->isNSW() == false) {
                    $this->days_to_exchange = '';
                }
            }
        }
    }
}

?>