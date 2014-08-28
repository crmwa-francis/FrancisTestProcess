<?php
$module_name = 'iems_Registration';
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
                'name' => 'project',
                'label' => 'LBL_PROJECT',
                'enabled' => true,
                'id' => 'IEMS_PROJECT_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              2 => 
              array (
                'name' => 'date_reserved',
                'label' => 'LBL_DATE_RESERVED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'referral_partner',
                'label' => 'LBL_REFERRAL_PARTNER',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'buyer1',
                'label' => 'LBL_BUYER1',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'buyer2',
                'label' => 'LBL_BUYER2',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              9 => 
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
