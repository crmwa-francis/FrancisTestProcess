<?php
$module_name = 'iems_ListingPricing';
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'land_price',
                'label' => 'LBL_LAND_PRICE',
              ),
              1 => 
              array (
                'name' => 'settle_land_first',
                'studio' => 'visible',
                'label' => 'LBL_SETTLE_LAND_FIRST',
              ),
              2 => 
              array (
                'name' => 'land_deposit_percent',
                'label' => 'LBL_LAND_DEPOSIT_PERCENT',
              ),
              3 => 
              array (
                'name' => 'land_deposit_amount',
                'label' => 'LBL_LAND_DEPOSIT_AMOUNT',
                'span' => 6,
              ),
              4 => 
              array (
                'span' => 6,
              ),
              5 => 
              array (
                'span' => 6,
              ),
              6 => 
              array (
                'name' => 'property_status',
                'label' => 'LBL_PROPERTY_STATUS',
              ),
              7 => 
              array (
                'name' => 'method_of_sale',
                'studio' => 'visible',
                'label' => 'LBL_METHOD_OF_SALE',
              ),
              8 => 
              array (
                'name' => 'currency',
                'studio' => 'visible',
                'label' => 'LBL_CURRENCY',
              ),
              9 => 
              array (
                'name' => 'for_sale_by',
                'studio' => 'visible',
                'label' => 'LBL_FOR_SALE_BY',
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
