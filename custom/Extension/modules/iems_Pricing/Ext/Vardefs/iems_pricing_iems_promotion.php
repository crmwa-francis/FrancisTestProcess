<?php

$dictionary["iems_Pricing"]["relationships"]["promotion-pricing"]  = array(
    'lhs_module' => 'iems_Pricing',
    'lhs_table' => 'iems_pricing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Promotion',
    'rhs_table' => 'iems_promotion',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Pricing"]["fields"]["promotion-pricing"] = array (
    'name' => 'promotion-pricing',
    'type' => 'link',
    'relationship' => 'promotion-pricing',
    'source' => 'non-db',
    'vname' => 'LBL_LABEL_GOES_HERE',
);