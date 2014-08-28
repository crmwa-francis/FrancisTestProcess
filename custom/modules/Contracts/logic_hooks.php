<?php

$hooks_version = 1;
$hook_array = Array();
$hook_array['before_save'][] = array(
    '1',
    'Auto Generate Contract ID for new contract records',
    'custom/LogicHookHelpers/ContractsHookHelper.php',
    'ContractsHookHelper',
    'beforeSave',
);
$hook_array['after_save'][] = array(
    '1',
    'Retrieve Special Conditions from Listing and Add to the Contract',
    'custom/LogicHookHelpers/ContractsHookHelper.php',
    'ContractsHookHelper',
    'relateSpecialConditionsFromListing',
);
$hook_array['after_save'][] = array(
    '1',
    'Retrieve Promotions and Options from Listing and Add to the Contract',
    'custom/LogicHookHelpers/ContractsToListingHookHelper.php',
    'ContractsToListingHookHelper',
    'relatePromotionsOptionsToContracts',
);
