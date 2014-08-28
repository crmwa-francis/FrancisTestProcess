<?php
// created: 2014-01-29 16:21:34
$viewdefs['iems_StageMap']['base']['view']['subpanel-list'] = array(
    'panels' =>
        array(
            0 =>
                array(
                    'name' => 'panel_header',
                    'label' => 'LBL_PANEL_1',
                    'fields' =>
                        array(
                            0 => array(
                                'name' => 'name',
                                'label' => 'LBL_NAME',
                                'link' => true,
                                'readonly' => true,
                                'width' => '10%',
                            ),
                            1 =>
                                array(
                                    'name' => 'map',
                                    'label' => 'LBL_MAP',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'width' => 42,
                                    'height' => 42,
                                    'default' => true,
                                    'required' => false
                                ),
                            2 =>
                                array(
                                    'label' => 'LBL_STAGE',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'stage',
                                    'width' => '10%',
                                    'link' => true,
                                    'required' => true
                                ),
                            3 =>
                                array(
                                    'name' => 'coordinates',
                                    'label' => 'LBL_COORDINATES',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'color',
                                    'label' => 'LBL_COLOR',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true
                                )
                        ),
                ),
        ),
    'orderBy' =>
        array(
            'field' => 'date_modified',
            'direction' => 'desc',
        ),
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