<?php
$module_name = 'iems_SpecialCondition';
$viewdefs[$module_name]['base']['view']['subpanel-list'] = array(
    'favorite' => true,
    'rowactions' => array(
        'css_class' => 'pull-right',
        'actions' => array(
            array(
                'type' => 'rowaction',
                'css_class' => 'btn',
                'tooltip' => 'Revert Expiration',
                'event' => 'list:revert_expiration:fire',
                'icon' => 'icon-repeat',
                'acl_action' => 'view',
                'allow_bwc' => false,
            ),
            array(
                'type' => 'rowaction',
                'css_class' => 'btn',
                'tooltip' => 'LBL_PREVIEW',
                'label' => 'LBL_PREVIEW',
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
    'last_state' => array(
        'id' => 'subpanel-list',
    ),
    'panels' =>
        array(
            array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_1',
                'fields' =>
                    array(
                        array(
                            'label' => 'LBL_NAME',
                            'enabled' => true,
                            'default' => true,
                            'name' => 'name',
                        ),
                        array(
                            'label' => 'LBL_DATE_MODIFIED',
                            'enabled' => true,
                            'default' => true,
                            'name' => 'date_modified',
                        ),
                    ),
            ),
        ),
    'orderBy' => array(
        'field' => 'date_modified',
        'direction' => 'desc',
    ),
);
