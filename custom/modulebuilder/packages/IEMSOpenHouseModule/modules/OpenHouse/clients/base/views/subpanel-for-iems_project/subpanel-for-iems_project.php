<?php
// created: 2014-01-13 11:34:39
$viewdefs['iems_OpenHouse']['base']['view']['subpanel-for-iems_project'] = array (
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
          'name' => 'date_time',
          'label' => 'LBL_DATE_TIME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'rating',
          'label' => 'LBL_RATING',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        3 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'email',
          'label' => 'LBL_EMAIL',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'mobile',
          'label' => 'LBL_MOBILE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'comment',
          'label' => 'LBL_COMMENT',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'enabled' => true,
          'id' => 'ASSIGNED_USER_ID',
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