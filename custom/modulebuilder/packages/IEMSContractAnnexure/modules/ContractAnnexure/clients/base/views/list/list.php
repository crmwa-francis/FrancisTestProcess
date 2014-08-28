<?php
$module_name = 'iems_ContractAnnexure';
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
                'name' => 'condition_c',
                'label' => 'LBL_CONDITION_C',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'date_approved',
                'label' => 'LBL_DATE_APPROVED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'approved_by',
                'label' => 'LBL_APPROVED_BY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'expired',
                'label' => 'LBL_EXPIRED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_DOCUMENT',
                'enabled' => true,
                'width' => '5%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
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
