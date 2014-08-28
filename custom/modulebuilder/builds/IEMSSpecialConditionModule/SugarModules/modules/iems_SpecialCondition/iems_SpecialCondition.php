<?PHP
require_once('modules/iems_SpecialCondition/iems_SpecialCondition_sugar.php');

class iems_SpecialCondition extends iems_SpecialCondition_sugar
{
    public $isNew = false;

    function iems_SpecialCondition()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function __clone(){
        $this->id = $this->date_entered = $this->expired =  null;
        $this->fetched_row = array();
    }

    public function save($check_notify = false)
    {
        if(empty($this->date) && !isset($this->date)){
            $this->isNew = true;
        }
        if ($this->checkIfHasContract() === true){
            throw new SugarApiException('This Listing already has a related Contract', null, 'iems_SpecialCondition', 550);
        }
        parent::save($check_notify);
        if($this->validateIfFromRelationship() === true){
            return $this->specialConditionMainWorkflow();
        }
    }

    /**
     * @return boolean
     */
    private function validateIfFromRelationship(){
        switch(strtolower($this->parent_name_owner_mod)){
            case 'iems_mastercontract':
            case 'iems_listing':
                false;
                break;
            default:
                true;
                break;
        }
    }

    public function checkIfHasContract()
    {
        if(strtolower($this->parent_type) != 'iems_listing'){
            return false;
        }

        $sq = new SugarQuery();
        $sq->select(array("id"));
        $sq->from(BeanFactory::getBean("Contracts"));
        $sq->where()->equals("iems_listing_id_c", $this->parent_id);
        $result = $sq->execute();
        return (!empty($result)) ? true : false;
    }
    public function get_list_view_data()
    {
        $temp = parent::get_list_view_data();

        if (isset($GLOBALS['app_list_strings']['listing_dynamic_stage_list']) && !empty($GLOBALS['app_list_strings']['listing_dynamic_stage_list'])) {
            return $temp;
        }

        $sc = new self();
        $sc->retrieve($temp['ID']);
        $parentProject = $sc->getParentProject();

        $stages = explode(',', $parentProject->stages);
        $stageList = array();

        foreach ($stages as $stage) {
            $trimmedStage = trim($stage);
            $stageList[$trimmedStage] = $trimmedStage;
        }

        $GLOBALS['app_list_strings']['listing_dynamic_stage_list'] = $stageList;

        return $temp;
    }


    /**
     * Retrieves the parent project of this condition, based from the parent_type and parent_id.
     *
     * @return null|iems_Project
     */
    public function getParentProject()
    {
        if (empty($this->parent_type) || empty($this->parent_id)) {
            return null;
        }

        $parentBean = BeanFactory::getBean($this->parent_type, $this->parent_id);
        switch ($this->parent_type) {
            case 'iems_Project':
            {
                return $parentBean;
                break;
            }
            case 'iems_Listing':
            {
                return $parentBean->getParentProject();
                break;
            }
            case 'Contracts':
            {
                $result = null;
                if (!empty($parentBean->iems_project_id)) {
                    $result = BeanFactory::getBean('iems_Project', $parentBean->iems_project_id);
                }
                return $result;
                break;
            }
        }
    }

    /**
     * Main Workflow for the Special Conditions Module
     * If Created at Project Level, gets copied to related listing and contracts related to listings
     * Works only for newly created special conditions
     * All workflows gets ignored if special condition is updated
     * Insert additional field workflows here
     */
    public function specialConditionMainWorkflow()
    {
        if ($this->isNew) {
            $query = new SugarQuery();
            switch ($this->parent_type) {
                case "iems_MasterContract":
                    if(empty($this->expired) && !isset($this->expired)){
                        $this->retrieveListingsRelatedToProject($query);
                        $this->stageFieldIssetWorkflow($query);
                        $this->addSpecialConditionToListings($query);
                    }else{
                        $this->expiredFieldIssetWorkflow();
                    }
                    return $this->id;
                case "iems_Listing":
                    if(empty($this->expired) && !isset($this->expired)){
                        $this->extraInfoFieldWorkflow();
                    }else{
                        $this->expiredFieldIssetWorkflow();
                    }
                    return $this->id;
            }
        }

        return $this->id;
    }

    /**
     * If special condition added at the master contract level has a stage specified
     * copy the special condition to those listing with the specified only, else if
     * stage field is not specified, copy to all listings
     *
     * Stage field is used to find the listings that the special conditions will be copied to
     * Can be a single stage or multiple stages
     * If the stage field is not empty we are going to add an additional statement on the and clause
     * to target the listings for the stage(s) given
     *
     *
     * @param SugarQuery $query
     * @return SugarQuery
     */
    public function stageFieldIssetWorkflow(SugarQuery &$query)
    {
        if(empty($this->stage) && !isset($this->stage)){
            return $query;
        }
        $query->where()->in('stage', unencodeMultienum($this->stage));
        return $query;
    }

    public function addSpecialConditionToListings(SugarQuery $query)
    {
        $listing_ids = $query->execute();
        foreach($listing_ids as $parents){
            $this->cloneSpecialConditionBean(
                clone $this,
                $params = array('parent_type' => 'iems_Listing', 'parent_id' => $parents['id'])
            );
        }


        return $this->id;
    }

    /**
     * Retrieves related listing to project via master contract
     * This occurs when special condition is added at the master contract level
     *
     * @param SugarQuery $qry
     * @return bool|SugarQuery
     */
    public function retrieveListingsRelatedToProject(SugarQuery &$qry)
    {
        if ($this->parent_type != "iems_MasterContract") {
            return false;
        }

        $bean = BeanFactory::getBean($this->parent_type, $this->parent_id);

        $qry->select(array("id"));
        $qry->from(BeanFactory::getBean("iems_Listing"));
        $qry->where()->equals("deleted", "0");
        $qry->where()->equals("iems_project_id_c", $bean->iems_project_id);
        $qry->whereRaw("
            iems_listing.id IN (
                SELECT iems_listing.id FROM iems_listing
                INNER JOIN iems_project ON (
                  iems_project.id = iems_listing.iems_project_id_c
                  AND (iems_project.vendor_id IS NOT NULL
                  OR iems_project.vendor_id != '')
                  AND (iems_listing.vendor_id_c IS NOT NULL
                  OR iems_listing.vendor_id_c != '')
                )
            )
            AND(
                iems_listing.id NOT IN (select IFNULL(iems_listing_id_c,'') as id from contracts)
                )");

        return $qry;
    }

    /**
     * If expired field is set expire all special conditions related to listings that is related to
     * the project where listing has no related contract
     *
     *
     * @TODO add a where clause for the contract (contract is in stage 2)
     *
     * @return bool
     */
    public function expiredFieldIssetWorkflow()
    {
        global $db;

        if (empty($this->expired) && !isset($this->expired)) {
            return false;
        }

        if ($this->parent_type != "iems_Listing" && $this->parent_type != "iems_MasterContract") {
            return false;
        }

        $bean = BeanFactory::getBean($this->parent_type, $this->parent_id);
        $projectId = $bean->iems_project_id;
        if ($this->parent_type == "iems_MasterContract") {
            $projectId = $bean->iems_project_id;
        }

        $qry = new SugarQuery();
        $qry->select(array("id"));
        $qry->from(BeanFactory::getBean("iems_SpecialCondition"));
        $qry->where()->equals("deleted", "0");
        $qry->whereRaw(
            "iems_specialcondition.id IN (
                SELECT iems_specialcondition.id from iems_specialcondition
                  INNER JOIN  iems_listing ON (
                    iems_listing.id = iems_specialcondition.parent_id
                    AND iems_listing.deleted = 0
                  )
                  INNER JOIN iems_project ON (
                    iems_project.id = iems_listing.iems_project_id_c
                    AND iems_project.deleted = 0
                    AND iems_project.id = \"$projectId\"
                  )
                  WHERE iems_listing.id NOT IN (select IFNULL(iems_listing_id_c,'') as id from contracts)
                  )");
        $result = $qry->execute();

        $spcIdsCount = count($result);
        if (is_array($result) && $spcIdsCount) {
            $spcIds = array();
            foreach($result as $id){
                $spcIds[] = $id['id'];
            }
            $spcIds = "'".implode("','", $spcIds)."'";
            $res = $db->query("
            UPDATE iems_specialcondition
            SET iems_specialcondition.expired = \"$this->expired\"
            WHERE iems_specialcondition.id IN ($spcIds);
            ");
        }
        return true;
    }


    /**
     * Workflow if the special condition's extra_info field is not empty
     * If the use selects extra_info mark the corresponding fields on the Listing Title record accordingly
     */
    public function extraInfoFieldWorkflow()
    {
        $extra_info_array = array('easement', 'crossover', 'nbn', 'bushfire_management', 'transformer_located_next');
        if ($this->parent_type == 'iems_Listing') {
            $listing = BeanFactory::getBean('iems_Listing', $this->parent_id);
            if ($listing->load_relationship('iems_listing_iems_listingtitle')) {
                $listing_title = $listing->iems_listing_iems_listingtitle->getBeans();
                if (count($listing_title) > 0) {
                    $listing_title = array_shift($listing_title);
                    $extra_info = unencodeMultienum($this->extra_info);
                    if (empty($this->extra_info) && !isset($this->extra_info)) {
                        $extra_info = array();
                    }

                    $intersect = array_intersect($extra_info, $extra_info_array);
                    foreach ($extra_info_array as $key => $value) {
                        $listing_title->$value = 'no';
                        if (in_array($value, $intersect)) {
                            $listing_title->$value = 'yes';
                        }
                    }

                    $listing_title->save();
                }
            }
        }
    }

    /**
     * Creates a copy of the special condition bean to the specified parent record
     * @param iems_SpecialCondition $clone
     * @param array $params
     */
    public function cloneSpecialConditionBean(iems_SpecialCondition $clone, $params)
    {
        $clone->id = null;
        $clone->parent_id = $params['parent_id'];
        $clone->parent_type = $params['parent_type'];
        $clone->fetched_row = array();
        $clone->date_entered = null;
        $clone->save();
    }
}