<?php
$dictionary["iems_Listing"]["fields"]["iems_listing_iems_listingtitle"] = array (
    'name' => 'iems_listing_iems_listingtitle',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_listingtitle',
    'source' => 'non-db',
    'module' => 'iems_ListingTitle',
    'bean_name' => 'iems_ListingTitle',
    'vname' => 'LBL_LISTINGTITLE',
    'id_name' => 'iems_listing_id',
);
$dictionary["iems_Listing"]["fields"]["iems_listingtitle_name"] = array (
    'name' => 'iems_listingtitle_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_LISTINGTITLE_NAME',
    'save' => true,
    'id_name' => 'iems_listingtitle_id',
    'link' => 'iems_listing_iems_listingtitle',
    'table' => 'iems_listingtitle',
    'module' => 'iems_ListingTitle',
    'rname' => 'name',
);
$dictionary["iems_Listing"]["fields"]["iems_listingtitle_id"] = array (
    'name' => 'iems_listingtitle_id',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_LISTINGTITLE_ID',
    'id_name' => 'iems_listingtitle_id',
    'link' => 'iems_listing_iems_listingtitle',
    'table' => 'iems_listingtitle',
    'module' => 'iems_ListingTitle',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
);
