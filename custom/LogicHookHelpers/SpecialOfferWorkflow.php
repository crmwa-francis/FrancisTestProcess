<?php
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');

class SpecialOfferWorkflow
{
    /**
     * @var iems_Pricing
     */
    private $bean;
    /**
     * @var HookHelper
     */
    private $rel;

    function SpecialOfferWorkflow(&$bean, $event, $argument)
    {

        $this->bean = $bean;
        $this->rel = new HookHelper();

        $this->processWorkflow($argument, $event);
    }

    private function processWorkflow($args, $event)
    {

        if (empty($args) || $args['related_module'] != 'iems_Promotion') {
            return false;
        }

        $relMod = BeanFactory::getBean($args['related_module'], $args['related_id']);

        if (empty($relMod) || empty($relMod->id)) {
            return false;
        }
        switch ($event) {
            case 'after_relationship_add':
            {
                $this->bean->finance_special_offer += $relMod->price;
                break;
            }
            case 'after_relationship_delete':
            {
                $this->bean->finance_special_offer -= $relMod->price;
                break;
            }
            default:
                {
                break;
                }
        }


        $this->bean->save();
        return;
    }

    /**
     * @deprecated This method will be removed once the Version 1 for inproperty has been migrated to 7.2.2
     * @param $args
     * @param $event
     */
    private function handleCopyWorkflow($args, $event)
    {
        if (!in_array(
                $args['related_module'],
                array('iems_Promotion', 'iems_Options')
            ) || $event != 'after_relationship_add' || empty($this->bean->project_id)
        ) {
            return;
        }
        /**@var iems_Promotion | iems_Options $relatedModule*/
        $relatedModule = BeanFactory::getBean($args['related_module'])->retrieve($args['related_id']);
        $changes = $relatedModule->db->getDataChanges($relatedModule);
        if(!empty($relatedModule->date_entered )&& !empty($relatedModule->date_modified) &&$relatedModule->date_entered != $relatedModule->date_modified){
            return;
        }
        $relatedModule->parent_type = $this->bean->module_dir;
        $relatedModule->parent_id = $this->bean->id;
        $listingRecords = BeanFactory::getBean('iems_Listing')->get_list(
            "date_entered DESC",
            "iems_listing.iems_project_id_c = '{$this->bean->project_id}' "
        );
        if (!empty($listingRecords['list']) && is_array($listingRecords['list'])) {
            /** @var $listing iems_Listing */
            foreach ($listingRecords['list'] as $listing) {
                $relName = $this->rel->getRelationshipByModules($listing->module_dir, 'Contracts');
                if (empty($relName)) {
                    continue;
                }
                $relatedContracts = $this->rel->getRelatedRecordId($listing, $relName);
                if (!empty($relatedContracts)) {
                    continue;
                }
                $additionalFields = array(
                    'id' => create_guid(),
                    'parent_type' => 'iems_Listing',
                    'parent_id' => $listing->id,
                );
                if (($clone = $this->rel->util->cloneRecord($relatedModule, $additionalFields)) !== false) {
                    $clone->save();
                }
            }
        }
        $relatedModule->save();
    }
}