<?php

$dictionary["iems_WebTab"]["fields"]["iems_project_iems_webtab"] = array (
    'name' => 'iems_project_iems_webtab',
    'type' => 'link',
    'relationship' => 'iems_project_iems_webtab',
    'source' => 'non-db',
    'module' => 'iems_Project',
    'bean_name' => 'iems_Project',
    'vname' => 'LBL_IEMS_WEBTAB',
    'id_name' => 'project_id',
);
$dictionary["iems_WebTab"]["fields"]["iems_project_iems_webtab_name"] = array (
    'name' => 'iems_project_iems_webtab_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT',
    'save' => true,
    'id_name' => 'project_id',
    'link' => 'iems_project_iems_webtab',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'name',
);
$dictionary["iems_WebTab"]["fields"]["project_id"] = array (
    'name' => 'project_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT',
    'id_name' => 'project_id',
    'link' => 'iems_project_iems_webtab_name',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
