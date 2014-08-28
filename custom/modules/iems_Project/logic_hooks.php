<?php
// WARNING: The contents of this file are auto-generated.

$hook_version = 1;
$hook_array = Array();
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(
    1,
    '',
    'custom/modules/iems_Project/ProjectFeaturesWorkflow.php',
    'ProjectFeaturesWorkflow',
    'ProjectFeaturesWorkflow'
);

$hook_array['after_relationship_add'][] = Array(
    1,
    'After relationship add',
    'custom/LogicHookHelpers/ProjectHookHelper.php',
    'ProjectHookHelper',
    'afterRelationshipAdd'
);

$hook_array['after_relationship_add'][] = Array(
    1,
    'After relationship add',
    'custom/LogicHookHelpers/RelatedRecordTransferHook.php',
    'RelatedRecordTransferHook',
    'transferRelatedRecords'
);

$hook_array['after_relationship_add'][] = Array(
    1,
    'After relationship add',
    'custom/LogicHookHelpers/DocumentHookHelper.php',
    'DocumentHookHelper',
    'afterRelationshipAdd'
);


