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
require_once('modules/iems_TitleRelease/iems_TitleRelease_sugar.php');
class iems_TitleRelease extends iems_TitleRelease_sugar
{
    /**
     * @var iems_Title
     */
    public $title;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_TitleRelease()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function save($check_notify = false)
    {
        if(!empty($this->fetched_row['id']) && $this->iems_project_id_c == null){
            $this->getRelatedProject();
        }
        $this->handleEmailWorkflow();
        parent::save($check_notify);
        $this->depositPlanFieldUpdate();
    }

    private function handleEmailWorkflow()
    {

        if (!empty($this->date_c)) {
            /** @var $project iems_Project */
            $project = BeanFactory::getBean('iems_Project', $this->iems_project_id_c);
            if (!empty($project) && !empty($project->id)) {
                $project->title_released = $this->date_c;
                $project->save();
            }
        }

        if (!empty($this->iems_project_id_c) && $this->send_email == 1) {
            $title = BeanFactory::getBean('iems_Title')->getRecepients($this->iems_project_id_c);
        }

        $this->send_email = 0;
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
     * Get Title related Project
     */
    private function getRelatedProject()
    {
        global $service;
        /**@var $service RestService */
        if ($service && $service instanceof RestService) {
            $request = $service->getRequest();
            $args = $request->getArgs();
        }
        if (strtolower($args['module']) == 'iems_title' && !empty($args['record'])) {
            /**@var $property iems_Title */
            $this->title = BeanFactory::getBean($args['module'])->retrieve($args['record']);
            if ($this->title instanceof iems_Title && !empty($this->title->id)) {
                $this->iems_project_id_c = $this->title->project_id;
                $this->iems_title_id_c = $this->title->id;
            }
        }
    }

    /**
     * Update DP Field (Deposit Plan)
     */
    public function depositPlanFieldUpdate()
    {
        $this->updateProjectTitleDpField();
        $this->updateListingTitlesDpField();
    }

    /**
     * Update the related title's Deposit Field
     */
    private function updateProjectTitleDpField()
    {
        if ((!($this->title instanceof iems_Title) || empty($this->title->id)) && !empty($this->iems_title_id_c)) {
            $this->title = BeanFactory::getBean('iems_Title')->retrieve($this->iems_title_id_c);
            $this->title->deposited_plan = $this->deposited_plan;
            $this->title->save();
        } elseif ($this->title instanceof iems_Title && !empty($this->title->id)) {
            $this->title->deposited_plan = $this->deposited_plan;
            $this->title->save();
        } else {
            return;
        }


    }

    /**
     * Update the DP field on the Listing Title
     * IF the listing has the same stage as the title release
     */
    private function updateListingTitlesDpField()
    {
        if (empty($this->title->project_id)) {
            return;
        }

        $sq = new SugarQuery();
        $sq->from(BeanFactory::getBean('iems_Listing'));
        $sq->join('iems_listing_iems_listingtitle', array('alias' => 't'));
        $sq->select(array('t.id'));
        $sq->where()->equals('iems_listing.iems_project_id_c',$this->title->project_id);
        $list = $sq->execute();

        if(!empty($list)){
            foreach($list as $row){
                if(empty($row['id'])){
                    continue;
                }
                /**@var $title iems_ListingTitle */
                $title = BeanFactory::getBean('iems_ListingTitle',$row['id']);
                if(!empty($title) && !empty($title->id)){
                    $title->deposited_plan = $this->deposited_plan;
                    $title->save();
                }
            }
        }
    }
}

?>