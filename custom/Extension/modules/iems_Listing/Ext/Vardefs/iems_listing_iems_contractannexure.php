<?php
$dictionary["iems_Listing"]["relationships"]["iems_listing_iems_contractannexure"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ContractAnnexure',
    'rhs_table' => 'iems_contractannexure',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['iems_listing_iems_contractannexure'] = array(
    'name' => 'iems_listing_iems_contractannexure',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_contractannexure',
    'module' => 'iems_ContractAnnexure',
    'bean_name' => 'iems_ContractAnnexure',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_LISTING_IEMS_CONTRACTANNEXURE',
);