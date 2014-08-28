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
require_once('modules/iems_StageMap/iems_StageMap_sugar.php');

class iems_StageMap extends iems_StageMap_sugar
{

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_StageMap()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        if (empty($this->date_entered) && empty($this->fetched_row['id'])) {
            $isNew = true;
            $this->stagemap_id = $this->incrementCoordinatetId();
            $this->name = str_pad($this->stagemap_id, 5, '0', STR_PAD_LEFT);
        }

        return parent::save($check_notify);
    }

    /**
     * @return int
     */
    private function getPreviousStageMaptId()
    {
        try {
            $sq = new SugarQuery();
            $sq->select(array('stagemap_id'));
            $sq->from($this);
            $sq->orderBy('date_entered');
            $sq->limit(1);
            $prev = $sq->execute();
            return empty($prev[0]['stagemap_id']) ? 0 : $prev[0]['stagemap_id'];
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * @return int
     */
    private function incrementCoordinatetId()
    {
        $previousId = (int)$this->getPreviousStageMaptId();
        return $previousId += 1;
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

}

?>