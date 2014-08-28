<?php
$module_name = 'iems_Options';
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'price',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_PRICE',
              ),
              1 => 
              array (
                'name' => 'date_expected',
                'label' => 'LBL_DATE_EXPECTED',
              ),
              2 => 
              array (
                'name' => 'comment',
                'studio' => 'visible',
                'label' => 'LBL_COMMENT',
              ),
              3 => 
              array (
                'name' => 'date_approved',
                'label' => 'LBL_DATE_APPROVED',
              ),
              4 => 
              array (
                'name' => 'extra_info',
                'label' => 'LBL_EXTRA_INFO',
              ),
              5 => 
              array (
                'name' => 'expired',
                'studio' => 'visible',
                'label' => 'LBL_EXPIRED',
              ),
              6 => 
              array (
                'name' => 'filename',
                'comment' => '',
                'label' => 'LBL_FILENAME',
              ),
              7 => 
              array (
                'name' => 'approved_by',
                'studio' => 'visible',
                'label' => 'LBL_APPROVED_BY',
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
          ),
        ),
      ),
    ),
  ),
);
