<?php
$module_name = 'iems_Listing';
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
                'label' => 'LBL_LISTING_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'primary_address_lot_number',
                'label' => 'LBL_PRIMARY_ADDRESS_LOT_NUMBER',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'primary_address_street_number',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET_NUMBER',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'primary_address_street_name',
                'label' => 'LBL_PRIMARY_ADDRESS_STREETNAME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'primary_address_suburb',
                'label' => 'LBL_PRIMARY_ADDRESS_SUBURB',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'primary_address_state',
                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 =>
              array (
                  'name' => 'estate',
                  'label' => 'LBL_ESTATE',
                  'enabled' => true,
                  'id' => 'IEMS_PROJECT_ID_C',
                  'link' => true,
                  'sortable' => false,
                  'width' => '10%',
                  'default' => true,
                  'readonly' => true,
              ),
              7 =>
              array (
                  'name' => 'sale_price',
                  'label' => 'LBL_SALE_PRICE',
                  'enabled' => true,
                  'currency_format' => true,
                  'width' => '10%',
                  'default' => true,
              ),
              8 =>
              array (
                  'name' => 'property_status',
                  'label' => 'LBL_PROPERTY_STATUS',
                  'enabled' => true,
                  'width' => '10%',
                  'default' => true,
              ),
              9 =>
              array (
                  'name' => 'property_date_created',
                  'label' => 'LBL_PROPERTY_DATE_CREATED',
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
