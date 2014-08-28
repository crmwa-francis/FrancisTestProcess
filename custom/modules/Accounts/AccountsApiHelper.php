<?php
require_once 'data/SugarBeanApiHelper.php';

class AccountsApiHelper extends SugarBeanApiHelper
{
    public function formatForApi(SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        $bean->retrieve($bean->id);
        $data = parent::formatForApi($bean, $fieldList, $options);

        $data['phone_alternate'] = $bean->phone_alternate;
        return $data;
    }
}