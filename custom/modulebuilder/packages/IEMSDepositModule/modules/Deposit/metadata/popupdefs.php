<?php
$popupMeta = array (
    'moduleMain' => 'iems_Deposit',
    'varName' => 'iems_Deposit',
    'orderBy' => 'iems_deposit.name',
    'whereClauses' => array (
  'name' => 'iems_deposit.name',
),
    'searchInputs' => array (
  0 => 'iems_deposit_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DEPOSIT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DEPOSIT_TYPE',
    'width' => '10%',
  ),
  'ACCEPTABLE_METHOD' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_ACCEPTABLE_METHOD',
    'width' => '10%',
    'default' => true,
  ),
  'DEPOSIT_TO_BE_HELD_BY' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DEPOSIT_TO_BE_HELD_BY',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
),
);
