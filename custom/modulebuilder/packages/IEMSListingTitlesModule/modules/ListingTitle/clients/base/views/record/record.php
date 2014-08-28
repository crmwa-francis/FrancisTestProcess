<?php
$module_name = 'iems_ListingTitle';
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
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'deposited_plan',
                'label' => 'LBL_DEPOSITED_PLAN',
              ),
              1 => 
              array (
                'name' => 'survey',
                'label' => 'LBL_SURVEY',
              ),
              2 => 
              array (
                'name' => 'strata',
                'label' => 'LBL_STRATA',
              ),
              3 => 
              array (
                'name' => 'plan_c',
                'label' => 'LBL_PLAN_C',
              ),
              4 => 
              array (
                'name' => 'folio',
                'label' => 'LBL_FOLIO',
              ),
              5 => 
              array (
                'name' => 'volume',
                'label' => 'LBL_VOLUME',
              ),
              6 => 
              array (
                'name' => 'diagram',
                'label' => 'LBL_DIAGRAM',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'local_council',
                'label' => 'LBL_LOCAL_COUNCIL',
              ),
              9 => 
              array (
                'name' => 'zoning_1',
                'label' => 'LBL_ZONING_1',
              ),
              10 => 
              array (
                'name' => 'zoning_2',
                'label' => 'LBL_ZONING_2',
              ),
              11 => 
              array (
                'name' => 'water_authority',
                'label' => 'LBL_WATER_AUTHORITY',
              ),
              12 => 
              array (
                'name' => 'easement',
                'studio' => 'visible',
                'label' => 'LBL_EASEMENT',
              ),
              13 => 
              array (
                'name' => 'crossover',
                'studio' => 'visible',
                'label' => 'LBL_CROSSOVER',
              ),
              14 => 
              array (
                'name' => 'nbn',
                'studio' => 'visible',
                'label' => 'LBL_NBN',
              ),
              15 => 
              array (
                'name' => 'bushfire_management',
                'studio' => 'visible',
                'label' => 'LBL_BUSHFIRE_MANAGEMENT',
              ),
              16 => 
              array (
                'name' => 'transformer_located_next',
                'studio' => 'visible',
                'label' => 'LBL_TRANSFORMER_LOCATED_NEXT',
                'span' => 6,
              ),
              17 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'car_park_no',
                'label' => 'LBL_CAR_PARK_NO',
              ),
              1 => 
              array (
                'name' => 'car_strata_lot',
                'label' => 'LBL_CAR_STRATA_LOT',
              ),
              2 => 
              array (
                'name' => 'storage_no',
                'label' => 'LBL_STORAGE_NO',
              ),
              3 => 
              array (
                'name' => 'excl_use_no',
                'label' => 'LBL_EXCL_USE_NO',
              ),
              4 => 
              array (
                'name' => 'key_number',
                'label' => 'LBL_KEY_NUMBER',
              ),
              5 => 
              array (
                'name' => 'entitlement',
                'label' => 'LBL_ENTITLEMENT',
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'liability_per_annum',
                'label' => 'LBL_LIABILITY_PER_ANNUM',
              ),
              1 => 
              array (
                'name' => 'water_per_annum',
                'label' => 'LBL_WATER_PER_ANNUM',
              ),
              2 => 
              array (
                'name' => 'liability_per_quarter',
                'label' => 'LBL_LIABILITY_PER_QUARTER',
              ),
              3 => 
              array (
                'name' => 'water_per_quarter',
                'label' => 'LBL_WATER_PER_QUARTER',
              ),
              4 => 
              array (
                'name' => 'council_per_annum',
                'label' => 'LBL_COUNCIL_PER_ANNUM',
              ),
              5 => 
              array (
                'name' => 'body_admin_per_annum',
                'label' => 'LBL_BODY_ADMIN_PER_ANNUM',
              ),
              6 => 
              array (
                'name' => 'council_per_quarter',
                'label' => 'LBL_COUNCIL_PER_QUARTER',
              ),
              7 => 
              array (
                'name' => 'body_admin_per_quarter',
                'label' => 'LBL_BODY_ADMIN_PER_QUARTER',
              ),
              8 => 
              array (
                'name' => 'body_sinking_per_annum',
                'label' => 'LBL_BODY_SINKING_PER_ANNUM',
              ),
              9 => 
              array (
                'name' => 'outgoing_per_annum',
                'label' => 'LBL_OUTGOING_PER_ANNUM',
              ),
              10 => 
              array (
                'name' => 'body_sinking_per_quarter',
                'label' => 'LBL_BODY_SINKING_PER_QUARTER',
              ),
              11 => 
              array (
                'name' => 'outgoing_per_quarter',
                'label' => 'LBL_OUTGOING_PER_QUARTER',
                'span' => 6,
              ),
              12 => 
              array (
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'occupied',
                'studio' => 'visible',
                'label' => 'LBL_OCCUPIED',
              ),
              1 => 
              array (
                'name' => 'tenant',
                'label' => 'LBL_TENANT',
              ),
              2 => 
              array (
                'name' => 'rental_term_months',
                'label' => 'LBL_RENTAL_TERM_MONTHS',
              ),
              3 => 
              array (
                'name' => 'agent',
                'studio' => 'visible',
                'label' => 'LBL_AGENT',
              ),
              4 => 
              array (
                'name' => 'leash_start_date',
                'label' => 'LBL_LEASH_START_DATE',
              ),
              5 => 
              array (
                'name' => 'leash_end_date',
                'label' => 'LBL_LEASH_END_DATE',
              ),
              6 => 
              array (
                'name' => 'rent_per_week_from',
                'label' => 'LBL_RENT_PER_WEEK_FROM',
              ),
              7 => 
              array (
                'name' => 'rent_per_week_to',
                'label' => 'LBL_RENT_PER_WEEK_TO',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'land_value',
                'label' => 'LBL_LAND_VALUE',
              ),
              1 => 
              array (
                'name' => 'ucv_value',
                'label' => 'LBL_UCV_VALUE',
              ),
              2 => 
              array (
                'name' => 'land_valued',
                'label' => 'LBL_LAND_VALUED',
              ),
              3 => 
              array (
                'name' => 'ucv_valued',
                'label' => 'LBL_UCV_VALUED',
              ),
              4 => 
              array (
                'name' => 'land_valuer',
                'label' => 'LBL_LAND_VALUER',
              ),
              5 => 
              array (
                'name' => 'ucv_valuer',
                'label' => 'LBL_UCV_VALUER',
                'span' => 6,
              ),
              6 => 
              array (
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'property_value',
                'label' => 'LBL_PROPERTY_VALUE',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'property_valued',
                'label' => 'LBL_PROPERTY_VALUED',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'property_valuer',
                'label' => 'LBL_PROPERTY_VALUER',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
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
