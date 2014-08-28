<?php
$dictionary["iems_listing_iems_listingtitle"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'iems_listing_iems_listingtitle' =>
    array (
      'lhs_module' => 'iems_Listing',
      'lhs_table' => 'iems_listing',
      'lhs_key' => 'id',
      'rhs_module' => 'iems_ListingTitle',
      'rhs_table' => 'iems_listingtitle',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iems_listing_iems_listingtitle',
      'join_key_lhs' => 'iems_listing_id',
      'join_key_rhs' => 'iems_listingtitle_id',
    ),
  ),
  'table' => 'iems_listing_iems_listingtitle',
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
      'name' => 'iems_listing_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'iems_listingtitle_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 =>
    array (
      'name' => 'iems_listing_iems_listingtitlespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'iems_listing_iems_listingtitle_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'iems_listing_id',
      ),
    ),
    2 => 
    array (
      'name' => 'iems_listing_iems_listingtitle_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'iems_listingtitle_id',
      ),
    ),
  ),
);