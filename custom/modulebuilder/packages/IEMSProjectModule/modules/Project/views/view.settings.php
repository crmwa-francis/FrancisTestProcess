<?php
class iems_ProjectViewSettings extends ViewEdit{

    /**
     * @var $bean iems_Project
     */
    /**
     * @var Sugar_Smarty
     */
    public $ss;
    public $bean;
    /**
     * @var SettingsHelper
     */
    private $config;
    private $enableAdditionalUrl = false;
    private $enableAdditionalEmailTemplate = true;

    private $current_user;

    public function __construct(){
        $this->current_user = $GLOBALS['current_user'];
    }

    public function display(){
        $this->validateUser();
        //parent::display();
        $this->ss->assign('wordpress_url',$this->getConfig('inproperty_wp_url'));
        $this->ss->assign('email_templates', $this->getConfig('inproperty_email_templates'));
        $this->ss->assign('enable_add',$this->enableAdditionalUrl);
        $this->ss->assign('enable_additional_template',$this->enableAdditionalEmailTemplate);
        $this->ss->display('modules/'.$this->module.'/tpls/Settings.tpl');
    }

    public function validateUser(){
        if(!is_admin($this->current_user)){
            throw new InvalidArgumentException('Warning: You do not have permission to view this page');
        }
    }

    private function getConfig($key){
        $path = 'custom/LogicHookHelpers/SettingsHelper.php';
        if(SugarAutoLoader::fileExists($path) && !($this->config instanceof SettingsHelper)){
            require_once($path);
            $this->config = new SettingsHelper();
        }

        if($this->config instanceof SettingsHelper) {
            return $this->config->getConfig($key);
        }
        return array();
    }

}