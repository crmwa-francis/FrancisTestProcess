<?php
$hooks_version = 1;
$hook_array = Array();
$hook_array['before_save'][] = array(
    '1',
    'Auto Generate Contract ID for new contract records',
    'custom/WebsiteHelpers/QueuePrepData.php',
    'QueuePrepData',
    'executeSyncToWordpress',
);

