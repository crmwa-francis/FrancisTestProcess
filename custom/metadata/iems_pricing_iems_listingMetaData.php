<?php
$dictionary["iems_listing_iems_pricing"] = array (
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' =>
        array (
            'iems_listing_iems_pricing' =>
                array (
                    'lhs_module' => 'iems_Listing',
                    'lhs_table' => 'iems_listing',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_ListingPricing',
                    'rhs_table' => 'iems_listingpricing',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_listing_iems_pricing',
                    'join_key_lhs' => 'listing_id',
                    'join_key_rhs' => 'pricing_id',
                ),
        ),
    'table' => 'iems_listing_iems_pricing',
    'fields' =>
        array (
            0 =>
                array (
                    'name' => 'id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            1 =>
                array (
                    'name' => 'date_modified',
                    'type' => 'datetime',
                ),
            2 =>
                array (
                    'name' => 'deleted',
                    'type' => 'bool',
                    'len' => '1',
                    'default' => '0',
                    'required' => true,
                ),
            3 =>
                array (
                    'name' => 'listing_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'pricing_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_listing_iems_pricingspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_listing_iems_pricing_id1',
                    'type' => 'index',
                    'fields' =>
                        array (
                            0 => 'listing_id',
                        ),
                ),
            2 =>
                array (
                    'name' => 'iems_listing_iems_pricing_id2',
                    'type' => 'index',
                    'fields' =>
                        array (
                            0 => 'pricing_id',
                        ),
                ),
        ),
);