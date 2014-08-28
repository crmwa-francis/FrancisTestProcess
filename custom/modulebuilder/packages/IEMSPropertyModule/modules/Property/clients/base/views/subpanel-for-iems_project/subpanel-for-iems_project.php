<?php
// created: 2014-01-20 15:25:30
$viewdefs['iems_Property']['base']['view']['subpanel-for-iems_project'] = array(
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
                                    'label' => 'LBL_PROPERTY_ID',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'name',
                                    'link' => true,
                                    'readonly' => true
                                ),
                            1 =>
                                array(
                                    'name' => 'photo',
                                    'label' => 'LBL_PHOTO',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true,
                                    'width' => 42,
                                    'height' => 42
                                ),
                            2 =>
                                array(
                                    'name' => 'total',
                                    'label' => 'LBL_TOTAL',
                                    'enabled' => true,
                                    'default' => true,

                                ),
                            3 =>
                                array(
                                    'name' => 'lot_length',
                                    'label' => 'LBL_LOT_LENGTH',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'lot_width',
                                    'label' => 'LBL_LOT_WIDTH',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            5 =>
                                array(
                                    'name' => 'land_size',
                                    'label' => 'LBL_LAND_SIZE',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            6 =>
                                array(
                                    'name' => 'loading',
                                    'label' => 'LBL_LOADING',
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
);