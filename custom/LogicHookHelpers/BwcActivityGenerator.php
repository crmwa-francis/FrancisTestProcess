<?php
class BwcActivityGenerator
{

    /**
     * @var Activity
     */
    private $activity;

    /**
     * @var SugarBean
     */
    private $bean;

    /**
     * @var HookHelper
     */
    private $rel;

    public function createActivity($bean, $event, $arguments)
    {
        $this->bean = $bean;
        $this->initActivity();
        $this->saveActivity($this->getRecordDifference());
    }

    /**
     * Instantiates the activity
     * @return Activity
     */
    private function initActivity()
    {
        return $this->activity = new Activity();
    }

    /**
     * Instantiates the relationship helper
     * @return bool|HookHelper
     */
    public function initRelationshipHelper()
    {
        $filePath = 'custom/LogicHookHelpers/RelationshipHookHelper.php';
        if ((empty($this->rel) || !($this->rel instanceof HookHelper)) && SugarAutoLoader::fileExists($filePath)) {
            require_once($filePath);
            return $this->rel = new HookHelper();
        }
        return false;
    }

    /**
     * Returns an array of changed records
     * @return array
     */
    private function getRecordDifference()
    {
        $return = array();

        $excludeFields = array(
            'date_entered',
            'date_modified',
        );

        if (!empty($this->bean->fetched_row)) {
            foreach ($this->bean->fetched_row as $key => $value) {
                if (!in_array($key, $excludeFields) && $this->bean->$key != $value) {
                    $return[$key] = array(
                        'field_name' => $key,
                        'data_type' => $this->bean->field_name_map[$key]['type'],
                        'before' => $value,
                        'after' => $this->bean->$key,
                    );
                }
            }
        }
        return $return;
    }

    /**
     * Creates the Activity Record
     * @param array $changes
     * @param string $type
     */
    private function saveActivity($changes, $type = 'update')
    {
        if (!($this->activity instanceof Activity) || empty($this->activity)) {
            $this->initActivity();
        }
        if (empty($changes)) {
            return;
        }
        $this->activity->activity_type = $type;
        $this->activity->data = $this->createActivityData($changes);
        $this->activity->parent_id = $this->bean->id;
        $this->activity->parent_type = $this->bean->module_dir;
        $this->activity->created_by = $GLOBALS['current_user']->id;
        $this->activity->save();
        $this->relateToUser();
    }

    /**
     * Create the array for the data field
     * @param array $changes
     * @return array
     */
    private function createActivityData($changes = array())
    {
        $return = json_encode(
            array(
                'object' => array(
                    'name' => $this->bean->name,
                    'type' => $this->bean->object_name,
                    'module' => $this->bean->module_dir,
                    'id' => $this->bean->id,
                ),
                'changes' => $changes
            )
        );

        return !empty($changes) ? $return : $changes;
    }

    /**
     * Related the activity to the currently logged in user
     */
    private function relateToUser()
    {
        if ($this->initRelationshipHelper() == false) {
            return;
        }
        global $current_user;

        $linkName = $this->rel->getRelationshipByModules($this->activity->module_name, $current_user->module_dir);

        if (!empty($linkName)) {
            $this->activity->load_relationship($linkName);
            $this->activity->$linkName->add($current_user, array($current_user->id));
        }
    }

}
