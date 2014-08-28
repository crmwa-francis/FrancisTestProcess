<?php
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');
class ProjectFeaturesWorkflow
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
    public function ProjectFeaturesWorkflow(&$bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->helper = new HookHelper();
        if ($arguments['related_module'] == 'iems_FeatureList' && $event == 'after_relationship_add') {
            $this->handleWorkflow($arguments);
        }
    }

    private function handleWorkflow($arguments)
    {
        $this->helper->relateAllRecord(
            BeanFactory::getBean($arguments['related_module'], $arguments['related_id']),
            'iems_Feature',
            $this->bean->module_dir,
            $this->bean->id
        );
    }
}