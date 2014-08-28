<?php
$dictionary["iems_Project"]["relationships"]["project_projectdeposit"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Deposit',
    'rhs_table' => 'iems_deposit',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_projectdeposit'] = array(
    'name' => 'project_projectdeposit',
    'type' => 'link',
    'relationship' => 'project_projectdeposit',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PROJECTDEPOSIT',
);