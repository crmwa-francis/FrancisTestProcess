<?php
$viewdefs['iems_ContractAnnexure']['base']['view']['subpanel-for-iems_mastercontract'] = array (
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
          'name' => 'condition_c',
          'label' => 'LBL_CONDITION_C',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'date_approved',
          'label' => 'LBL_DATE_APPROVED',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'approved_by',
          'label' => 'LBL_APPROVED_BY',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'expired',
          'label' => 'LBL_EXPIRED',
          'enabled' => true,
          'default' => true,
        ),
        4 =>
        array (
          'name' => 'filename',
          'label' => 'LBL_DOCUMENT',
          'enabled' => true,
          'width' => '5%',
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