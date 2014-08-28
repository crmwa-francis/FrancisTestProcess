<?php

require_once('include/entryPoint.php');
require_once('custom/LogicHookHelpers/UtilityHelper.php');
require_once('custom/LogicHookHelpers/SettingsHelper.php');
class HookHelper
{
    /**
     * @var UtilityHelper
     */
    public $util;
    /**
     * @var SettingsHelper
     */
    public $template;

    function __construct()
    {
        $this->util = new UtilityHelper();
        $this->template = new SettingsHelper();
    }

    /**
     * Returns an array of related ID
     * @param SugarBean $parentRecord
     * @param string $relationshipName
     * @return array
     */
    public function getRelatedRecordId(SugarBean $parentRecord, $relationshipName)
    {
        $return = array();
        if (empty($parentRecord) || !($parentRecord instanceof SugarBean) || empty($relationshipName)) {
            return $return;
        }
        $parentRecord->load_relationship($relationshipName);
        $list = $parentRecord->$relationshipName->getBeans();

        if (empty($list)) {
            return $return;
        }

        foreach ($list as $key => $value) {
            $return[] = $value->id;
        }
        return $return;
    }

    /**
     * This function recursively related one record from
     * one relationship to the other
     * @param SugarBean $parentMod
     * @param $relateToMod
     * @param $fromMod
     * @param $fromId
     * @return bool
     */
    public function relateAllRecord(SugarBean $parentMod, $relateToMod, $fromMod, $fromId)
    {
        if (empty($parentMod) || !($parentMod instanceof SugarBean) || empty($parentMod->id) || empty($relateToMod) || empty($fromMod) || empty($fromId)) {
            return;
        }

        if (!($rootRelationshipName = $this->getRelationshipByModules($parentMod->module_dir, $relateToMod))) {
            return false;
        }

        $list = $this->getRelatedRecordId($parentMod, $rootRelationshipName);

        if (!empty($list) && (($newRelName = $this->getRelationshipByModules($relateToMod, $fromMod)) !== false)) {
            foreach ($list as $id) {
                $record = BeanFactory::getBean($relateToMod, $id);
                if (empty($record) || empty($record->id)) {
                    continue;
                }

                $record->load_relationship($newRelName);
                $record->$newRelName->add($fromId);
            }
        }
        return;
    }

    /**
     * @param SugarBean $parentRecord
     * @param SugarBean $toBeRemoved
     * @param $fromModule
     */
    public function removeAllRelationship(SugarBean $parentRecord, SugarBean $toBeRemoved, $fromModule)
    {
        if (
            empty($parentRecord) || !($parentRecord instanceof SugarBean) || empty($parentRecord->id) ||
            empty($toBeRemoved) || !($toBeRemoved instanceof SugarBean) || empty($toBeRemoved->id) ||
            empty($fromModule)
        ) {
            return;
        }

        if (!($rootRelationshipName = $this->getRelationshipByModules($parentRecord->module_dir, $fromModule))) {
            return false;
        }

        $list = $this->getRelatedRecordId($parentRecord, $rootRelationshipName);

        if (!empty($list) && (($newRelName = $this->getRelationshipByModules(
                    $toBeRemoved->module_dir,
                    $fromModule
                )) !== false)
        ) {
            foreach ($list as $id) {
                $toBeRemoved->load_relationship($newRelName);
                $toBeRemoved->$newRelName->delete($toBeRemoved->id, $id);
            }
        }
    }


    /**
     * This function retrieves the relationship name of two modules
     * @param string $m1
     * @param string $m2
     * @return mixed bool | string
     */
    public function getRelationshipByModules($m1, $m2)
    {
        global $db;
        $rel = new Relationship;
        if ($rel_info = $rel->retrieve_by_sides($m1, $m2, $db)) {
            return $rel_info['relationship_name'];
        } elseif ($rel_info = $rel->retrieve_by_sides($m2, $m1, $db)) {
            return $rel_info['relationship_name'];
        }
        return false;
    }
}