<?php
$module_name = 'iems_ProjectContacts';
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
                'name' => 'role',
                'label' => 'LBL_ROLE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_FLEX_RELATE',
                'enabled' => true,
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_PHONE_OFFICE',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_mobile',
                'label' => 'LBL_PHONE_MOBILE',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'email1',
                'label' => 'LBL_EMAIL1',
                'enabled' => true,
                'readonly' => true,
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
