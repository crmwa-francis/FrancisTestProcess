<?php
// created: 2014-01-13 11:52:18
$viewdefs['iems_Registration']['base']['view']['subpanel-for-iems_project'] = array (
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
          'label' => 'LBL_REGISTRATION_ID',
          'enabled' => true,
          'default' => true,
          'readonly' => true
        ),
        1 => 
        array (
          'name' => 'date_reserved',
          'label' => 'LBL_DATE_RESERVED',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'buyer1',
          'label' => 'LBL_BUYER1',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'buyer2',
          'label' => 'LBL_BUYER2',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'referral_partner',
          'label' => 'LBL_REFERRAL_PARTNER',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'project',
          'label' => 'LBL_PROJECT',
          'enabled' => true,
          'id' => 'IEMS_PROJECT_ID_C',
          'link' => true,
          'sortable' => false,
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