<?php
$dictionary["iems_Project"]["fields"]["iems_mastercontract_iems_project"] = array (
    'name' => 'iems_mastercontract_iems_project',
    'type' => 'link',
    'relationship' => 'iems_mastercontract_iems_project',
    'source' => 'non-db',
    'module' => 'iems_MasterContract',
    'bean_name' => 'iems_MasterContract',
    'vname' => 'LBL_MASTERCONTRACT_PROJECT',
    'id_name' => 'iems_mastercontract_id',
);
$dictionary["iems_Project"]["fields"]["iems_mastercontract_iems_project_name"] = array (
    'name' => 'iems_mastercontract_iems_project_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_MASTERCONTRACT_PROJECT_NAME',
    'save' => true,
    'id_name' => 'iems_mastercontract_id',
    'link' => 'iems_mastercontract_iems_project',
    'table' => 'iems_mastercontract',
    'module' => 'iems_MasterContract',
    'rname' => 'name',
);
$dictionary["iems_Project"]["fields"]["iems_mastercontract_id"] = array (
    'name' => 'iems_mastercontract_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_MASTERCONTRACT_PROJECT_ID',
    'id_name' => 'iems_mastercontract_id',
    'link' => 'iems_mastercontract_iems_project',
    'table' => 'iems_mastercontract',
    'module' => 'iems_MasterContract',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
