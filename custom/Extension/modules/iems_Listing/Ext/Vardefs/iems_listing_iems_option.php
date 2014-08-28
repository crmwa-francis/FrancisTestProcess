<?php
$dictionary["iems_Listing"]["relationships"]["iems_listing_iems_options"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Options',
    'rhs_table' => 'iems_options',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Listing"]["fields"]["iems_listing_iems_options"] = array (
    'name' => 'iems_listing_iems_options',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_options',
    'source' => 'non-db',
    'vname' => 'LBL_OPTIONS_LISTING',
);