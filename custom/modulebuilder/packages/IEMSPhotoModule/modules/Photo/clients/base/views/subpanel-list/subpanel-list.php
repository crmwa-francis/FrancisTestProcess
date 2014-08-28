<?php
$viewdefs['iems_Photo']['base']['view']['subpanel-list'] = array(
    'panels' =>
        array(
            array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_1',
                'fields' =>
                    array(
                        array(
                            'name' => 'photo_image',
                            'label' => 'LBL_IMAGE',
                            'enabled' => true,
                            'default' => true,
                            'width' => 42,
                            'height' => 42,
                            'dismiss_label' => true,
                            'required' => false,
                        ),
                        array(
                            'name' => 'name',
                            'label' => 'LBL_NAME',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'category',
                            'label' => 'LBL_CATEGORY',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'date_entered',
                            'label' => 'LBL_DATE_ENTERED',
                            'enabled' => true,
                            'default' => true,
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