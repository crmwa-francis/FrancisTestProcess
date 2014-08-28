<?php
require_once('modules/Contacts/ContactsApiHelper.php');

class CustomContactsApiHelper extends ContactsApiHelper
{
    public function populateFromApi(SugarBean $bean, array $submittedData, array $options = array())
    {
        return parent::populateFromApi($bean, $submittedData, $options);
    }


    public function formatForApi(SugarBean $bean, array $fieldList = array(), array $options = array())
    {
        $bean->retrieve($bean->id);
        $data = parent::formatForApi($bean, $fieldList, $options);

        $data['phone_work'] = $bean->phone_work;
        $data['name'] = $bean->name;
        $data['full_name'] = $bean->full_name;
        $data['full_name_c'] = $bean->full_name_c;
        return $data;
    }
} 