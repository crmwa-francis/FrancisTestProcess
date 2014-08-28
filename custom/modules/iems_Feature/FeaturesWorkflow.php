<?php
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');
class FeaturesWorkflow
{
    /**
     * @var SugarBean
     */
    private $bean;

    /**
     * @var HookHelper
     */
    private $helper;

    /**
     * Constructor function
     * @param $bean
     * @param $event
     * @param $arguments
     */
    public function FeaturesWorkflow(&$bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->helper = new HookHelper();
        if ($arguments['related_module'] == 'iems_FeatureList' && $event == 'after_relationship_add') {
            $this->handleAfterAdd($arguments);
        } elseif ($arguments['related_module'] == 'iems_FeatureList' && $event == 'after_relationship_delete') {
            $this->handleAfterDel($arguments);
        }
    }

    /**
     * Function that executes the command to relate
     * all the related project of the feature list
     * to the feature
     * @param $arguments
     */
    private function handleAfterAdd($arguments)
    {
        $this->helper->relateAllRecord(
            BeanFactory::getBean($arguments['related_module'], $arguments['related_id']),
            'iems_Project',
            $this->bean->module_dir,
            $this->bean->id
        );
    }

    /**
     * this function removes all the related projects from the feature
     * if it is unlinked from the feature list
     * @param array $arguments
     */
    private function handleAfterDel($arguments)
    {
        $this->helper->removeAllRelationship(
            BeanFactory::getBean($arguments['related_module'], $arguments['related_id']),
            $this->bean,
            'iems_Project'
        );
    }
}