<?php

$dictionary["iems_Pricing"]["fields"]["iems_project_iems_pricing"] = array (
    'name' => 'iems_project_iems_pricing',
    'type' => 'link',
    'relationship' => 'iems_project_iems_pricing',
    'source' => 'non-db',
    'module' => 'iems_Project',
    'bean_name' => 'iems_Project',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_PRICING_TITLE1',
    'id_name' => 'project_id',
);
$dictionary["iems_Pricing"]["fields"]["iems_project_iems_pricing_name"] = array (
    'name' => 'iems_project_iems_pricing_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_FROM_PRICING_TITLE1',
    'save' => true,
    'id_name' => 'project_id',
    'link' => 'iems_project_iems_pricing',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'name',
);
$dictionary["iems_Pricing"]["fields"]["project_id"] = array (
    'name' => 'project_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_PROJECT_IEMS_FROM_PRICING_TITLE1',
    'id_name' => 'project_id',
    'link' => 'iems_project_iems_pricing_name',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
