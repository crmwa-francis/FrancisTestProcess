<?php
$module_name = 'iems_Registration';
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
                'name' => 'name',
                'label' => 'REG ID',
                'readonly' => true,
                'required' => false
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
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
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
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
                'name' => 'referral_partner',
                'label' => 'LBL_REFERRAL_PARTNER',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 =>
              array (
                'name' => 'buyer2',
                'label' => 'LBL_BUYER2',
              ),
              5 =>
              array (
                  'name' => 'buyer1',
                  'label' => 'LBL_BUYER1',
              ),
              6 => 'team_name',
              7 => 'assigned_user_name',
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
