<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$module_name = 'iems_PricingDisplayOptions';
$viewdefs[$module_name]['base']['view']['list-headerpane'] = array(
    'template' => 'headerpane',
    'title' => 'LBL_MODULE_NAME',
    'buttons' => array(
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
