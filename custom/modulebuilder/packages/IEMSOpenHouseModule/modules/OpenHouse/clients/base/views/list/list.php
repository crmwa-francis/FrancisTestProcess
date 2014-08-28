<?php
$module_name = 'iems_OpenHouse';
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
                'name' => 'date_time',
                'label' => 'LBL_DATE_TIME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              5 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              6 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'rating',
                'label' => 'LBL_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'mobile',
                'label' => 'LBL_MOBILE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'comment',
                'label' => 'LBL_COMMENT',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => false,
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
