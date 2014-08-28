<?php

$dictionary["iems_Project"]["fields"]["iems_title_iems_project"] = array (
    'name' => 'iems_title_iems_project',
    'type' => 'link',
    'relationship' => 'iems_title_iems_project',
    'source' => 'non-db',
    'module' => 'iems_Title',
    'bean_name' => 'iems_Title',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_TITLE_TITLE_PROJECT',
    'id_name' => 'project_id',
);
$dictionary["iems_Project"]["fields"]["iems_title_iems_project_name"] = array (
    'name' => 'iems_title_iems_project_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_FROM_TITLE_TITLE_PROJECT',
    'save' => true,
    'id_name' => 'title_id',
    'link' => 'iems_title_iems_project',
    'table' => 'iems_title',
    'module' => 'iems_Title',
    'rname' => 'name',
);
$dictionary["iems_Project"]["fields"]["title_id"] = array (
    'name' => 'title_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_PROJECT_IEMS_FROM_TITLE_TITLE_PROJECT',
    'id_name' => 'project_id',
    'link' => 'iems_title_iems_project',
    'table' => 'iems_title',
    'module' => 'iems_Title',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
