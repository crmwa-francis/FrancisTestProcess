<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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


$module_name='iems_SpecialCondition';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'name'=>array(
            'vname' => 'LBL_NAME',
            'width' => '10%',
        ),
        'date_modified'=>array(
            'vname' => 'LBL_EXTRA_INFO',
            'width' => '10%',
        ),
        'stage'=>array(
            'vname' => 'LBL_STAGE',
            'width' => '10%',
        ),
        'price_c'=>array(
            'vname' => 'LBL_PRICE_C',
            'width' => '10%',
        ),
        'date_expected'=>array(
            'vname' => 'LBL_DATE_EXPECTED',
            'width' => '10%',
        ),
        'date_approved'=>array(
            'vname' => 'LBL_DATE_APPROVED',
            'width' => '10%',
        ),
        'approved_by'=>array(
            'vname' => 'LBL_APPROVED_BY',
            'width' => '10%',
        ),
        'expired'=>array(
            'vname' => 'LBL_EXPIRED',
            'width' => '10%',
        ),
        'edit_button'=>array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%',
        ),
        'remove_button'=>array(
            'vname' => 'Revert Expiration',
            'widget_class' => 'SubpanelRevertExpirationButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);