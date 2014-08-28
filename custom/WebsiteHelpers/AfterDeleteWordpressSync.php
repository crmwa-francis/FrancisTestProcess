<?php
require_once('custom/WebsiteHelpers/SyncDataToWebsite.php');
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');
class AfterDeleteWordpressSync
{
    /**
     * @var SugarBean
     */
    private $bean;

    /**
     * @var SyncDataToWebsite
     */
    private $client;

    /**
     * @var HookHelper
     */
    private $rel;

    private $relationships = array(
        'iems_Project' => '',
        'iems_Property' => '',
        'iems_Title' => 'iems_Project',
        'iems_WebTab' => 'iems_Project',
        'iems_News' => 'iems_Project',
        'iems_Photo' => 'iems_Project',
        'Documents' => 'iems_Project',
        'iems_TitleRelease' => 'iems_Title',
        'iems_Listing' => 'iems_Property',
    );

    function deleteSync($bean, $event = '', $arguments = array())
    {
        $this->bean = $bean;
        $this->client = new SyncDataToWebsite();
        $this->rel = new HookHelper();
        $this->executeSyncProcess();
    }

    private function executeSyncProcess()
    {
        if($this->checkRelationship() === true)
        {
            $return = $this->syncToWebsite($this->generateDataArray());
            $GLOBALS['log']->debug('RETURN FROM WEB SYNC: '.print_r($return,true));
        }
    }

    /**
     * @TODO replace the url depending on the website to sync to
     * @TODO place this on the config if possible
     * @param array $data
     * @return bool|Zend_Http_Response
     */
    private function syncToWebsite($data)
    {
        $this->client->setRequestType('POST');
        return $this->client->syncToWordpress($data);

    }


    private function checkRelationship()
    {
        if (array_key_exists($this->bean->module_dir, $this->relationships)) {
            if (empty($this->relationships[$this->bean->module_dir])) {
                return true;
            } else {
                $relName = $this->rel->getRelationshipByModules(
                    $this->bean->module_dir,
                    $this->relationships[$this->bean->module_dir]
                );
                if (!empty($rel)) {
                    $relatedRecords = $this->rel->getRelatedRecordId($this->bean, $relName);
                    if (!empty($relatedRecords)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }


    private function generateDataArray()
    {
        return array(
            'sugar_activity_id' => '',
            'sugar_module' => $this->bean->module_dir,
            'sugar_record_id' => $this->bean->id,
            'sugar_activity_type' => 'delete',
            'priority' => 'normal',
            'date_sent' => TimeDate::getInstance()->getNow()->asDb(),
            'sent_by' => $this->bean->modified_user_id,
        );
    }
}