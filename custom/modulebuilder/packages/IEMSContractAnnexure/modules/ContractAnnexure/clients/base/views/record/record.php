<?php
$module_name = 'iems_ContractAnnexure';
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
                'name' => 'condition_c',
                'label' => 'LBL_CONDITION_C',
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'approved',
                'label' => 'LBL_APPROVED',
              ),
              3 => 
              array (
                'name' => 'approved_by',
                'label' => 'LBL_APPROVED_BY',
              ),
              4 => 
              array (
                'name' => 'date_approved',
                'label' => 'LBL_DATE_APPROVED',
              ),
              5 => 
              array (
                'name' => 'filename',
                'comment' => 'File name associated with the note (attachment)',
                'label' => 'LBL_DOCUMENT',
              ),
              6 => 
              array (
                'name' => 'expired',
                'label' => 'LBL_EXPIRED',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
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
