<?php
$viewdefs['iems_SpecialCondition']['base']['view']['subpanel-for-contracts'] = array (
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
          'name' => 'extra_info',
          'label' => 'LBL_EXTRA_INFO',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'stage',
          'label' => 'LBL_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'price_c',
          'label' => 'LBL_PRICE_C',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'date_expected',
          'label' => 'LBL_DATE_EXPECTED',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'date_approved',
          'label' => 'LBL_DATE_APPROVED',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'label' => 'LBL_APPROVED_BY',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'type' => 'text',
        ),
        6 => 
        array (
          'label' => 'LBL_EXPIRED',
          'default' => true,
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
        7 =>
        array (
          'name' => 'filename',
          'label' => 'LBL_FILENAME',
          'enabled' => true,
          'link' => true,
          'sortable' => false,
          'width' => '10%',
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);