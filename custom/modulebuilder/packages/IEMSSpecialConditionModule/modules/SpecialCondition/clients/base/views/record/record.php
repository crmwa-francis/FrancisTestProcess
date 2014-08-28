<?php
$module_name = 'iems_SpecialCondition';
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'stage',
                'label' => 'LBL_STAGE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
              ),
              3 => 
              array (
                'name' => 'date_approved',
                'label' => 'LBL_DATE_APPROVED',
              ),
              4 => 
              array (
                'name' => 'date_expected',
                'label' => 'LBL_DATE_EXPECTED',
              ),
              5 => 
              array (
                'name' => 'approved_by',
                'label' => 'LBL_APPROVED_BY',
              ),
              6 => 
              array (
                'name' => 'price_c',
                'label' => 'LBL_PRICE_C',
              ),
              7 => 
              array (
                'name' => 'expired',
                'label' => 'LBL_EXPIRED',
              ),
              8 => 
              array (
                'name' => 'extra_info',
                'studio' => 'visible',
                'label' => 'LBL_EXTRA_INFO',
                'css_class' => 'span12',
              ),
              9 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_FILENAME',
              ),
              10 => 
              array (
                'name' => 'team_name',
              ),
              11 => 'assigned_user_name',
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
