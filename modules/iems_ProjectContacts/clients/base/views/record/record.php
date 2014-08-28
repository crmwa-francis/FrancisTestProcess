<?php
$module_name = 'iems_ProjectContacts';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              2 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => false,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'parent_name',
                'studio' => 'visible',
                'label' => 'LBL_FLEX_RELATE',
                'placeholder' => 'LBL_FLEX_RELATE',
              ),
              1 => 
              array (
                'name' => 'role',
                'studio' => 'visible',
                'label' => 'LBL_ROLE',
                'placeholder' => 'LBL_ROLE',
              ),
              2 => 
              array (
                'name' => 'email1',
                'label' => 'LBL_EMAIL1',
                'placeholder' => 'LBL_EMAIL1',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'phone_mobile',
                'readonly' => true,
                'label' => 'LBL_PHONE_MOBILE',
              ),
              5 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_PHONE_OFFICE',
                'placeholder' => 'LBL_PHONE_OFFICE',
              ),
              6 => 'assigned_user_name',
              7 => 'team_name',
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
