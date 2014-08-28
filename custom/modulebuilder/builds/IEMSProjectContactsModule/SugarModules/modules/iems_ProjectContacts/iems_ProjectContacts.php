<?php
require_once('modules/iems_ProjectContacts/iems_ProjectContacts_sugar.php');

class iems_ProjectContacts extends iems_ProjectContacts_sugar
{

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_ProjectContacts()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        $this->name = $this->parent_name;
        return parent::save($check_notify);
    }

    function retrieve($id='-1', $encode=true,$deleted=true)
    {
        $ret = parent::retrieve($id,$encode,$deleted);
        if(!empty($this->parent_type) && !empty($this->parent_id)){
            $parentBean = BeanFactory::getBean($this->parent_type, $this->parent_id);
            if (strtolower($ret->parent_type) == 'accounts') {
                $ret->phone_office = $parentBean->phone_office;
                $ret->phone_mobile = $parentBean->phone_alternate;
            }
            if (strtolower($this->parent_type) == 'contacts') {
                $ret->phone_mobile = $parentBean->phone_mobile;
                $ret->phone_office = $parentBean->phone_work;
            }

            $ret->email1 = $parentBean->email1;
        }

        return $ret;
    }
}