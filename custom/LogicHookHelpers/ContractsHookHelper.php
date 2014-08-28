<?php

class ContractsHookHelper
{
    /**
     * @var Contract
     */
    private $bean;
    private $event;
    private $arguments;

    /**
     * @var SugarQuery
     */
    private $sq;

    public function beforeSave($bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->event = $event;
        $this->arguments = $arguments;
        $this->sq = new SugarQuery();
        $this->incrementContractId();
        $this->populateProjectListing();
    }

    private function incrementContractId()
    {
        if (!$this->isNewBean()) {
            return;
        }

        $contract_id = (int)$this->getPreviousContractId();
        $contract_id += 1;
        $this->bean->contract_id = $contract_id;
        $this->bean->name = str_pad($contract_id, 5, '0', STR_PAD_LEFT);

        return $contract_id;
    }

    private function isNewBean()
    {
        return empty($this->bean->fetched_row['id']);
    }

    /**
     * @return int
     */
    private function getPreviousContractId()
    {
        try {
            $this->sq->select(array('contract_id'));
            $this->sq->from($this->bean);
            $this->sq->orderBy('date_entered', 'DESC');
            $this->sq->limit(1);
            $result = $this->sq->execute();
            if (empty($result) || empty($result[0]['contract_id'])) {
                return 0;
            } else {
                return $result[0]['contract_id'];
            }
        } catch (Exception $e) {
            return 0;
        }
    }

    public function populateProjectListing()
    {
        if (!isset($_REQUEST['return_module']) && !isset($_REQUEST['return_id'])) {
            return false;
        }

        if ($_REQUEST['return_module'] == 'iems_Project') {
            $this->bean->project = $_REQUEST['return_module'];
            $this->bean->iems_project_id = $_REQUEST['return_id'];
        } elseif ($_REQUEST['return_module'] == 'iems_Listing') {
            $this->bean->listing = $_REQUEST['return_module'];
            $this->bean->iems_listing_id_c = $_REQUEST['return_id'];
            $listing = BeanFactory::getBean('iems_Listing', $_REQUEST['return_id']);

            if (isset($listing->iems_project_id_c)) {
                $project = BeanFactory::getBean('iems_Project', $listing->iems_project_id_c);
                $this->bean->project = $project->name;
                $this->bean->iems_project_id = $project->id;
            }
        }
    }

    /**
     * Retrieve Special Conditions from parent listing
     * Clone the special conditions and relate it to this contract
     *
     * @param $bean
     * @param $event
     * @param $arguments
     * @return bool
     */
    public function relateSpecialConditionsFromListing($bean, $event, $arguments)
    {
        $this->sq = new SugarQuery();
        if (strtotime($bean->date_entered) != strtotime($bean->date_modified)) {
            if ($_SERVER['REQUEST_METHOD'] != "POST"){
                return false;
            }
        }

        if (!empty($bean->iems_listing_id_c) && isset($bean->iems_listing_id_c)) {

            $sq = new SugarQuery();
            $sq->select(array('id'));
            $sq->from(BeanFactory::getBean('iems_SpecialCondition'));
            $sq->where()->equals('parent_id', $bean->iems_listing_id_c);
            $sq->where()->equals('parent_type', 'iems_Listing');
            $specialConditions = $sq->execute();

            if (empty($specialConditions)) {
                return false;
            }
            foreach ($specialConditions as $sc) {
                if (empty($sc['id'])) {
                    continue;
                }
                $scRecord = BeanFactory::retrieveBean('iems_SpecialCondition', $sc['id']);
                if (empty($sc) || empty($scRecord->id)) {
                    continue;
                }

                $newSc = clone $scRecord;
                $newSc->id = null;
                $newSc->parent_id = $bean->id;
                $newSc->parent_type = 'Contracts';
                $newSc->fetched_row = array();
                $newSc->expired = $scRecord->expired;
                $newSc->save();

            }
        }
    }
}