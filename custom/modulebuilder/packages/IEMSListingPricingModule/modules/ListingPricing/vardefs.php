<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

$vardefs = array (
  'fields' => 
  array (
    'land_price' => 
    array (
      'required' => false,
      'name' => 'land_price',
      'vname' => 'LBL_LAND_PRICE',
      'type' => 'decimal',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
      ),
      'calculated' => false,
      'len' => '18',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'land_deposit_amount' => 
    array (
      'required' => false,
      'name' => 'land_deposit_amount',
      'vname' => 'LBL_LAND_DEPOSIT_AMOUNT',
      'type' => 'decimal',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
      ),
      'calculated' => false,
      'len' => '18',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'land_deposit_percent' => 
    array (
      'required' => false,
      'name' => 'land_deposit_percent',
      'vname' => 'LBL_LAND_DEPOSIT_PERCENT',
      'type' => 'float',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
      ),
      'calculated' => false,
      'len' => '18',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '2',
    ),
    'settle_land_first' => 
    array (
      'required' => false,
      'name' => 'settle_land_first',
      'vname' => 'LBL_SETTLE_LAND_FIRST',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'settle_land_first_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'property_status' => 
    array (
      'required' => false,
      'name' => 'property_status',
      'vname' => 'LBL_PROPERTY_STATUS',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'full_text_search' => 
      array (
        'boost' => '0',
      ),
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'method_of_sale' => 
    array (
      'required' => false,
      'name' => 'method_of_sale',
      'vname' => 'LBL_METHOD_OF_SALE',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'method_of_sale_listing',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'currency' => 
    array (
      'required' => false,
      'name' => 'currency',
      'vname' => 'LBL_CURRENCY',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'currency_listing',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'for_sale_by' => 
    array (
      'required' => false,
      'name' => 'for_sale_by',
      'vname' => 'LBL_FOR_SALE_BY',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'for_sale_by_listing',
      'studio' => 'visible',
      'dependency' => false,
    ),
  ),
  'relationships' => 
  array (
  ),
);