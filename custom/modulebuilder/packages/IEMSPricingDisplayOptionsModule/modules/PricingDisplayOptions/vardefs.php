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
 * Copyright (C) 2004-2014 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

$vardefs = array (
  'fields' => 
  array (
    'name' => 
    array (
      'studio' => false,
    ),
    'stage' => 
    array (
      'required' => false,
      'name' => 'stage',
      'vname' => 'LBL_STAGE',
      'type' => 'enum',
      'dbType' => 'varchar',
      'massupdate' => false,
      'default' => '',
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
      'options' => 'listing_dynamic_stage_list',
      'studio' => 'visible',
      'dependency' => false,
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
      'options' => 'method_of_sale_pricing',
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
      'options' => 'currency_pricing',
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
      'options' => 'for_sale_by_pricing',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'auction_date_time' => 
    array (
      'required' => false,
      'name' => 'auction_date_time',
      'vname' => 'LBL_AUCTION_DATE_TIME',
      'type' => 'datetimecombo',
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
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'auction_venue' => 
    array (
      'required' => false,
      'name' => 'auction_venue',
      'vname' => 'LBL_AUCTION_VENUE',
      'type' => 'text',
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
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'iems_pricing_id_c' => 
    array (
      'required' => false,
      'name' => 'iems_pricing_id_c',
      'vname' => 'LBL_PRICING_IEMS_PRICING_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'pricing' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'pricing',
      'vname' => 'LBL_PRICING',
      'type' => 'relate',
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
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'iems_pricing_id_c',
      'ext2' => 'iems_Pricing',
      'module' => 'iems_Pricing',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'display_sale_pricing' => 
    array (
      'required' => false,
      'name' => 'display_sale_pricing',
      'vname' => 'LBL_DISPLAY_SALE_PRICING',
      'type' => 'currency',
      'massupdate' => false,
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'internal_sale_price' => 
    array (
      'required' => false,
      'name' => 'internal_sale_price',
      'vname' => 'LBL_INTERNAL_SALE_PRICE',
      'type' => 'currency',
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
      'calculated' => false,
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'contact_id_c' => 
    array (
      'required' => false,
      'name' => 'contact_id_c',
      'vname' => 'LBL_AUCTIONEER_CONTACT_ID',
      'type' => 'id',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'auctioneer' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'auctioneer',
      'vname' => 'LBL_AUCTIONEER',
      'type' => 'relate',
      'massupdate' => false,
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
      'len' => '255',
      'size' => '20',
      'id_name' => 'contact_id_c',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'populate_list' => 
      array (
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'account_name' => 'company_name',
        'email1' => 'email',
        'phone_mobile' => 'phone_mobile',
      ),
    ),
    'company_name' => 
    array (
      'required' => false,
      'name' => 'company_name',
      'vname' => 'LBL_COMPANY_NAME',
      'type' => 'varchar',
      'massupdate' => false,
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
    'first_name' => 
    array (
      'required' => false,
      'name' => 'first_name',
      'vname' => 'LBL_FIRST_NAME',
      'type' => 'varchar',
      'massupdate' => false,
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
    'last_name' => 
    array (
      'required' => false,
      'name' => 'last_name',
      'vname' => 'LBL_LAST_NAME',
      'type' => 'varchar',
      'massupdate' => false,
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
    'phone_mobile' => 
    array (
      'required' => false,
      'name' => 'phone_mobile',
      'vname' => 'LBL_PHONE_MOBILE',
      'type' => 'phone',
      'massupdate' => false,
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
      'dbType' => 'varchar',
    ),
    'email' => 
    array (
      'required' => false,
      'name' => 'email',
      'vname' => 'LBL_EMAIL',
      'type' => 'varchar',
      'massupdate' => false,
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
    'property_status' => 
    array (
      'required' => false,
      'name' => 'property_status',
      'vname' => 'LBL_PROPERTY_STATUS',
      'type' => 'enum',
      'massupdate' => true,
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
      'options' => 'property_status_display_options',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'property_status_options' => 
    array (
      'required' => false,
      'name' => 'property_status_options',
      'vname' => 'LBL_PROPERTY_STATUS_OPTIONS',
      'type' => 'enum',
      'massupdate' => true,
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
      'options' => 'property_status_options_project',
      'studio' => 'visible',
      'dependency' => false,
      'visibility_grid' => 
      array (
        'trigger' => 'property_status',
        'values' => 
        array (
          'for_sale' => 
          array (
            0 => '',
            1 => 'no_price',
            2 => 'display_price',
            3 => 'poa',
          ),
          'market_appraisal' => 
          array (
            0 => '',
            1 => 'no_price',
          ),
          'not_for_sale' => 
          array (
            0 => '',
            1 => 'no_price',
          ),
          'reserved' => 
          array (
            0 => '',
            1 => 'no_price',
            2 => 'display_price',
          ),
          'sold' => 
          array (
            0 => '',
            1 => 'no_price',
            2 => 'display_price',
          ),
          'withdrawn' => 
          array (
            0 => '',
            1 => 'no_price',
          ),
          '' => 
          array (
            0 => '',
          ),
          'ForSale' => 
          array (
            0 => '',
            1 => 'NoPrice',
            2 => 'DisplayPrice',
            3 => 'POA',
          ),
          'MarketAppraisal' => 
          array (
            0 => '',
            1 => 'NoPrice',
          ),
          'NotForSale' => 
          array (
            0 => '',
            1 => 'NoPrice',
          ),
          'Reserved' => 
          array (
            0 => '',
            1 => 'NoPrice',
            2 => 'DisplayPrice',
          ),
          'Sold' => 
          array (
            0 => '',
            1 => 'NoPrice',
            2 => 'DisplayPrice',
          ),
          'Withdrawn' => 
          array (
            0 => '',
            1 => 'NoPrice',
          ),
        ),
      ),
    ),
    'estimated_sale_price_from' => 
    array (
      'required' => false,
      'name' => 'estimated_sale_price_from',
      'vname' => 'LBL_ESTIMATED_SALE_PRICE_FROM',
      'type' => 'currency',
      'massupdate' => false,
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'base_rate' => 
    array (
      'required' => false,
      'name' => 'base_rate',
      'vname' => 'LBL_CURRENCY_RATE',
      'type' => 'decimal',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'label' => 'LBL_CURRENCY_RATE',
      'studio' => false,
    ),
    'estimated_sale_price_to' => 
    array (
      'required' => false,
      'name' => 'estimated_sale_price_to',
      'vname' => 'LBL_ESTIMATED_SALE_PRICE_TO',
      'type' => 'currency',
      'massupdate' => false,
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'display_sale_pricing_from' => 
    array (
      'required' => false,
      'name' => 'display_sale_pricing_from',
      'vname' => 'LBL_DISPLAY_SALE_PRICING_FROM',
      'type' => 'currency',
      'massupdate' => false,
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'display_sale_pricing_to' => 
    array (
      'required' => false,
      'name' => 'display_sale_pricing_to',
      'vname' => 'LBL_DISPLAY_SALE_PRICING_TO',
      'type' => 'currency',
      'massupdate' => false,
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
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
  ),
  'relationships' => 
  array (
  ),
);