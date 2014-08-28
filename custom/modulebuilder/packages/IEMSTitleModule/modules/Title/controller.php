<?php
class iems_TitleController extends SugarController{
    /**
     * @var iems_Title
     */
    public $bean;
    function action_test()
    {
        $this->view = 'ajax';
        $this->bean->prepEmail($_REQUEST['id']);
    }
}