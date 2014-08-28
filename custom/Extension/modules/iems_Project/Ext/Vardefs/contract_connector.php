<?php
$dictionary["iems_Project"]["relationships"]["project_contracts"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'iems_project_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_contracts'] = array(
    'name' => 'project_contracts',
    'type' => 'link',
    'relationship' => 'project_contracts',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_CONTRACTS',
);