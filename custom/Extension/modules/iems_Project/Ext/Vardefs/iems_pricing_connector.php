<?php

$dictionary["iems_Project"]["fields"]["iems_project_iems_pricing"] = array (
    'name' => 'iems_project_iems_pricing',
    'type' => 'link',
    'relationship' => 'iems_project_iems_pricing',
    'source' => 'non-db',
    'module' => 'iems_Pricing',
    'bean_name' => 'iems_Pricing',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_PRICING_TITLE_PROJECT',
    'id_name' => 'pricing_id',
);
$dictionary["iems_Project"]["fields"]["iems_project_iems_pricing_name"] = array (
    'name' => 'iems_project_iems_pricing_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_FROM_PRICING_TITLE_PROJECT',
    'save' => true,
    'id_name' => 'pricing_id',
    'link' => 'iems_project_iems_pricing',
    'table' => 'iems_pricing',
    'module' => 'iems_Pricing',
    'rname' => 'name',
);
$dictionary["iems_Project"]["fields"]["pricing_id"] = array (
    'name' => 'pricing_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_PROJECT_IEMS_FROM_PRICING_TITLE_PROJECT',
    'id_name' => 'pricing_id',
    'link' => 'iems_project_iems_pricing',
    'table' => 'iems_pricing',
    'module' => 'iems_Pricing',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
