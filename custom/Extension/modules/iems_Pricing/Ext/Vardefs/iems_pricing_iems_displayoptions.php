<?php

$dictionary["iems_Pricing"]["relationships"]["pricing_pricingdisplayoptions"]  = array(
    'lhs_module' => 'iems_Pricing',
    'lhs_table' => 'iems_pricing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_PricingDisplayOptions',
    'rhs_table' => 'iems_pricingdisplayoptions',
    'rhs_key' => 'iems_pricing_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Pricing"]["fields"]["pricing_pricingdisplayoptions"] = array (
    'name' => 'pricing_pricingdisplayoptions',
    'type' => 'link',
    'relationship' => 'pricing_pricingdisplayoptions',
    'source' => 'non-db',
    'vname' => 'LBL_PRICING_PRICINGDISPLAYOPTIONS',
);