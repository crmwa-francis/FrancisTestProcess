<?php
// created: 2014-01-16 15:35:24
$viewdefs['Contracts']['base']['view']['subpanel-for-iems_listing'] = array (
  'type' => 'subpanel-list',
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
          'name' => 'name',
          'label' => 'LBL_CONTRACT_ID',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);