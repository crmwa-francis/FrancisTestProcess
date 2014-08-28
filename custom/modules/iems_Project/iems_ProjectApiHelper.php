<?php
require_once 'data/SugarBeanApiHelper.php';

class iems_ProjectApiHelper extends SugarBeanApiHelper
{
    public function formatForApi(SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        $bean->retrieve($bean->id);
        $data = parent::formatForApi($bean, $fieldList, $options);
        return $data;
    }
}