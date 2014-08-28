<?php
$dictionary["iems_Project"]["relationships"]["builder_account"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'builder_id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
);

$dictionary['iems_Project']['fields']['builder_account'] = array(
    'name' => 'builder_account',
    'type' => 'link',
    'relationship' => 'builder_account',
    'source' => 'non-db',
    'vname' => 'LBL_BUILDER_ACCOUNT',
);