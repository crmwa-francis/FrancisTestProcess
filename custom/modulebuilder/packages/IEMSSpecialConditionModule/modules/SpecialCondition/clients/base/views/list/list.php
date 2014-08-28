<?php
$module_name = 'iems_SpecialCondition';
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
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
                'type' => 'varchar',
              ),
              1 => 
              array (
                'name' => 'extra_info',
                'label' => 'LBL_EXTRA_INFO',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'label' => 'LBL_STAGE',
                'enabled' => true,
                'default' => true,
                'name' => 'stage',
                'readonly' => true,
                'width' => '10%',
              ),
              3 => 
              array (
                'name' => 'price_c',
                'label' => 'LBL_PRICE_C',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'date_expected',
                'label' => 'LBL_DATE_EXPECTED',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'date_approved',
                'label' => 'LBL_DATE_APPROVED',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              6 => 
              array (
                'name' => 'expired',
                'label' => 'LBL_EXPIRED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'label' => 'LBL_APPROVED_BY',
                'enabled' => true,
                'default' => true,
                'name' => 'approved_by',
                'readonly' => true,
                'width' => '10%',
              ),
              8 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_FILENAME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
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
