<?php
$module_name = 'iems_MasterContract';
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
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
                  'readonly' => true
              ),
              1 => 
              array (
                'name' => 'sunset_date',
                'label' => 'LBL_SUNSET_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'sunset_date_extension',
                'label' => 'LBL_SUNSET_DATE_EXTENSION',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'firb_required',
                'label' => 'LBL_FIRB_REQUIRED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'firb_approved',
                'label' => 'LBL_FIRB_APPROVED',
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
