<?php
require_once('vendor/Zend/Http/Client.php');
require_once('custom/LogicHookHelpers/RelationshipHookHelper.php');
require_once('custom/WebsiteHelpers/SyncDataToWebsite.php');
class QueuePrepData
{
    public $request = 'POST';
    private $hasHighPriorityField = 'normal';
    private $client;
    /**
     * @var HookHelper
     */
    private $rel;
    /**
     * @param $rawData
     */
    private $allowedModulesAndFields = array(
        'iems_Project' => array(
            'action' => array(
                'link',
                //'unlink',
                'create',
                'update',
            ),
            'validate_relationship' => false,
            'fields' => array(
                "aspect",
                "build_status",
                "buildings",
                "construction",
                "currency_id",
                "description",
                "duration",
                "estate_disclaimer",
                "estate_map",
                "facilities",
                "featured",
                "levels",
                "logo",
                "marketing_status",
                "name",
                "photo_image",
                "primary_address_country",
                "primary_address_lot_number",
                "primary_address_postalcode",
                "primary_address_state",
                "primary_address_street_name",
                "primary_address_street_number",
                "primary_address_suburb",
                "property_type",
                "registration",
                "show_on_web",
                "stages",
                "views",
                "website_url",
                "web_display_order",
            ),
        ),
        'Documents' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Project',
            'fields' => array(
                'builders_information',
                'document_name',
                'document_revision_id',
                'description',
                'subject',
                'display_order'
            ),
        ),
        'iems_TitleRelease' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Title',
            'fields' => array(
                'released',
                'date_c',
                'stage',
                'deposited_plan',
            ),
        ),
        'iems_Title' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Project',
            'fields' => array(
                'plan_c',
                'zoning_1',
                'zoning_2',
            ),
        ),
        'iems_Listing' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Property',
            'fields' => array(
                'primary_address_lot_number',
                'primary_address_street_number',
                'primary_address_street_name',
                'primary_address_suburb',
                'primary_address_state',
                'primary_address_postalcode',
                'primary_address_country',
                'stages',
                'property_status',
                'currency_id',
                'land_price',
                'sale_price',
            ),
        ),
        'iems_Property' => array(
            'action' => array(
                'link',
                //'unlink',
                'create',
                'update',
            ),
            'validate_relationship' => false,
            'fields' => array(
                'photo',
                'lot_width',
                'lot_length',
                'land_size',
                'loading',
                'estate_map_coordinates',
                'inset_coordinates',
            ),
        ),
        'iems_SpecialOffer' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'related_module' => 'iems_Project',
            'fields' => array(
                'description',
                'display_order',
            ),
        ),
        'iems_Photo' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'related_module' => 'iems_Project',
            'fields' => array(
                'photo_image',
                'suburb_snapshot',
                'banner_url',
                'category',
                'name',
                'description',
                'show_on_web',
                'estate_second_pages',
            ),
        ),
        'iems_WebTab' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Project',
            'fields' => array(
                'amenities_copy',
                'builder_information_copy',
                'estate_covenant_copy',
                'estate_map_copy',
                'house_designs_copy',
                'photo_gallery_copy',
                'price_list_copy',
                'progress_news_copy',
                'suburb_snapshot_copy',
                'special_offers_banner',
            ),
        ),
        'iems_News' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Project',
            'fields' => array(
                'filename',
                'content',
                'published',
                'name',
            ),
        ),
        'iems_StageMap' => array(
            'action' => array(
                'link',
                //'unlink',
                'update',
            ),
            'validate_relationship' => true,
            'related_module' => 'iems_Project',
            'fields' => array(
                'color',
                'coordinates',
                'map',
                'stage',
                'show_on_web',
            ),
        ),
    );

    private $highPriorityFields = array(
        'property_status',
        'build_status',
        'marketing_status',
        'land_price',
        'house_price'
    );

    public function __construct()
    {
        $this->client = new SyncDataToWebsite();
        $this->rel = new HookHelper();
    }

    /**
     * override this function if further process is required
     * @param $bean
     * @param string $event
     * @param array $arguments
     * @return bool|Zend_Http_Response
     */
    public function executeSyncToWordpress($bean, $event, $arguments)
    {
        $data = $this->prepdataEntry($bean);
        $return = $this->client->syncToWordpress($data);
        $GLOBALS['log']->debug(print_r($return,true));
        return $return;
    }

    /**
     * this function prepare the data that will be synced to wordpress
     * @param Activity $activity
     * @return array|bool
     */
    public function prepdataEntry(Activity $activity)
    {
        if ($activity instanceof Activity && !empty($activity->id)) {
            $data = json_decode($activity->data);
            if ($activity->activity_type == 'link' || $activity->activity_type == 'unlink') {
                $activity = $this->checkRestService($activity);
            }
            if ($this->validateActivity(
                    BeanFactory::getBean($activity->parent_type, $activity->parent_id),
                    $activity->activity_type,
                    $data
                ) === false
            ) {
                return false;
            }
            $this->client->setRequestType($this->request);
            return array(
                'sugar_activity_id' => $activity->id,
                'sugar_module' => $activity->parent_type,
                'sugar_record_id' => $activity->parent_id,
                'sugar_activity_type' => $activity->activity_type,
                'priority' => $this->hasHighPriorityField,
                'date_sent' => TimeDate::getInstance()->getNow()->asDb(),//$activity->fetched_row['date_entered'],
                'sent_by' => $activity->created_by_name,
            );
        }
    }

    /**
     * @param Activity $activity
     */
    private function checkRestService(Activity $activity)
    {
        global $service;
        /**@var $service RestService */
        if ($service && $service instanceof RestService) {
            $request = $service->getRequest();
            $args = $request->getArgs();
        }
        if (!empty($args['module']) && !empty($args['record'])) {
            $activity->parent_type = $args['module'];
            $activity->parent_id = $args['record'];
        }
        return $activity;
    }

    /**
     * Perform all the validation:
     * check if the module is allowed to be sent to WP queue
     * check if the updated field is allowed tobe sent to the WP queue
     * check if the required fields are not empty
     * @param SugarBean $module
     * @return bool
     */
    public function validateActivity(SugarBean $module, $activityType, $data)
    {
        if ($module instanceof SugarBean && !empty($module->id)) {
            if ($this->checkIfAllowedModule($module->module_dir) === false) {
                return false;
            }
            if ($this->checkIfAllowedAction($activityType, $module->module_dir) === false) {
                return false;
            }
            if (($activityType != 'link' || $activityType == 'unlink') && $this->checkForMultipleRequiredProperty(
                    $module
                ) === false
            ) {
                return false;
            }
            if ($activityType == 'update' && !empty($data->changes) && $this->checkListOfUpdatedFields(
                    $data->changes,
                    $module->module_dir
                ) === false
            ) {
                return false;
            }
            return true;
        }
        return false;
    }

    /**
     * check if there are required fields/property
     * check if those fields/property exists and has value
     * @param SugarBean $module
     * @return bool
     */
    private function checkForMultipleRequiredProperty(SugarBean $module)
    {
        if (
            empty($this->allowedModulesAndFields[$module->module_dir]['validate_relationship']) ||
            $this->allowedModulesAndFields[$module->module_dir]['validate_relationship'] == false ||
            empty($this->allowedModulesAndFields[$module->module_dir]['related_module'])
        ) {
            return true;
        }

        $relName = $this->rel->getRelationshipByModules(
            $module->module_dir,
            $this->allowedModulesAndFields[$module->module_dir]['related_module']
        );
        if (!empty($relName)) {
            $relatedRecords = $this->rel->getRelatedRecordId($module, $relName);
            if (!empty($relatedRecords)) {
                return true;
            }
        }

        return false;
    }

    /**
     * check if the action being performed is allowed for that module
     * @param string $action
     * @param string $module
     * @return bool
     */
    private function checkIfAllowedAction($action, $module)
    {
        if (in_array($action, $this->allowedModulesAndFields[$module]['action'])) {
            return true;
        }
        return false;
    }

    /**
     * check if the module is part of the queue send modules
     * @param string $module
     * @return bool
     */
    private function checkIfAllowedModule($module)
    {
        if (in_array($module, array_keys($this->allowedModulesAndFields))) {
            return true;
        }
        return false;
    }

    /**
     * check if a list of fields have an existing field that needs to be sent to the WP queue
     * @param array $changedFields
     * @param string $module
     * @return bool
     */
    private function checkListOfUpdatedFields($changedFields, $module)
    {
        foreach ($changedFields as $field) {

            if ($this->checkIfAllowedField($module, $field->field_name) == true) {
                return true;
            }
        }
        return false;
    }

    /**
     * check if the updated field is on the list for the module
     * @param $module
     * @param $field
     * @return bool
     */
    private function checkIfAllowedField($module, $field)
    {
        if (in_array($field, $this->allowedModulesAndFields[$module]['fields'])) {
            $this->checkForPriorityHighFields($field);
            return true;
        }
        return false;
    }

    /**
     * check if the updated field is a priority field
     * @param string $field
     * @return bool
     */
    private function checkForPriorityHighFields($field)
    {
        if (in_array($field, $this->highPriorityFields)) {
            $this->hasHighPriorityField = 'high';
            return true;
        }
        return false;
    }
}