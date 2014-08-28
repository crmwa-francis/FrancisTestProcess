<?php
$module_name = 'iems_PricingDisplayOptions';
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
                'name' => 'stage',
                'label' => 'LBL_STAGE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'method_of_sale',
                'label' => 'LBL_METHOD_OF_SALE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'for_sale_by',
                'label' => 'LBL_FOR_SALE_BY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'display_sale_pricing',
                'label' => 'LBL_DISPLAY_SALE_PRICING',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'internal_sale_price',
                'label' => 'LBL_INTERNAL_SALE_PRICE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'auctioneer',
                'label' => 'LBL_AUCTIONEER',
                'enabled' => true,
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'auction_venue',
                'label' => 'LBL_AUCTION_VENUE',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'auction_date_time',
                'label' => 'LBL_AUCTION_DATE_TIME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'enabled' => true,
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAMS',
                'enabled' => true,
                'id' => 'TEAM_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED_NAME',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
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
