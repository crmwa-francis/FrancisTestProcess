<?php
// created: 2014-01-28 16:55:30
$viewdefs['iems_PricingDisplayOptions']['base']['view']['subpanel-for-iems_pricing'] = array (
  'rowactions' => 
  array (
    'css_class' => 'pull-right',
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'icon-eye-open',
        'acl_action' => 'view',
        'allow_bwc' => false,
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'icon-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
        'allow_bwc' => false,
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'stage',
          'label' => 'LBL_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'for_sale_by',
          'label' => 'LBL_FOR_SALE_BY',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'method_of_sale',
          'label' => 'LBL_METHOD_OF_SALE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'property_status',
          'label' => 'LBL_PROPERTY_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'auctioneer',
          'label' => 'LBL_AUCTIONEER',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'auction_date_time',
          'label' => 'LBL_AUCTION_DATE_TIME',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'auction_venue',
          'label' => 'LBL_AUCTION_VENUE',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);