<?php

/* This file was updated by 7_CleanUpCustomRecordAvatar */
$viewdefs['iems_Listing']['base']['view']['record'] = array (
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
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LISTING_ID',
          'readonly' => true,
          'required' => false,
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
      'labelsOnTop' => false,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'date_entered',
          'comment' => 'Date record created',
          'studio' => 
          array (
            'portaleditview' => false,
          ),
          'readonly' => true,
          'label' => 'LBL_DATE_ENTERED',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'stage',
          'label' => 'LBL_STAGE',
        ),
        2 => 
        array (
          'name' => 'property_type',
          'studio' => 'visible',
          'label' => 'LBL_PROPERTY_TYPE',
        ),
        3 => 
        array (
          'name' => 'fieldset_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'temporaryAddress',
              'css_class' => 'temporaryAddress',
              'placeholder' => 'temporaryAddress',
            ),
            1 => 
            array (
              'name' => 'primary_address_lot_number',
              'css_class' => 'address_lot_number',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_LOT_NUMBER',
            ),
            2 => 
            array (
              'name' => 'primary_address_street_number',
              'css_class' => 'address_street_number',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET_NUMBER',
            ),
            3 => 
            array (
              'name' => 'primary_address_street_name',
              'css_class' => 'address_street_name',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STREETNAME',
            ),
            4 => 
            array (
              'name' => 'primary_address_suburb',
              'css_class' => 'address_suburb',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_SUBURB',
            ),
            5 => 
            array (
              'name' => 'primary_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
            ),
            6 => 
            array (
              'name' => 'primary_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            ),
            7 => 
            array (
              'name' => 'primary_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            ),
          ),
          'span' => 6,
        ),
        4 => 
        array (
          'span' => 6,
        ),
        5 => 
        array (
          'name' => 'vendor',
          'studio' => 'visible',
          'label' => 'LBL_VENDOR',
        ),
        6 => 
        array (
          'name' => 'land_price',
          'label' => 'LBL_LAND_PRICE',
        ),
        7 => 
        array (
          'name' => 'titles_expected',
          'label' => 'LBL_TITLES_EXPECTED',
        ),
        8 => 
        array (
          'name' => 'property_status',
          'studio' => 'visible',
          'label' => 'LBL_PROPERTY_STATUS',
        ),
        9 => 
        array (
          'name' => 'titles_released',
          'label' => 'LBL_TITLES_RELEASED',
          'span' => 6,
        ),
        10 => 
        array (
          'span' => 6,
        ),
        11 => 
        array (
          'name' => 'expected_completion',
          'label' => 'LBL_EXPECTED_COMPLETION',
          'span' => 12,
        ),
        12 => 
        array (
          'name' => 'completed_date',
          'label' => 'LBL_COMPLETED_DATE',
        ),
        13 => 
        array (
          'name' => 'contract',
          'studio' => 'visible',
          'label' => 'LBL_CONTRACT',
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
);
