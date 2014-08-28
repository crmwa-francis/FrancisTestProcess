<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'iems_Listing';
$viewdefs[$module_name]['base']['view']['panel-top'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'css_class' => 'btn-invisible',
            'icon' => 'icon-chevron-up',
            'tooltip' => 'LBL_TOGGLE_VISIBILITY',
        ),
        array(
            'type' => 'actiondropdown',
            'name' => 'panel_dropdown',
            'css_class' => 'pull-right',
            'buttons' => array(
                array(
                    'type' => 'sticky-rowaction',
                    'icon' => 'icon-plus',
                    'name' => 'create_button',
                    'label' => ' ',
                    'acl_action' => 'create',
                    'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
                ),
                array(
                    'type' => 'sticky-rowaction',
                    'name' => 'create_button',
                    'label' => 'LBL_CREATE_BUTTON_LABEL',
                ),
            ),
        ),
    ),
);
