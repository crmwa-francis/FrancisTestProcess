<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['iems_News']['base']['view']['list-headerpane'] = array(
    'template' => 'headerpane',
    'title' => 'LBL_MODULE_NAME',
    'buttons' => array(
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
