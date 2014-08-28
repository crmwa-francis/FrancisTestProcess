<?php
$dictionary["iems_Project"]["relationships"]["referrer_contact"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'referrer_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
);

$dictionary['iems_Project']['fields']['referrer_contact'] = array(
    'name' => 'referrer_contact',
    'type' => 'link',
    'relationship' => 'referrer_contact',
    'source' => 'non-db',
    'vname' => 'LBL_REFERRER_CONTACT',
);