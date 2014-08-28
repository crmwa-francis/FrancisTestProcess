<?php

$dictionary["iems_Listing"]["fields"]["iems_listing_iems_pricing"] = array (
    'name' => 'iems_listing_iems_pricing',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_pricing',
    'source' => 'non-db',
    'module' => 'iems_ListingPricing',
    'bean_name' => 'iems_ListingPricing',
    'vname' => 'LBL_IEMS_LISTING_IEMS_PRICING_TITLE_LISTING',
    'id_name' => 'pricing_id',
);
$dictionary["iems_Listing"]["fields"]["iems_listing_iems_pricing_name"] = array (
    'name' => 'iems_listing_iems_pricing_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_LISTING_IEMS_FROM_PRICING_TITLE_LISTING',
    'save' => true,
    'id_name' => 'pricing_id',
    'link' => 'iems_listing_iems_pricing',
    'table' => 'iems_listingpricing',
    'module' => 'iems_ListingPricing',
    'rname' => 'name',
);
$dictionary["iems_Listing"]["fields"]["pricing_id"] = array (
    'name' => 'pricing_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_FROM_IEMS_LISTING_IEMS_FROM_PRICING_TITLE_LISTING',
    'id_name' => 'listing_id',
    'link' => 'iems_listing_iems_pricing',
    'table' => 'iems_listingpricing',
    'module' => 'iems_ListingPricing',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
