<?php
$module_name = 'iems_Photo';
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
              1 => 'name',
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
                'name' => 'photo_image',
                'studio' => 'visible',
                'label' => 'LBL_IMAGE',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'category',
                'studio' => 'visible',
                'label' => 'LBL_CATEGORY',
                'span' => 6,
              ),
              3 => 
              array (
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'show_on_web',
                'label' => 'LBL_SHOW_ON_WEB',
              ),
              5 => 
              array (
                'name' => 'display_in_web_pages',
                'studio' => 'visible',
                'label' => 'LBL_DISPLAY_IN_WEB_PAGES',
              ),
              6 => 
              array (
                'name' => 'suburb_snapshot',
                'label' => 'LBL_SUBURB_SNAPSHOT',
              ),
              7 => 
              array (
                'name' => 'banner_url',
                'label' => 'LBL_BANNER_URL',
              ),
              8 => 'team_name',
              9 => 'assigned_user_name',
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
