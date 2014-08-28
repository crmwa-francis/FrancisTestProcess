<?php
$dictionary["iems_Project"]["relationships"]["iems_project_iems_options"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Options',
    'rhs_table' => 'iems_options',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['iems_project_iems_options'] = array(
    'name' => 'iems_project_iems_options',
    'type' => 'link',
    'relationship' => 'iems_project_iems_options',
    'module' => 'iems_Options',
    'bean_name' => 'iems_Options',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_PROJECT_IEMS_OPTIONS',
);