<?php
$dictionary["iems_ListingTitle"]["fields"]["iems_listing_iems_listingtitle"] = array (
    'name' => 'iems_listing_iems_listingtitle',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_listingtitle',
    'source' => 'non-db',
    'module' => 'iems_Listing',
    'bean_name' => 'iems_Listing',
    'vname' => 'LBL_LISTING',
    'id_name' => 'iems_listing_id',
);
$dictionary["iems_ListingTitle"]["fields"]["iems_listing_name"] = array (
    'name' => 'iems_listing_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_NAME',
    'save' => true,
    'id_name' => 'iems_listing_id',
    'link' => 'iems_listing_iems_listingtitle',
    'table' => 'iems_listing',
    'module' => 'iems_Listing',
    'rname' => 'name',
);
$dictionary["iems_ListingTitle"]["fields"]["iems_listing_id"] = array (
    'name' => 'iems_listing_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_ID',
    'id_name' => 'iems_listing_id',
    'link' => 'iems_listing_iems_listingtitle',
    'table' => 'iems_listing',
    'module' => 'iems_Listing',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
