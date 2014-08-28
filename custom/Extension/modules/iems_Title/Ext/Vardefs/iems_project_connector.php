<?php

$dictionary["iems_Title"]["fields"]["iems_title_iems_project"] = array (
    'name' => 'iems_title_iems_project',
    'type' => 'link',
    'relationship' => 'iems_title_iems_project',
    'source' => 'non-db',
    'module' => 'iems_Project',
    'bean_name' => 'iems_Project',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_TITLE_TITLE1',
    'id_name' => 'project_id',
);
$dictionary["iems_Title"]["fields"]["iems_title_iems_project_name"] = array (
    'name' => 'iems_title_iems_project_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_FROM_TITLE_TITLE1',
    'save' => true,
    'id_name' => 'project_id',
    'link' => 'iems_title_iems_project',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'name',
);
$dictionary["iems_Title"]["fields"]["project_id"] = array (
    'name' => 'project_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_PROJECT_IEMS_FROM_TITLE_TITLE1',
    'id_name' => 'project_id',
    'link' => 'iems_title_iems_project_name',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
