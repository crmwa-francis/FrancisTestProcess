<?php
$viewdefs['iems_SpecialCondition']['base']['view']['subpanel-for-iems_mastercontract'] = array (
  'favorite' => true,
  'rowactions' => 
  array (
    'css_class' => 'pull-right',
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'Revert Expiration',
        'event' => 'list:revert_expiration:fire',
        'icon' => 'icon-repeat',
        'acl_action' => 'view',
        'allow_bwc' => false,
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'label' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'icon-eye-open',
        'acl_action' => 'view',
        'allow_bwc' => false,
      ),
      2 => 
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
  'last_state' => 
  array (
    'id' => 'subpanel-list',
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'varchar',
        ),
        1 => 
        array (
          'name' => 'extra_info',
          'label' => 'LBL_EXTRA_INFO',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'stage',
          'label' => 'LBL_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'price_c',
          'label' => 'LBL_PRICE_C',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'date_expected',
          'label' => 'LBL_DATE_EXPECTED',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'date_approved',
          'label' => 'LBL_DATE_APPROVED',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'approved_by',
          'label' => 'LBL_APPROVED_BY',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'expired',
          'label' => 'LBL_EXPIRED',
          'enabled' => true,
          'default' => true,
        ),
        8 =>
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
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);