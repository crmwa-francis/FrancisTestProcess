<?php
if (!defined('sugarEntry') || !sugarEntry) {die('Not A Valid Entry Point');}

$viewdefs['iems_Project']['base']['view']['create-actions'] = array(
    'template' => 'record',
    'buttons' => array(
        array(
            'name'      => 'cancel_button',
            'type'      => 'button',
            'label'     => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
        ),
        array(
            'name'      => 'restore_button',
            'type'      => 'button',
            'label'     => 'LBL_RESTORE',
            'css_class' => 'btn-invisible btn-link',
            'showOn'    => 'select',
        ),
        array(
            'type'    => 'actiondropdown',
            'name'    => 'main_dropdown',
            'primary' => true,
            'switch_on_click' => true,
            'buttons' => array(
                array(
                    'type'  => 'rowaction',
                    'name'  => 'save_button',
                    'label' => 'LBL_SAVE_BUTTON_LABEL',
                ),
                array(
                    'type'   => 'rowaction',
                    'name'   => 'save_view_button',
                    'label'  => 'LBL_SAVE_AND_VIEW',
                    'showOn' => 'create',
                ),
                array(
                    'type'   => 'rowaction',
                    'name'   => 'save_create_button',
                    'label'  => 'LBL_SAVE_AND_CREATE_ANOTHER',
                    'showOn' => 'create',
                ),
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
