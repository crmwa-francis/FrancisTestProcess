<?php
$viewdefs['iems_Promotion']['base']['view']['subpanel-for-iems_pricing'] = array(
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
                                    'name' => 'comment',
                                    'label' => 'LBL_COMMENT',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                            1 =>
                                array(
                                    'name' => 'price',
                                    'label' => 'LBL_PRICE',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            2 =>
                                array(
                                    'name' => 'for_c',
                                    'label' => 'LBL_FOR_C',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array(
                                    'name' => 'date_expected',
                                    'label' => 'LBL_DATE_EXPECTED',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'date_approved',
                                    'label' => 'LBL_DATE_APPROVED',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            5 =>
                                array(
                                    'name' => 'approved_by',
                                    'label' => 'LBL_APPROVED_BY',
                                    'enabled' => true,
                                    'id' => 'USER_ID_C',
                                    'link' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                            6 =>
                                array(
                                    'label' => 'LBL_EXPIRED',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'expired',
                                ),
                            7 =>
                                array(
                                    'name' => 'filename',
                                    'label' => 'LBL_FILENAME',
                                    'enabled' => true,
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
    'type' => 'subpanel-list',
);