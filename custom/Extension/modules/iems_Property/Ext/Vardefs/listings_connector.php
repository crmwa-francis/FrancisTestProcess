<?php
$dictionary["iems_Property"]["relationships"]["property_listings"]  = array(
    'lhs_module' => 'iems_Property',
    'lhs_table' => 'iems_property',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Listing',
    'rhs_table' => 'iems_listing',
    'rhs_key' => 'iems_property_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Property']['fields']['property_listings'] = array(
    'name' => 'property_listings',
    'type' => 'link',
    'relationship' => 'property_listings',
    'source' => 'non-db',
    'vname' => 'LBL_PROPERTY_LISTINGS',
);