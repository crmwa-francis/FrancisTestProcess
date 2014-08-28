<?php
$dictionary["iems_Project"]["fields"]["iems_project_subprojects_subproject"] = array (
  'name' => 'iems_project_subprojects_subproject',
  'type' => 'link',
  'relationship' => 'iems_project_subprojects',
  'source' => 'non-db',
  'module' => 'iems_Project',
  'bean_name' => 'iems_Project',
  'vname' => 'LBL_IEMS_PROJECT_SUBPROJECTS_SUBPROJECT',
  'id_name' => 'iems_project_subprojects_subproject_id',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["iems_Project"]["fields"]["iems_project_subprojects_mainproject"] = array (
  'name' => 'iems_project_subprojects_mainproject',
  'type' => 'link',
  'relationship' => 'iems_project_subprojects',
  'source' => 'non-db',
  'module' => 'iems_Project',
  'bean_name' => 'iems_Project',
  'side' => 'right',
  'vname' => 'LBL_IEMS_PROJECT_SUBPROJECTS_MAINPROJECT',
  'id_name' => 'iems_project_subprojects_mainproject_id',
  'link-type' => 'one',
);

$dictionary['iems_Project']['fields']['master_project'] = array(
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_MASTER_PROJECT',
    'save' => true,
    'link' => 'iems_project_subprojects_mainproject',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'name',
    'name' => 'master_project',
    'id_name' => 'iems_project_id',
    'isnull' => 'true',
    'dbType' => 'varchar',
    'len' => '255',
    'studio' => 'visible',
);

$dictionary['iems_Project']['fields']['iems_project_id'] = array(
    'type' => 'id',
    'source' => 'non-db',
    'id_name' => 'iems_project_subprojects_mainproject_id',
    'link' => 'iems_project_subprojects_mainproject',
    'table' => 'iems_project',
    'module' => 'iems_Project',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'right',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
    'required' => false,
    'name' => 'iems_project_id',
    'vname' => 'LBL_MASTER_PROJECT_IEMS_PROJECT_ID',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
);




