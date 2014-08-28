<?php
$dictionary["iems_Listing"]["relationships"]["listing_projectcontacts"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ProjectContacts',
    'rhs_table' => 'iems_projectcontacts',
    'rhs_key' => 'iems_parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['listing_projectcontacts'] = array(
    'name' => 'listing_projectcontacts',
    'type' => 'link',
    'relationship' => 'listing_projectcontacts',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_PROJECTCONTACTS',
);