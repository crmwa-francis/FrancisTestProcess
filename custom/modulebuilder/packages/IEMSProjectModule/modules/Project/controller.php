<?php
class iems_ProjectController extends SugarController{

    /**
     * @var iems_Project
     */
    public $bean;

    public function action_settings(){
        $this->view = 'settings';
    }

    public function action_savesettings(){
        $this->bean->saveSettings();
        $this->view = 'settings';
    }
}