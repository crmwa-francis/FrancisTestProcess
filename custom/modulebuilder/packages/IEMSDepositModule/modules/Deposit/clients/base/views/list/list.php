<?php
$module_name = 'iems_Deposit';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'project',
                'label' => 'LBL_PROJECT',
                'enabled' => true,
                'id' => 'IEMS_PROJECT_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'deposit_to_be_held_by',
                'label' => 'LBL_DEPOSIT_TO_BE_HELD_BY',
                'enabled' => true,
                'id' => 'ACCOUNT_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'acceptable_method',
                'label' => 'LBL_ACCEPTABLE_METHOD',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'deposit_type',
                'label' => 'LBL_DEPOSIT_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              7 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
