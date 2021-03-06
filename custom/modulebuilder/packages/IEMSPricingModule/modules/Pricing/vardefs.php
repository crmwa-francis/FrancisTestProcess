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
      'massupdate' => 0,
      'default' => 'Yes',
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
    'house_deposit_percent' => 
    array (
      'required' => false,
      'name' => 'house_deposit_percent',
      'vname' => 'LBL_HOUSE_DEPOSIT_PERCENT',
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
    'gst' => 
    array (
      'required' => false,
      'name' => 'gst',
      'vname' => 'LBL_GST',
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
      'options' => 'gst_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'account_id_c' => 
    array (
      'required' => false,
      'name' => 'account_id_c',
      'vname' => 'LBL_DEPOSIT_HELD_BY_ACCOUNT_ID',
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
    'deposit_held_by' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'deposit_held_by',
      'vname' => 'LBL_DEPOSIT_HELD_BY',
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
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'days_to_exchange' => 
    array (
      'required' => false,
      'name' => 'days_to_exchange',
      'vname' => 'LBL_DAYS_TO_EXCHANGE',
      'type' => 'date',
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
    ),
    'exchange_deposit_percent' => 
    array (
      'required' => false,
      'name' => 'exchange_deposit_percent',
      'vname' => 'LBL_EXCHANGE_DEPOSIT_PERCENT',
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
    'cooling_of_required' => 
    array (
      'required' => false,
      'name' => 'cooling_of_required',
      'vname' => 'LBL_COOLING_OF_REQUIRED',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'Yes',
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
      'options' => 'cooling_of_required_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'cooling_off_days' => 
    array (
      'required' => false,
      'name' => 'cooling_off_days',
      'vname' => 'LBL_COOLING_OFF_DAYS',
      'type' => 'int',
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
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'marketing_premium_percent' => 
    array (
      'required' => false,
      'name' => 'marketing_premium_percent',
      'vname' => 'LBL_MARKETING_PREMIUM_PERCENT ',
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
      'precision' => '8',
    ),
    'add_to_marketing_price' => 
    array (
      'required' => false,
      'name' => 'add_to_marketing_price',
      'vname' => 'LBL_ADD_TO_MARKETING_PRICE',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
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
    ),
    'deduct_from_marketing_price' => 
    array (
      'required' => false,
      'name' => 'deduct_from_marketing_price',
      'vname' => 'LBL_DEDUCT_FROM_MARKETING_PRICE',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
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
    ),
    'reservation_stage' => 
    array (
      'required' => false,
      'name' => 'reservation_stage',
      'vname' => 'LBL_STAGE',
      'type' => 'enum',
      'dbType' => 'varchar',
      'massupdate' => false,
      'default' => '0',
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
    'reservation_hold_allowed' => 
    array (
      'required' => false,
      'name' => 'reservation_hold_allowed',
      'vname' => 'LBL_HOLD_ALLOWED',
      'type' => 'enum',
      'massupdate' => true,
      'default' => 'Yes',
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
      'options' => 'hold_allowed_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'reservation_days' => 
    array (
      'required' => false,
      'name' => 'reservation_days',
      'vname' => 'LBL_DAYS',
      'type' => 'int',
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
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'reservation_for' => 
    array (
      'required' => false,
      'name' => 'reservation_for',
      'vname' => 'LBL_FOR_C',
      'type' => 'enum',
      'massupdate' => true,
      'default' => 'Titled',
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
      'options' => 'for_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'reservation_special_offer' => 
    array (
      'required' => false,
      'name' => 'reservation_special_offer',
      'vname' => 'LBL_SPECIAL_OFFER',
      'type' => 'decimal',
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
      'len' => '18',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '8',
    ),
    'reservation_less_than_days' => 
    array (
      'required' => false,
      'name' => 'reservation_less_than_days',
      'vname' => 'LBL_LESS_THAN_DAYS',
      'type' => 'int',
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
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'finance_stage' => 
    array (
      'required' => false,
      'name' => 'finance_stage',
      'vname' => 'LBL_FINANCE_STAGE',
      'type' => 'enum',
      'dbType' => 'varchar',
      'massupdate' => false,
      'default' => '0',
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
    'finance_hold_allowed' => 
    array (
      'required' => false,
      'name' => 'finance_hold_allowed',
      'vname' => 'LBL_FINANCE_HOLD_ALLOWED',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'Yes',
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
      'options' => 'hold_allowed_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'finance_days' => 
    array (
      'required' => false,
      'name' => 'finance_days',
      'vname' => 'LBL_FINANCE_DAYS',
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
      'options' => 'finance_days_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'finance_for' => 
    array (
      'required' => false,
      'name' => 'finance_for',
      'vname' => 'LBL_FINANCE_FOR_C',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'Titled',
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
      'options' => 'for_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'finance_special_offer' => 
    array (
      'required' => false,
      'name' => 'finance_special_offer',
      'vname' => 'LBL_FINANCE_SPECIAL_OFFER',
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
    'finance_less_than_days' => 
    array (
      'required' => false,
      'name' => 'finance_less_than_days',
      'vname' => 'LBL_FINANCE_LESS_THAN_DAYS',
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
      'options' => 'finance_less_than_days_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'auction_datetime' => 
    array (
      'required' => false,
      'name' => 'auction_datetime',
      'vname' => 'LBL_AUCTION_DATETIME',
      'type' => 'datetimecombo',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'venue' => 
    array (
      'required' => false,
      'name' => 'venue',
      'vname' => 'LBL_VENUE',
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
    'contact_id_c' => 
    array (
      'required' => false,
      'name' => 'contact_id_c',
      'vname' => 'LBL_AUCTIONEER_CONTACT_ID',
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
    'auctioneer' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'auctioneer',
      'vname' => 'LBL_AUCTIONEER',
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
      'id_name' => 'contact_id_c',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'populate_list' => 
      array (
        'email1' => 'auctioneer_email',
        'phone_mobile' => 'auctioneer_mobile',
      ),
    ),
    'invest_deposit' => 
    array (
      'required' => false,
      'name' => 'invest_deposit',
      'vname' => 'LBL_INVEST_DEPOSIT',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'Yes',
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
      'options' => 'invest_deposit_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'auctioneer_mobile' => 
    array (
      'required' => false,
      'name' => 'auctioneer_mobile',
      'vname' => 'LBL_AUCTIONEER_MOBILE',
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
    'auctioneer_email' => 
    array (
      'required' => false,
      'name' => 'auctioneer_email',
      'vname' => 'LBL_AUCTIONEER_EMAIL',
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
    'land_deposit_amount' => 
    array (
      'required' => false,
      'name' => 'land_deposit_amount',
      'vname' => 'LBL_LAND_DEPOSIT_AMOUNT',
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
    'marketing_premium_amount' => 
    array (
      'required' => false,
      'name' => 'marketing_premium_amount',
      'vname' => 'LBL_MARKETING_PREMIUM_AMOUNT',
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
    'rebate' => 
    array (
      'required' => false,
      'name' => 'rebate',
      'vname' => 'LBL_REBATE',
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
    'house_deposit_amount' => 
    array (
      'required' => false,
      'name' => 'house_deposit_amount',
      'vname' => 'LBL_HOUSE_DEPOSIT_AMOUNT',
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
    'holding_deposit' => 
    array (
      'required' => false,
      'name' => 'holding_deposit',
      'vname' => 'LBL_HOLDING_DEPOSIT',
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
    'exchange_deposit_amount' => 
    array (
      'required' => false,
      'name' => 'exchange_deposit_amount',
      'vname' => 'LBL_EXCHANGE_DEPOSIT_AMOUNT',
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