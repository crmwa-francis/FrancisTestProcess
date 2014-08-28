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
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/iems_Registration/iems_Registration_sugar.php');
class iems_Registration extends iems_Registration_sugar {

	/**
	 * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
	 */
	function iems_Registration(){
		self::__construct();
	}

	public function __construct(){
		parent::__construct();
	}

    public function save($check_notify = false)
    {
        $isNew = false;
        if (empty($this->date_entered) && empty($this->fetched_row['id'])) {
            $isNew = true;
            $this->registration_id = $this->incrementRegistrationId();
            $this->name = str_pad($this->registration_id, 5, '0', STR_PAD_LEFT);
        }
        $return = parent::save($check_notify);
        return $return;
    }
    private function incrementRegistrationId()
    {
        $prevousRegistrationId = (int)$this->getPreviousRegistrationId();
        return $prevousRegistrationId += 1;
    }
    private function getPreviousRegistrationId()
    {
        try {
            $registration = $this->get_list('date_entered desc');
            $previous = array_shift($registration['list']);
            return !empty($previous) ? $previous->registration_id : 0;
        } catch (Exception $e) {
            return 0;
        }
    }
}
?>