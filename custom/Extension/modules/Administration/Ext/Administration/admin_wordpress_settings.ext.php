<?php
$admin_option_defs = array();
$admin_option_defs['Administration']['Inproperty_Settings'] = array(
    'Inproperty Settings',
    'Settings',
    'Update the sync url, email template , etc.',
    'javascript:parent.SUGAR.App.router.navigate("/#bwc/index.php?module=iems_Project&action=Settings", {trigger: true});'
);
$admin_group_header[] = array(
    'Inproperty Settings',
    '',
    false,
    $admin_option_defs,
    'Settings for the inproperty CRM'
);