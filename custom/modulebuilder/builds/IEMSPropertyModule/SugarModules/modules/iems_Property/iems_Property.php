<?PHP
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/iems_Property/iems_Property_sugar.php');

class iems_Property extends iems_Property_sugar
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Property()
    {
        self::__construct();
    }

    public function save($check_notify = false)
    {
        $isNew = false;

        if (empty($this->date_entered)) {
            $isNew = true;
            $this->property_id = $this->incrementPropertyId();
            $this->name = str_pad($this->property_id, 5, '0', STR_PAD_LEFT);
        }

        return parent::save($check_notify);
    }

    /**
     * Sync the Listing Delete before actually deleting the record
     * @param $id
     */
    public function mark_deleted($id)
    {
        /**@ var $afterDeleteSync AfterDeleteWordpressSync*/
        require_once('custom/WebsiteHelpers/AfterDeleteWordpressSync.php');
        $afterDeleteSync = new AfterDeleteWordpressSync();
        $afterDeleteSync->deleteSync($this,'','');
        parent::mark_deleted($id);
    }

    /**
     * Populates the project_id field based on the parameters
     * passed to the http request.
     *
     * Note: This method is only intended for automatically popuplating the proejct id
     * when the property is created via subpanel under project.
     */
    private function populateProjectIdBasedFromHttpParams()
    {
        global $service;
        /**@var $service RestService */

        if ($service && $service instanceof RestService) {
            $request = $service->getRequest();
            $args = $request->getArgs();

            if (strtolower($args['module']) == 'iems_project' && !empty($args['record'])) {
                $this->iems_project_id_c = $args['record'];
            }
        }
    }

    /**
     * @return int
     */
    private function getPreviousPropertytId()
    {
        try {
            $sq = new SugarQuery();
            $sq->select(array('property_id'));
            $sq->from($this);
            $sq->orderBy('date_entered');
            $sq->limit(1);
            $prev = $sq->execute();
            return empty($prev[0]['property_id']) ? 0 : $prev[0]['property_id'];
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * @return int
     */
    private function incrementPropertyId()
    {
        $prevousPropertytId = (int)$this->getPreviousPropertytId();
        return $prevousPropertytId += 1;
    }

}

?>