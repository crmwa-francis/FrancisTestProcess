<?php
$hooks_version = 1;
$hook_array = Array();
$hook_array['before_save'][] = array(
    '1',
    'Auto populate full_name_c field for filter fix',
    'custom/modules/Contacts/SetContactFullName.php',
    'SetContactFullName',
    'doSet',
);