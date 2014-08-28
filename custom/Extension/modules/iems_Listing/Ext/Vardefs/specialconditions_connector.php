<?php
$dictionary["iems_Listing"]["relationships"]["listing_specialcondition"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_SpecialCondition',
    'rhs_table' => 'iems_specialcondition',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['listing_specialcondition'] = array(
    'name' => 'listing_specialcondition',
    'type' => 'link',
    'relationship' => 'listing_specialcondition',
    'module' => 'iems_SpecialCondition',
    'bean_name' => 'iems_SpecialCondition',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_SPECIALCONDITIONS',
);