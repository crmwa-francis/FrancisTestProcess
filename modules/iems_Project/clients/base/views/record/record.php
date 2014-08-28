<?php
$module_name = 'iems_Project';
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
                'name' => 'master_project',
                'studio' => 'visible',
                'label' => 'LBL_MASTER_PROJECT',
              ),
              1 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              2 => 
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
                    'placeholder' => 'LBL_PRIMART_ADDRESS_STREET_NUMBER',
                  ),
                  3 => 
                  array (
                    'name' => 'primary_address_street_name',
                    'css_class' => 'address_street_name',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET_NAME',
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
                    'name' => 'primary_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                  ),
                  7 => 
                  array (
                    'name' => 'primary_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              3 => 
              array (
                'name' => 'project_id',
                'label' => 'LBL_PROJECT_ID',
                'readonly' => true,
              ),
              4 => 
              array (
                'name' => 'vendor',
                'studio' => 'visible',
                'label' => 'LBL_VENDOR',
              ),
              5 => 
              array (
                'name' => 'property_type',
                'studio' => 'visible',
                'label' => 'LBL_PROPERTY_TYPE',
                'css_class' => 'span12',
              ),
              6 => 
              array (
                'name' => 'referrer_name',
                'studio' => 'visible',
                'label' => 'LBL_REFERRER_NAME',
                'type' => 'cstm_parent',
                'parent_type' => 'referrer_type',
              ),
              7 => 
              array (
                'name' => 'build_status',
                'studio' => 'visible',
                'label' => 'LBL_BUILD_STATUS',
                'span' => 6,
              ),
              8 => 
              array (
                'span' => 6,
              ),
              9 => 
              array (
                'name' => 'marketing_status',
                'studio' => 'visible',
                'label' => 'LBL_MARKETING_STATUS',
              ),
              10 => 
              array (
                'name' => 'builder_name',
                'studio' => 'visible',
                'label' => 'LBL_BUILDER_NAME',
                'type' => 'cstm_parent',
                'parent_type' => 'builder_type',
              ),
              11 => 
              array (
                'name' => 'multiple_house_designs',
                'studio' => 'visible',
                'label' => 'LBL_MULTIPLE_HOUSE_DESIGNS',
              ),
              12 => 
              array (
                'name' => 'titles_expected',
                'label' => 'LBL_TITLES_EXPECTED',
              ),
              13 => 
              array (
                'name' => 'dwellings',
                'label' => 'LBL_DWELLINGS',
              ),
              14 => 
              array (
                'name' => 'titles_released',
                'label' => 'LBL_TITLE_RELEASED',
              ),
              15 => 
              array (
                'name' => 'sunset_date',
                'label' => 'LBL_SUNSET_DATE',
              ),
              16 => 
              array (
                'name' => 'expected_completion',
                'label' => 'LBL_EXPECTED_COMPLETION',
              ),
              17 => 
              array (
                'name' => 'agreement_start',
                'label' => 'LBL_AGREEMENT_START',
              ),
              18 => 
              array (
                'name' => 'completed',
                'label' => 'LBL_COMPLETED',
              ),
              19 => 
              array (
                'name' => 'agreement_finish',
                'label' => 'LBL_AGREEMENT_FINISH',
              ),
              20 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
              ),
              21 => 
              array (
                'name' => 'team_name',
                'studio' => 
                array (
                  'portallistview' => false,
                  'portalrecordview' => false,
                ),
                'label' => 'LBL_TEAMS',
              ),
              22 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              23 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
            ),
          ),
          2 => 
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
                'name' => 'is_master_project',
                'label' => 'LBL_IS_MASTER_PROJECT',
              ),
              1 => 
              array (
                'name' => 'client_file_number',
                'label' => 'LBL_CLIENT_FILE_NUMBER',
              ),
              2 => 
              array (
                'name' => 'show_on_web',
                'label' => 'LBL_SHOW_ON_WEB',
              ),
              3 => 
              array (
                'name' => 'stages',
                'studio' => 'visible',
                'label' => 'LBL_STAGES',
                'placeholder' => 'e.g. 1A,1B,2A, . .',
                'css_class' => 'span12',
              ),
              4 => 
              array (
                'name' => 'featured',
                'label' => 'LBL_FEATURED',
              ),
              5 => 
              array (
                'name' => 'buildings',
                'label' => 'LBL_BUILDINGS',
              ),
              6 => 
              array (
                'name' => 'photo_image',
                'studio' => 'visible',
                'label' => 'LBL_PHOTO_IMAGE',
              ),
              7 => 
              array (
                'name' => 'levels',
                'label' => 'LBL_LEVELS',
              ),
              8 => 
              array (
                'name' => 'logo',
                'studio' => 'visible',
                'label' => 'LBL_LOGO',
              ),
              9 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
              ),
              10 => 
              array (
                'name' => 'estate_map',
                'studio' => 'visible',
                'label' => 'LBL_ESTATE_MAP',
              ),
              11 => 
              array (
                'name' => 'duration',
                'label' => 'LBL_DURATION',
              ),
              12 => 
              array (
                'name' => 'facilities',
                'studio' => 'visible',
                'label' => 'LBL_FACILITIES',
                'css_class' => 'span12',
              ),
              13 => 
              array (
                'name' => 'aspect',
                'studio' => 'visible',
                'label' => 'LBL_ASPECT',
              ),
              14 => 
              array (
                'name' => 'estate_disclaimer',
                'studio' => 'visible',
                'label' => 'LBL_ESTATE_DISCLAIMER',
              ),
              15 => 
              array (
                'name' => 'views',
                'studio' => 'visible',
                'label' => 'LBL_VIEWS',
                'css_class' => 'span12',
              ),
              16 => 
              array (
                'name' => 'web_display_order',
                'label' => 'LBL_WEB_DISPLAY_ORDER',
              ),
              17 => 
              array (
                'name' => 'construction',
                'studio' => 'visible',
                'label' => 'LBL_CONSTRUCTION',
              ),
              18 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
              ),
              19 => 
              array (
                'name' => 'website_url',
                'label' => 'LBL_WEBSITE_URL',
                'span' => 6,
              ),
              20 => 
              array (
                'span' => 6,
              ),
              21 => 
              array (
                'name' => 'registration',
                'label' => 'LBL_REGISTRATION',
              ),
            ),
          ),
          3 => 
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
                'name' => 'marketing_status_appraisal',
                'label' => 'LBL_APPRAISAL',
              ),
              1 => 
              array (
                'name' => 'marketing_status_marketing',
                'label' => 'LBL_MARKETING',
              ),
              2 => 
              array (
                'name' => 'marketing_status_percent_win',
                'label' => 'LBL_PERCENT_WIN',
              ),
              3 => 
              array (
                'name' => 'marketing_status_finance_approved',
                'label' => 'LBL_FINANCE_APPROVED',
              ),
              4 => 
              array (
                'name' => 'marketing_status_planning',
                'label' => 'LBL_PLANNING',
              ),
              5 => 
              array (
                'name' => 'marketing_status_selling',
                'label' => 'LBL_SELLING',
              ),
              6 => 
              array (
                'name' => 'marketing_status_on_hold',
                'label' => 'LBL_MARKETING_STATUS_ON_HOLD',
              ),
              7 => 
              array (
                'name' => 'marketing_status_sold',
                'label' => 'LBL_SOLD',
              ),
              8 => 
              array (
                'name' => 'marketing_status_listed',
                'label' => 'LBL_LISTED',
              ),
              9 => 
              array (
                'name' => 'marketing_status_abandoned',
                'label' => 'LBL_ABANDONED',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'build_status_land_settled',
                'label' => 'LBL_BUILD_STATUS_LAND_SETTLED',
              ),
              1 => 
              array (
                'name' => 'build_status_con_started',
                'label' => 'LBL_BUILD_STATUS_CON_STARTED',
              ),
              2 => 
              array (
                'name' => 'build_status_slab',
                'label' => 'LBL_BUILD_STATUS_SLAB',
              ),
              3 => 
              array (
                'name' => 'build_status_plate_frame',
                'label' => 'LBL_BUILD_STATUS_PLATE_FRAME',
              ),
              4 => 
              array (
                'name' => 'build_status_roof_cover',
                'label' => 'LBL_BUILD_STATUS_ROOF_COVER',
              ),
              5 => 
              array (
                'name' => 'build_status_lockup',
                'label' => 'LBL_BUILD_STATUS_LOCKUP',
              ),
              6 => 
              array (
                'name' => 'build_status_fitout',
                'label' => 'LBL_BUILD_STATUS_FITOUT',
              ),
              7 => 
              array (
                'name' => 'build_status_practical_comp',
                'label' => 'LBL_BUILD_STATUS_PRACTICAL_COMP',
              ),
              8 => 
              array (
                'name' => 'build_status_finished',
                'label' => 'LBL_BUILD_STATUS_FINISHED',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
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
                'studio' => 'visible',
                'label' => 'LBL_LAND_VALUER',
              ),
              5 => 
              array (
                'name' => 'ucv_valuer',
                'studio' => 'visible',
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
                'studio' => 'visible',
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
            'LBL_RECORD_SHOWMORE' => 
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
