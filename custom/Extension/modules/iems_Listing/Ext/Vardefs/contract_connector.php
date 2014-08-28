<?php
$dictionary["iems_Listing"]["relationships"]["iems_listing_contracts"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'iems_listing_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['iems_listing_contracts'] = array(
    'name' => 'iems_listing_contracts',
    'type' => 'link',
    'relationship' => 'iems_listing_contracts',
    'source' => 'non-db',
    'vname' => 'LBL_CONTRACT',
);