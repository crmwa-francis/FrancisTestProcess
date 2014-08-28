<?php
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');

class ContractsToListingHookHelper
{
    /**
     * @var $bean Contract;
     */
    private $bean;
    /**
     * @var $rel HookHelper
     */
    private $rel;

    function relatePromotionsOptionsToContracts($bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->rel = new HookHelper();
        $this->processWorkflow();
    }

    private function processWorkflow()
    {
        if (empty($this->bean->iems_listing_id_c)) {
            return;
        }
        if (!empty($this->bean->fetched_row['id'])) {
            $oldSelf = BeanFactory::getBean($this->bean->module_dir, $this->bean->id);
            if (!empty($oldSelf) && $oldSelf->iems_listing_id_c == $this->bean->iems_listing_id_c) {
                return;
            }
        }

        $this->transferRecords(
            $this->retrieveRecords($this->bean->iems_listing_id_c,'iems_Promotion'),
            'iems_Promotion',
            $this->bean
        );
        $this->transferRecords(
            $this->retrieveRecords($this->bean->iems_listing_id_c,'iems_Options'),
            'iems_Options',
            $this->bean
        );
    }

    private function retrieveRecords($parentId,$moduleName){
        $sq = new SugarQuery();
        $sq->select(array('id'));
        $sq->from(BeanFactory::getBean($moduleName));
        $sq->where()->equals('parent_id',$parentId);
        return $sq->execute();
    }

    /**
     * @param array $list this uses the return value for the SugarQuery Result method
     * @param SugarBean $toModule
     */
    private function transferRecords($list , $fromModule , $toModule)
    {
        if(empty($list) || !is_array($list) || empty($toModule)) {
            return false;
        }
        foreach ($list as $row) {
            if(empty($row['id'])){
                continue;
            }
            $record = BeanFactory::getBean($fromModule,$row['id']);
            if(empty($record)  || empty($record->id)){
                continue;
            }
            $additionalFields = array(
                'id' => create_guid(),
                'parent_type' => $toModule->module_dir,
                'parent_id' => $toModule->id,
            );
            if (($clone = $this->rel->util->cloneRecord($record, $additionalFields)) !== false) {
                $clone->save();
            }
        }
    }
}