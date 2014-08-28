<?php
require_once('custom/WebsiteHelpers/QueuePrepData.php');
$GLOBALS['timedate']->allow_cache = false;
class RecordLevelActivitystreamFix
{
    /**
     * @var User
     */
    private $bean;
    private $queueData;

    public $custom_modules = array(
        "iems_Listing",
        "iems_ListingPricing",
        "iems_SpecialOffer",
        "iems_Property",
        "iems_Title",
        "iems_TitleRelease",
        "iems_Pricing",
        "iems_FeatureList",
        "iems_Feature",
        "iems_Photo",
        "iems_Project",
        "iems_Options",
        "iems_SpecialCondition",
        "iems_Stages",
        "iems_OpenHouse",
        "iems_Registration",
        "iems_Promotion",
        "iems_ProjectContacts",
        "iems_ContractOption",
        "iems_Deposit",
        "iems_ContractAnnexure",
        "iems_News",
        "iems_WebTab",
        "iems_StageMap",
        "iems_PropertyCoordinates",
        "iems_MasterContract"
    );


    /**
     * Temporary fix for the activity stream that does not show
     * audit logs on record level
     *
     * Process Flow
     * load relationship activities_users
     * retrieve parent bean which is a custom module
     * retrieve user bean which is the current bean
     * retrieve changed fields for user
     * add parent bean to activities_user
     *
     * @param $bean
     * @param $event
     * @param $arguments
     */
    public function RecordLevelActivitystreamFix($bean, $event, $arguments)
    {
        require_once "modules/ActivityStream/Activities/Activity.php";
        global $log;

        $this->bean = $bean;
        $this->queueData = new QueuePrepData();
        $fields = array();

        try {
            if ($arguments["relationship"] == "activities_users" && $event == "after_relationship_add") {
                $activity = new Activity();
                $activity->retrieve($arguments["related_id"]);
                if (in_array($activity->parent_type, $this->custom_modules)) {
                    $activity->load_relationship("activities_users");
                    $activity_data = $activity->data;
                    if (!is_array($activity_data)) {
                        $activity_data = json_decode($activity_data, true);
                    }

                    $parent_bean = BeanFactory::getBean($activity->parent_type, $activity->parent_id);
                    if ($activity->activity_type == "update" && isset($activity_data["changes"])) {
                        foreach ($activity_data["changes"] as $field) {
                            $fields[$field["field_name"]] = 1;
                        }

                        $context = array("user" => $bean);
                        $parent_bean->ACLFilterFieldList($fields, $context);
                        $fields = array_keys($fields);

                        $activity->activities_users->add(
                            $parent_bean,
                            array('fields' => json_encode($fields), 'parent_type' => $activity->parent_type)
                        );
                    } elseif (in_array($activity->activity_type, array('link', 'unlink'))) {

                        //add activity stream to object or the doer of the action
                        $activity->activities_users->add(
                            BeanFactory::getBean($activity_data['object']['type'], $activity_data['object']['id']),
                            array('parent_type'=>$activity_data['object']['type'])
                        );
                        //add the subject or the related record
                        $activity->activities_users->add(
                            BeanFactory::getBean($activity_data['subject']['type'], $activity_data['subject']['id']),
                            array('parent_type'=>$activity_data['subject']['type'])
                        );

                    } else {
                        $activity->activities_users->add($parent_bean, array('parent_type' => $activity->parent_type));
                    }

                }
            }
        } catch (Exception $e) {
            $log->fatal("RecordLevelActivitystreamFix Error: " . $e->getMessage());
        }
    }
}