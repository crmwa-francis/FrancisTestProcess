<?php
$module_name = 'iems_MasterContract';
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
              1 => array(
                  'name' => 'name',
                  'label' => 'LBL_NAME',
                  'required' => false,
                  'readonly' => true
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'sunset_date',
                'label' => 'LBL_SUNSET_DATE',
              ),
              1 => 
              array (
                'name' => 'sunset_date_extension',
                'label' => 'LBL_SUNSET_DATE_EXTENSION',
              ),
              2 => 
              array (
                'name' => 'firb_required',
                'label' => 'LBL_FIRB_REQUIRED',
              ),
              3 => 
              array (
                'name' => 'firb_approved',
                'label' => 'LBL_FIRB_APPROVED',
              ),
              4 => 
              array (
                'name' => 'property_chattels_included',
                'label' => 'LBL_PROPERTY_CHATTELS_INCLUDED',
                'span' => 6,
              ),
              5 =>
              array (
                'name' => 'iems_mastercontract_iems_project_name',
                'label' => 'LBL_MASTERCONTRACT_PROJECT_NAME',
                'readonly' => true,
                'span' => 6,
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
