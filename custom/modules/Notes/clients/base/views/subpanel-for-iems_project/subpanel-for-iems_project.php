<?php
$viewdefs['Notes']['base']['view']['subpanel-for-iems_project'] = array (
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
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 =>
        array (
          'target_record_key' => 'contact_id',
          'target_module' => 'Contacts',
          'label' => 'LBL_LIST_CONTACT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'contact_name',
          'sortable' => false,
          'readonly' => true,
        ),
        2 =>
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'enabled' => true,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 =>
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);