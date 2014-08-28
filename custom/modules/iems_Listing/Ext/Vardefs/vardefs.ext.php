<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/contract_connector.php

$dictionary["iems_Listing"]["relationships"]["iems_listing_contracts"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'iems_listing_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['iems_listing_contracts'] = array(
    'name' => 'iems_listing_contracts',
    'type' => 'link',
    'relationship' => 'iems_listing_contracts',
    'source' => 'non-db',
    'vname' => 'LBL_CONTRACT',
);
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/iems_listing_iems_promotion.php


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
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/iems_listing_iems_pricing.php


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

//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/projectcontacts_connector.php

$dictionary["iems_Listing"]["relationships"]["listing_projectcontacts"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ProjectContacts',
    'rhs_table' => 'iems_projectcontacts',
    'rhs_key' => 'iems_parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Listing']['fields']['listing_projectcontacts'] = array(
    'name' => 'listing_projectcontacts',
    'type' => 'link',
    'relationship' => 'listing_projectcontacts',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_PROJECTCONTACTS',
);
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/property_connector.php

$dictionary['iems_Listing']['fields']['property_listings'] = array(
    'name' => 'property_listings',
    'type' => 'link',
    'relationship' => 'property_listings',
    'source' => 'non-db',
    'vname' => 'LBL_PROPERTY_LISTINGS',
);
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/iems_listing_iems_listingtitle.php

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

//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/specialconditions_connector.php

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
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/documents_connector.php

$dictionary['iems_Listing']['fields']['documents_iems_listing'] = array(
    'name' => 'documents_iems_listing',
    'type' => 'link',
    'relationship' => 'documents_iems_listing',
    'source' => 'non-db',
    'vname' => 'LBL_LISTING_DOCUMENTS',
);
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/iems_listing_iems_option.php

$dictionary["iems_Listing"]["relationships"]["iems_listing_iems_options"]  = array(
    'lhs_module' => 'iems_Listing',
    'lhs_table' => 'iems_listing',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Options',
    'rhs_table' => 'iems_options',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Listing"]["fields"]["iems_listing_iems_options"] = array (
    'name' => 'iems_listing_iems_options',
    'type' => 'link',
    'relationship' => 'iems_listing_iems_options',
    'source' => 'non-db',
    'vname' => 'LBL_OPTIONS_LISTING',
);
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/iems_listing_iems_contractannexure.php

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
//Merged from custom/Extension/modules/iems_Listing/Ext/Vardefs/project_connector.php

$dictionary["iems_Listing"]["relationships"]["project_projectlisting"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Listing',
    'rhs_table' => 'iems_listing',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);


$dictionary['iems_Listing']['fields']['project_projectlisting'] = array(
    'name' => 'project_projectlisting',
    'type' => 'link',
    'relationship' => 'project_projectlisting',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PROJECTLISTING',
);