<?php

$dictionary["iems_Listing"]["relationships"]["promotion_listing"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Promotion',
    'rhs_table' => 'iems_promotion',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Listing"]["fields"]["promotion_listing"] = array (
    'name' => 'promotion_listing',
    'type' => 'link',
    'relationship' => 'promotion_listing',
    'source' => 'non-db',
    'vname' => 'LBL_PROMOTION_LISTING',
);