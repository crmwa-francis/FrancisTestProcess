<?php
$dictionary["iems_Project"]["relationships"]["project_openhouse"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_OpenHouse',
    'rhs_table' => 'iems_openhouse',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_openhouse'] = array(
    'name' => 'project_openhouse',
    'type' => 'link',
    'relationship' => 'project_openhouse',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_OPENHOUSE',
);