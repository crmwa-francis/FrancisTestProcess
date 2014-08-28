<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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


require_once('data/BeanFactory.php');
require_once('include/api/SugarApi.php');

class InpropertyApi extends SugarApi
{
    public function __construct()
    {

    }

    public function registerApiRest()
    {
        return array(
            'emailworkflow' => array(
                'reqType' => 'GET',
                'path' => array('iems_Title', '?', 'emailworkflow'),
                'pathVars' => array('module', 'record', 'emailworkflow'),
                'method' => 'emailWorkflow',
                'shortHelp' => 'This method send an email to all the related Title Release from the title module',
                'longHelp' => '',
            ),
            'mailmerge' => array(
                'reqType' => 'GET',
                'path' => array('iems_Title', 'mailmerge'),
                'pathVars' => array('module', 'mailmerge'),
                'method' => 'mailmerge',
                'shortHelp' => 'This method send an email to all the related Title Release from the title module',
                'longHelp' => '',
            ),
        );
    }

    public function emailWorkflow($api, $args)
    {

        $this->requireArgs($args, array('module', 'record','project_id'));

        /** @var $bean iems_Title */
        $bean = BeanFactory::getBean($args['module'])->prepEmail($args['record'],$args['project_id']);

        return $bean;
    }

    public function mailmerge($api, $args)
    {
        $this->requireArgs($args, array('module', 'id'));
        /**@var $titleRelease iems_TitleRelease */
        $titleRelease = BeanFactory::getBean('iems_TitleRelease', $args['id']);
        if (empty($titleRelease) || empty($titleRelease->id)) {
            throw new SugarApiExceptionMissingParameter('Title Release is not existing');
        } elseif (empty($titleRelease->iems_project_id_c)) {
            throw new SugarApiExceptionMissingParameter('Missing Project ID');
        } else {
            /**@var $return iems_Title */
            $return = BeanFactory::getBean('iems_Title')->getProjectContractsParentList(
                BeanFactory::getBean('iems_Project',$titleRelease->iems_project_id_c)
            );
        }
        return !empty($return) ? $return : array();
    }
}