<?php
$module_name = 'iems_StageMap';
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
                'name' => 'map',
                'label' => 'LBL_MAP',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
                'required' => false,
              ),
              1 =>
              array (
                'name' => 'coordinates',
                'label' => 'LBL_COORDINATES',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 =>
              array (
                'name' => 'color',
                'label' => 'LBL_COLOR',
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
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => false,
              ),
              7 =>
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              8 =>
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
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
