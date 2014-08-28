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
require_once('modules/iems_Title/iems_Title_sugar.php');

class iems_Title extends iems_Title_sugar
{

    /**
     * @var HookHelper
     */
    private $relHelper;
    /**
     * @var SugarJobQueue
     */
    private $scheduleJob;

    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
     */
    function iems_Title()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function setHelper()
    {
        $filePath = 'custom/LogicHookHelpers/RelationshipHookHelper.php';
        if ((empty($this->relHelper) || !($this->relHelper instanceof HookHelper)) && SugarAutoLoader::fileExists($filePath)) {
            require_once($filePath);
            return $this->relHelper = new HookHelper();
        }
        return false;
    }

    /**
     * @param bool $check_notify
     * @return String|void
     */
    public function save($check_notify = FALSE)
    {
        parent::save($check_notify);
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
        $afterDeleteSync->deleteSync($this, '', '');
        parent::mark_deleted($id);
    }

    /**
     * Get the list of project contacts to be sent an email
     *
     * @TODO remove this method and make it centralized
     * @param string $id Title Record ID
     * @return bool
     */
    public function prepEmail($id, $projectId)
    {
        if (empty($id) || empty($projectId)) {
            throw new SugarApiExceptionInvalidParameter('Invalid Params supplied for this action', null, 'iems_Title', 550);
        }

        /** @var $title iems_Title */
        $title = $this->retrieve($id);
        if (empty($title->id)) {
            throw new SugarApiException('Title record cannot be found', null, 'iems_Title', 550);
        }
        $project = BeanFactory::retrieveBean('iems_Project', $projectId);
        if (empty($project->id)) {
            throw new SugarApiException('Project record cannot be found', null, 'iems_Title', 550);
        }

        $title->load_relationship('iems_title_iems_titlerelease');
        if ($title->iems_title_iems_titlerelease instanceof Link2) {
            $tl = $title->iems_title_iems_titlerelease->getBeans(array('limit' => 1));
            if (empty($tl)) {
                throw new SugarApiException('Missing Title and Title Release relationship', null, 'iems_Title', 550);
            }
        } else {
            throw new SugarApiException('Missing Title and Title Release relationship', null, 'iems_Title', 550);
        }
        $this->getRecepients($projectId, $project);
    }

    /**
     * Get the total recipient record that will receive the email
     * @TODO remove this method and make it centralized
     * @param $projectId
     * @return bool
     */
    public function getRecepients($projectId = '', $project = null)
    {
        if ($this->setHelper() === false) {
            return;
        }

        if (empty($projectId) && empty($project->id)) {
            return false;
        }
        if (empty($project->id)) {
            $project = BeanFactory::getBean('iems_Project', $projectId);
        }

        if (empty($project) || empty($project->id)) {
            return false;
        }

        $module1 = 'iems_ProjectContacts';
        $module2 = 'iems_Project';

        if (($rel = $this->relHelper->getRelationshipByModules($module1, $module2)) == false)
            return false;

        $projectContactsIds = $this->relHelper->getRelatedRecordId($project, $rel);

        if (empty($projectContactsIds) || !is_array($projectContactsIds)) {
            throw new SugarApiException('Missing Project Contact to send the email to', null, 'iems_Title', 550);
        }


        foreach ($projectContactsIds as $id) {
            /** @var $projectContact iems_ProjectContacts */
            $projectContact = BeanFactory::getBean($module1, $id);

            if (empty($projectContact) || empty($projectContact->parent_id))
                continue;
            /** @var $record Contact|Account */
            $record = BeanFactory::getBean($projectContact->parent_type, $projectContact->parent_id);
            if (empty($record) || empty($record->id) || empty($record->email1)) {
                continue;
            }
            $templateID = $this->relHelper->template->getTemplate('email_title_release');
            if (empty($templateID)) {
                throw new SugarApiException('Email Template is Missing Please Contact your administrator to set it up for you', null, 'iems_Title', 550);
            }
            $template = $this->relHelper->util->parseTemplate($templateID, $record);
            if ($template == false) {
                throw new SugarApiException('Email Template is <strong>Missing or Invalid</strong> Please Contact your administrator to set it up for you', null, 'iems_Title', 550);
            }
            $this->relHelper->util->sendEmail($record->email1, $template['subject'], $template['body_html'], $record);
        }
        return true;
    }

    /**
     * Return an array of related Title Release
     * @param null $titleId
     * @return array
     * @deprecated This method will be removed after v1 is finished with the update for 7.2.2
     */
    public function getTitleRelease($titleId = null)
    {
        if (!$titleId) {
            return;
        }

        $titleRelease = BeanFactory::getBean('iems_TitleRelease')->get_list(
            'date_entered DESC',
            "iems_titlerelease.iems_title_id_c = '{$titleId}' "
        );

        if (!empty($titleRelease['list'])) {
            $titleReleaseIds = array();
            foreach ($titleRelease['list'] as $tl) {
                if (empty($tl)) {
                    continue;
                }
                $titleReleaseIds[] = $tl->id;
            }
        }
        return $titleReleaseIds;
    }

    /**
     * Return an array of mixed Contacts | Accounts with the following attributes
     * <code>
     *  $return = array(
     *                   array(
     *                            'id' => 'xxxxxxxxxx-xxx-xxxx-xxxxx,
     *                            'module' => 'Accounts',
     *                            'email' => 'your@email.here
     *                        )
     *              )
     * </code>
     * @param iems_Project $project
     * @return array
     */
    public function getProjectContractsParentList(iems_Project $project)
    {
        if (empty($project->id)) {
            return;
        }

        $sq = new SugarQuery();
        $sq->select(array('parent_name', 'parent_type'));
        $sq->from(BeanFactory::getBean('iems_ProjectContacts'));
        $list = $sq->execute();
        if (empty($list)) {
            return;
        }

        foreach ($list as $row) {
            if (empty($row['parent_type']) || empty($row['parent_id'])) {
                continue;
            }

            $parent = BeanFactory::getBean($row['parent_type'], $row['parent_id']);
            if (!empty($parent) && !empty($parent->id)) {
                $records[] = array(
                    'id' => $parent->id,
                    'module' => $parent->module_dir,
                    'email_address' => $parent->email1,
                    'name' => $parent->name,
                );
            }
        }
        return $records;
    }
}


?>