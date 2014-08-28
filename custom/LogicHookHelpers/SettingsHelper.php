<?php
require_once('include/entryPoint.php');

class SettingsHelper
{
    public function getConfig($key)
    {
        $sq = new SugarQuery();
        $sq->select(array('name', 'value'));
        $sq->from(new Administration());
        $sq->where()->equals('category', $key);
        $return = array();
        $values = $sq->execute();
        if (!empty($values)) {
            foreach ($values as $row) {
                $return[$row['name']] = $row['value'];
            }
        }
        return $return;
    }

    public function getTemplate($key){
        $settings = $this->getConfig('inproperty_email_templates');
        if(!empty($settings) && !empty($settings[$key])){
            return $settings[$key];
        }
    }

    public function getWordpressUrl($key){
        $settings = $this->getConfig('inproperty_wp_url');
        if(!empty($settings) && !empty($settings[$key])){
            return $settings[$key];
        }
    }

}