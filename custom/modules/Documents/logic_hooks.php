<?php
$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'Before Save hooks',
    'custom/LogicHookHelpers/DocumentHookHelper.php',
    'DocumentHookHelper',
    'beforeSave'
);

$hook_array['before_delete'][] = Array(
    1,
    'Before deleting the document send http request to wordpress',
    'custom/WebsiteHelpers/AfterDeleteWordpressSync.php',
    'AfterDeleteWordpressSync',
    'deleteSync'
);

$hook_array['before_save'][] = Array(
    1,
    'Create an activity for bwc modules on update',
    'custom/LogicHookHelpers/BwcActivityGenerator.php',
    'BwcActivityGenerator',
    'createActivity'
);