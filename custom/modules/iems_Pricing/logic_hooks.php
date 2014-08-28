<?php
// WARNING: The contents of this file are auto-generated.

$hook_version = 1;
$hook_array = Array();
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(
    1,
    '',
    'custom/LogicHookHelpers/SpecialOfferWorkflow.php',
    'SpecialOfferWorkflow',
    'SpecialOfferWorkflow'
);
$hook_array['after_relationship_add'][] = Array(
    2,
    'After relationship add',
    'custom/LogicHookHelpers/RelatedRecordTransferHook.php',
    'RelatedRecordTransferHook',
    'transferRelatedRecords'
);
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(
    1,
    '',
    'custom/LogicHookHelpers/SpecialOfferWorkflow.php',
    'SpecialOfferWorkflow',
    'SpecialOfferWorkflow'
);
