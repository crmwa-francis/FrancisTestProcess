<?php
$module_name = 'iems_Property';
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
                'label' => 'LBL_PROPERTY_ID',
                'readonly' => true,
                'required' => false,
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'photo',
                'studio' => 'visible',
                'label' => 'LBL_PHOTO',
              ),
              1 => 
              array (
                'name' => 'total',
                'label' => 'LBL_TOTAL',
              ),
              2 => 
              array (
                'name' => 'lot_width',
                'label' => 'LBL_LOT_WIDTH',
              ),
              3 => 
              array (
                'name' => 'lot_length',
                'label' => 'LBL_LOT_LENGTH',
              ),
              4 => 
              array (
                'name' => 'land_size',
                'label' => 'LBL_LAND_SIZE',
              ),
              5 => 
              array (
                'name' => 'loading',
                'studio' => 'visible',
                'label' => 'LBL_LOADING',
              ),
              6 => 
              array (
                'name' => 'estate_map_coordinates',
                'comment' => '',
                'label' => 'LBL_ESTATE_MAP_COORDINATES',
              ),
              7 => 
              array (
                'name' => 'inset_coordinates',
                'studio' => 'visible',
                'label' => 'LBL_INSET_COORDINATES',
              ),
              8 => 
              array (
                'name' => 'project',
                'studio' => 'visible',
                'label' => 'LBL_PROJECT',
                'readonly' => true,
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 'assigned_user_name',
              11 => 'team_name',
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
