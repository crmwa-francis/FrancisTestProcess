<?php
$viewdefs['Notes'] = 
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
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => false,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 'contact_name',
              1 => 'parent_name',
              2 => 
              array (
                'name' => 'description',
                'rows' => 5,
              ),
              3 => 'team_name',
              4 => 
              array (
                'name' => 'filename',
                'related_fields' => 
                array (
                  0 => 'file_mime_type',
                ),
              ),
              5 => 'assigned_user_name',
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => false,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'portal_flag',
                'span' => 12,
              ),
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
            'LBL_RECORD_SHOWMORE' => 
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
