<?php
$listViewDefs['Contracts'] = 
array (
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CONTRACT_ID',
    'link' => true,
    'default' => true,
  ),
  'account_name' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'link' => true,
    'default' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'status' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'start_date' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => true,
  ),
  'end_date' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_END_DATE',
    'link' => false,
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'team_name' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'related_fields' => 
    array (
      0 => 'team_id',
    ),
  ),
);
