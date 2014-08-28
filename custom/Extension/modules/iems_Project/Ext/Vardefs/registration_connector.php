<?php
$dictionary["iems_Project"]["relationships"]["project_registration"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Registration',
    'rhs_table' => 'iems_registration',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_registration'] = array(
    'name' => 'project_registration',
    'type' => 'link',
    'relationship' => 'project_registration',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_REGISTRATION',
);