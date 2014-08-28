<?php
$dictionary["iems_Project"]["relationships"]["builder_contact"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'builder_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
);

$dictionary['iems_Project']['fields']['builder_contact'] = array(
    'name' => 'builder_contact',
    'type' => 'link',
    'relationship' => 'builder_contact',
    'source' => 'non-db',
    'vname' => 'LBL_BUILDER_CONTACT',
);