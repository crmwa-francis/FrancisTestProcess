<?php

$dictionary["iems_ListingPricing"]["fields"]["iems_listing_iems_pricing"] = array (
    'name' => 'iems_listing_iems_pricing',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_pricing',
    'source' => 'non-db',
    'module' => 'iems_Listing',
    'bean_name' => 'iems_Listing',
    'vname' => 'LBL_IEMS_LISTING_IEMS_PRICING_TITLE1',
    'id_name' => 'listing_id',
);
$dictionary["iems_ListingPricing"]["fields"]["iems_listing_iems_pricing_name"] = array (
    'name' => 'iems_listing_iems_pricing_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_LISTING_IEMS_FROM_PRICING_TITLE1',
    'save' => true,
    'id_name' => 'listing_id',
    'link' => 'iems_listing_iems_pricing',
    'table' => 'iems_listing',
    'module' => 'iems_Listing',
    'rname' => 'name',
);
$dictionary["iems_ListingPricing"]["fields"]["listing_id"] = array (
    'name' => 'listing_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_LISTING_IEMS_FROM_PRICING_TITLE1',
    'id_name' => 'listing_id',
    'link' => 'iems_listing_iems_pricing_name',
    'table' => 'iems_listing',
    'module' => 'iems_Listing',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
