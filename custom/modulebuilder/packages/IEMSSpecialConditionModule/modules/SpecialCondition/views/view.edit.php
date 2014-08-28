<?php

class iems_SpecialConditionViewEdit extends ViewEdit
{
    /**
     * @var iems_SpecialCondition
     */
    var $bean;

    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {
        if ($_REQUEST["parent_type"] == "Contracts") {
            $this->bean->parent_type = $_REQUEST['parent_type'];
            $this->bean->parent_id = $_REQUEST["contract_id"];
            $this->populateDynamicStageList();
        }

        parent::display();
    }

    private function populateDynamicStageList()
    {
        $project = $this->bean->getParentProject();
        $stages = explode(',', $project->stages);
        $stageList = array();

        foreach ($stages as $stage) {
            $trimmedStage = trim($stage);
            $stageList[$trimmedStage] = $trimmedStage;
        }

        $GLOBALS['app_list_strings']['listing_dynamic_stage_list'] = $stageList;
    }
}