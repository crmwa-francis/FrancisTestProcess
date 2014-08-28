<?php
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (\“MSA\”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
$module_name = 'iems_News';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
    'panels' =>
        array(
            0 =>
                array(
                    'name' => 'panel_header',
                    'label' => 'LBL_PANEL_1',
                    'fields' =>
                        array(
                            0 =>
                                array(
                                    'name' => 'published',
                                    'label' => 'LBL_PUBLISHED',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            1 =>
                                array(
                                    'label' => 'LBL_NAME',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'name',
                                ),
                            2 =>
                                array(
                                    'name' => 'filename',
                                    'label' => 'LBL_FILENAME',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array(
                                    'name' => 'published_date',
                                    'label' => 'LBL_PUBLISHED_DATE',
                                    'enabled' => true,
                                    'default' => true,
                                    'readonly' => true
                                ),
                            4 =>
                                array(
                                    'label' => 'LBL_DATE_MODIFIED',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'date_modified',
                                    'readonly' => true
                                ),
                        ),
                ),
        ),
    'orderBy' =>
        array(
            'field' => 'date_modified',
            'direction' => 'desc',
        ),
    'type' => 'subpanel-list',
    'rowactions' => array(
        'css_class' => 'pull-right',
        'actions' => array(
            array(
                'type' => 'rowaction',
                'css_class' => 'btn',
                'tooltip' => 'LBL_PREVIEW',
                'event' => 'list:preview:fire',
                'icon' => 'icon-eye-open',
                'acl_action' => 'view',
                'allow_bwc' => false,
            ),
            array(
                'type' => 'rowaction',
                'name' => 'edit_button',
                'icon' => 'icon-pencil',
                'label' => 'LBL_EDIT_BUTTON',
                'event' => 'list:editrow:fire',
                'acl_action' => 'edit',
                'allow_bwc' => false,
            ),
        ),
    )
);
