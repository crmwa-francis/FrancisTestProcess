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
require_once('modules/iems_MasterContract/iems_MasterContract_sugar.php');

class iems_MasterContract extends iems_MasterContract_sugar
{

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_MasterContract()
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
            $this->mc_id = $this->incrementMcId();
        }

        $result = parent::save($check_notify);
        return $result;
    }

    /**
     * @return int
     */
    private function getPreviousMcId()
    {
        try {
            $sq = new SugarQuery();
            $sq->select(array('mc_id'));
            $sq->from($this);
            $sq->orderBy('date_entered');
            $sq->limit(1);
            $mc = $sq->execute();
            return empty($mc[0]['mc_id']) ? 0 : $mc[0]['mc_id'];
        } catch (Exception $e) {
            return 0;
        }
    }

    /**
     * @return int
     */
    private function incrementMcId()
    {
        $previousMcId = (int)$this->getPreviousMcId();
        $previousMcId += 1;
        $this->mc_id = $previousMcId;
        return $previousMcId;
    }


}

?>