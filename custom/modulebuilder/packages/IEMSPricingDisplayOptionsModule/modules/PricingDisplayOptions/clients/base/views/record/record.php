<?php
$module_name = 'iems_PricingDisplayOptions';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'record' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'panel_header',
                                                'label' => 'LBL_RECORD_HEADER',
                                                'header' => true,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'picture',
                                                                'type' => 'avatar',
                                                                'width' => 42,
                                                                'height' => 42,
                                                                'dismiss_label' => true,
                                                                'readonly' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'favorite',
                                                                'label' => 'LBL_FAVORITE',
                                                                'type' => 'favorite',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'follow',
                                                                'label' => 'LBL_FOLLOW',
                                                                'type' => 'follow',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'panel_body',
                                                'label' => 'LBL_RECORD_BODY',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => true,
                                                'newTab' => false,
                                                'panelDefault' => 'expanded',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'stage',
                                                                'label' => 'LBL_STAGE',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'currency',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_CURRENCY',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'fieldset_property_status',
                                                                'type' => 'fieldset-with-labels',
                                                                'label' => 'LBL_PROPERTY_STATUS',
                                                                'fields' =>
                                                                    array(
                                                                        0 =>
                                                                            array(
                                                                                'name' => 'property_status',
                                                                                'studio' => 'visible',
                                                                                'label' => '',
                                                                                'span' => 6,
                                                                            ),
                                                                        1 =>
                                                                            array(
                                                                                'name' => 'property_status_options',
                                                                                'studio' => 'visible',
                                                                                'label' => '',
                                                                                'span' => 6,
                                                                            ),
                                                                    ),
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'fieldset_display_sale_pricing',
                                                                'type' => 'fieldset-with-labels',
                                                                'label' => 'Display Sale Pricing Options',
                                                                'fields' =>
                                                                    array(
                                                                        0 =>
                                                                            array(
                                                                                'name' => 'display_sale_pricing',
                                                                                'placeholder' => 'LBL_DISPLAY_SALE_PRICING',
                                                                                'span' => 6,
                                                                            ),
                                                                        1 =>
                                                                            array(
                                                                                'name' => 'display_sale_pricing_from',
                                                                                'placeholder' => 'LBL_DISPLAY_SALE_PRICING_FROM',
                                                                            ),
                                                                        2 =>
                                                                            array(
                                                                                'name' => 'display_sale_pricing_to',
                                                                                'placeholder' => 'LBL_DISPLAY_SALE_PRICING_TO',
                                                                            ),
                                                                    ),
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'method_of_sale',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_METHOD_OF_SALE',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'for_sale_by',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_FOR_SALE_BY',
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'internal_sale_price',
                                                                'label' => 'LBL_INTERNAL_SALE_PRICE',
                                                                'span' => 6,
                                                            ),
                                                        7 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'estimated_sale_price_from',
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_ESTIMATED_SALE_PRICE_FROM',
                                                                'span' => 6,
                                                            ),
                                                        9 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        10 =>
                                                            array(
                                                                'name' => 'estimated_sale_price_to',
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_ESTIMATED_SALE_PRICE_TO',
                                                                'span' => 6,
                                                            ),
                                                        11 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                    ),
                                            ),
                                        2 =>
                                            array(
                                                'newTab' => false,
                                                'panelDefault' => 'collapsed',
                                                'name' => 'LBL_RECORDVIEW_PANEL2',
                                                'label' => 'LBL_RECORDVIEW_PANEL2',
                                                'css_class' => 'auction',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => 1,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'auction_date_time',
                                                                'label' => 'LBL_AUCTION_DATE_TIME',
                                                                'css_class' => 'auction_date_time',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'auction_venue',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_AUCTION_VENUE',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'auctioneer',
                                                                'label' => 'LBL_AUCTIONEER',
                                                                'span' => 6,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'company_name',
                                                                'label' => 'LBL_COMPANY_NAME',
                                                                'span' => 6,
                                                            ),
                                                        5 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'first_name',
                                                                'label' => 'LBL_FIRST_NAME',
                                                                'span' => 6,
                                                            ),
                                                        7 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'last_name',
                                                                'label' => 'LBL_LAST_NAME',
                                                                'span' => 6,
                                                            ),
                                                        9 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        10 =>
                                                            array(
                                                                'name' => 'phone_mobile',
                                                                'label' => 'LBL_PHONE_MOBILE',
                                                                'span' => 6,
                                                            ),
                                                        11 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        12 =>
                                                            array(
                                                                'name' => 'email',
                                                                'label' => 'LBL_EMAIL',
                                                                'span' => 6,
                                                            ),
                                                        13 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'templateMeta' =>
                                    array(
                                        'useTabs' => false,
                                        'tabDefs' =>
                                            array(
                                                'LBL_RECORD_BODY' =>
                                                    array(
                                                        'newTab' => false,
                                                        'panelDefault' => 'expanded',
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
