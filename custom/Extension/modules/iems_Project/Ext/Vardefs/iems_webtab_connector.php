<?php

$dictionary["iems_Project"]["fields"]["iems_project_iems_webtab"] = array (
    'name' => 'iems_project_iems_webtab',
    'type' => 'link',
    'relationship' => 'iems_project_iems_webtab',
    'source' => 'non-db',
    'module' => 'iems_WebTab',
    'bean_name' => 'iems_WebTab',
    'vname' => 'LBL_IEMS_WEBTAB',
    'id_name' => 'project_id',
);
$dictionary["iems_Project"]["fields"]["iems_project_iems_webtab_name"] = array (
    'name' => 'iems_project_iems_webtab_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_WEBTAB',
    'save' => true,
    'id_name' => 'webtab_id',
    'link' => 'iems_project_iems_webtab',
    'table' => 'iems_webtab',
    'module' => 'iems_WebTab',
    'rname' => 'name',
);
$dictionary["iems_Project"]["fields"]["webtab_id"] = array (
    'name' => 'webtab_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_WEBTAB',
    'id_name' => 'project_id',
    'link' => 'iems_project_iems_webtab',
    'table' => 'iems_webtab',
    'module' => 'iems_WebTab',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
