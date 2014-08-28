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
require_once('modules/iems_Deposit/iems_Deposit_sugar.php');
class iems_Deposit extends iems_Deposit_sugar
{

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Deposit()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        if (empty($this->date_entered)) {
            $this->name = $this->incrementDepositName();
        }

        parent::save($check_notify);
        return $this->id;
    }

    /**
     * @return int
     */
    private function getPreviousDepositName()
    {
        $sq = new SugarQuery();
        $sq->select(array('name'));
        $sq->from($this);
        $sq->orderBy('date_entered');
        $sq->limit(1);
        $name = $sq->execute();
        return empty($name[0]['name']) ? 0 : $name[0]['name'];
    }

    /**
     * @return int
     */
    private function incrementDepositName()
    {
        $prevousDepositName = (int)$this->getPreviousDepositName();
        return $prevousDepositName += 1;
    }

}

?>