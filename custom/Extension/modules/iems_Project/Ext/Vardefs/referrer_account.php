<?php
$dictionary["iems_Project"]["relationships"]["referrer_account"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'referrer_id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
);

$dictionary['iems_Project']['fields']['referrer_account'] = array(
    'name' => 'referrer_account',
    'type' => 'link',
    'relationship' => 'referrer_account',
    'source' => 'non-db',
    'vname' => 'LBL_REFERRER_ACCOUNT',
);