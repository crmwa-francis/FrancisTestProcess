<?php
$module_name = 'iems_ProjectContacts';
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
