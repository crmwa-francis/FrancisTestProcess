<?php
// created: 2014-03-17 09:20:16
$viewdefs['iems_TitleRelease']['base']['view']['subpanel-list'] = array(
    'rowactions' =>
        array(
            'css_class' => 'pull-right',
            'actions' =>
                array(
                    0 =>
                        array(
                            'type' => 'rowaction',
                            'css_class' => 'btn',
                            'tooltip' => 'LBL_PREVIEW',
                            'event' => 'list:preview:fire',
                            'icon' => 'icon-eye-open',
                            'acl_action' => 'view',
                            'allow_bwc' => false,
                        ),
                    1 =>
                        array(
                            'type' => 'rowaction',
                            'name' => 'edit_button',
                            'icon' => 'icon-pencil',
                            'label' => 'LBL_EDIT_BUTTON',
                            'event' => 'list:editrow:fire',
                            'acl_action' => 'edit',
                            'allow_bwc' => false,
                        ),
                    2 =>
                        array(
                            'type' => 'rowaction',
                            'name' => 'mailmerge_button',
                            'icon' => 'icon-envelope',
                            'label' => 'Mail Merge',
                            'event' => 'list:mailmerge:fire',
                            'allow_bwc' => false,
                        ),
                ),
        ),
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
                                    'label' => 'LBL_STAGE',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'stage',
                                ),
                            1 =>
                                array(
                                    'label' => 'LBL_BUILDINGS',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'buildings',
                                ),
                            2 =>
                                array(
                                    'label' => 'LBL_DATE_C',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'date_c',
                                ),
                            3 =>
                                array(
                                    'label' => 'LBL_DEPOSITED_PLAN',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'deposited_plan',
                                ),
                            4 =>
                                array(
                                    'label' => 'LBL_APPROVED_BY',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'approved_by',
                                ),
                            5 =>
                                array(
                                    'label' => 'LBL_RELEASED',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'released',
                                ),
                            6 =>
                                array(
                                    'name' => 'document',
                                    'label' => 'LBL_DOCUMENT',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                        ),
                ),
        ),
    'orderBy' =>
        array(
            'field' => 'date_modified',
            'direction' => 'desc',
        ),
);