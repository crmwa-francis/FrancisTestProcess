<?php
require_once('modules/iems_OpenHouse/iems_OpenHouse_sugar.php');
class iems_OpenHouse extends iems_OpenHouse_sugar {

    public $email_addresses;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_OpenHouse(){
        self::__construct();
    }

    public function __construct(){
        parent::__construct();
        $this->emailAddress = BeanFactory::getBean('EmailAddresses');
    }

    public function fill_in_relationship_fields()
    {
        parent::fill_in_relationship_fields();
        $this->emailAddress->handleLegacyRetrieve($this);
    }

}