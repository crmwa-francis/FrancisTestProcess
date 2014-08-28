<?php
$module_name = 'iems_Pricing';
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
                                                        1 => 'name',
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
                                                'name' => 'PricingPropertyPriceBreakdown',
                                                'label' => 'Property Price Breakdown',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => true,
                                                'newTab' => true,
                                                'panelDefault' => 'expanded',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'land_deposit_percent',
                                                                'label' => 'LBL_LAND_DEPOSIT_PERCENT',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'exchange_deposit_percent',
                                                                'label' => 'LBL_EXCHANGE_DEPOSIT_PERCENT',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'land_deposit_amount',
                                                                'label' => 'LBL_LAND_DEPOSIT_AMOUNT',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'exchange_deposit_amount',
                                                                'label' => 'LBL_EXCHANGE_DEPOSIT_AMOUNT',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'settle_land_first',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_SETTLE_LAND_FIRST',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'days_to_exchange',
                                                                'label' => 'LBL_DAYS_TO_EXCHANGE',
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'house_deposit_percent',
                                                                'label' => 'LBL_HOUSE_DEPOSIT_PERCENT',
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'cooling_of_required',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_COOLING_OF_REQUIRED',
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'house_deposit_amount',
                                                                'label' => 'LBL_HOUSE_DEPOSIT_AMOUNT',
                                                            ),
                                                        9 =>
                                                            array(
                                                                'name' => 'cooling_off_days',
                                                                'label' => 'LBL_COOLING_OFF_DAYS',
                                                            ),
                                                        10 =>
                                                            array(
                                                                'name' => 'gst',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_GST',
                                                            ),
                                                        11 =>
                                                            array(
                                                                'name' => 'marketing_premium_percent',
                                                                'label' => 'LBL_MARKETING_PREMIUM_PERCENT ',
                                                            ),
                                                        12 =>
                                                            array(
                                                                'name' => 'holding_deposit',
                                                                'label' => 'LBL_HOLDING_DEPOSIT',
                                                            ),
                                                        13 =>
                                                            array(
                                                                'name' => 'marketing_premium_amount',
                                                                'label' => 'LBL_MARKETING_PREMIUM_AMOUNT',
                                                            ),
                                                        14 =>
                                                            array(
                                                                'name' => 'invest_deposit',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_INVEST_DEPOSIT',
                                                            ),
                                                        15 =>
                                                            array(
                                                                'name' => 'add_to_marketing_price',
                                                                'label' => 'LBL_ADD_TO_MARKETING_PRICE',
                                                            ),
                                                        16 =>
                                                            array(
                                                                'name' => 'deposit_held_by',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_DEPOSIT_HELD_BY',
                                                            ),
                                                        17 =>
                                                            array(
                                                                'name' => 'rebate',
                                                                'label' => 'LBL_REBATE',
                                                                'span' => 6,
                                                            ),
                                                        18 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        19 =>
                                                            array(
                                                                'name' => 'deduct_from_marketing_price',
                                                                'label' => 'LBL_DEDUCT_FROM_MARKETING_PRICE',
                                                            ),
                                                    ),
                                            ),
                                        2 =>
                                            array(
                                                'newTab' => true,
                                                'panelDefault' => 'expanded',
                                                'name' => 'PricingReservation',
                                                'label' => 'Reservation',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => 1,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'reservation_stage',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_STAGE',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'reservation_hold_allowed',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_HOLD_ALLOWED',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'reservation_days',
                                                                'label' => 'LBL_DAYS',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'reservation_for',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_FOR_C',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'reservation_special_offer',
                                                                'label' => 'LBL_SPECIAL_OFFER',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'reservation_less_than_days',
                                                                'label' => 'LBL_LESS_THAN_DAYS',
                                                            ),
                                                    ),
                                            ),
                                        3 =>
                                            array(
                                                'newTab' => true,
                                                'panelDefault' => 'expanded',
                                                'name' => 'PricingFinanceClauseTerms',
                                                'label' => 'Finance Clause Terms',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => 1,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'finance_stage',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_FINANCE_STAGE',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'span' => 6,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'finance_days',
                                                                'label' => 'LBL_FINANCE_DAYS',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'finance_for',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_FINANCE_FOR_C',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'finance_special_offer',
                                                                'label' => 'LBL_FINANCE_SPECIAL_OFFER',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'finance_less_than_days',
                                                                'label' => 'LBL_FINANCE_LESS_THAN_DAYS',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'templateMeta' =>
                                    array(
                                        'useTabs' => true,
                                        'tabDefs' =>
                                            array(
                                                'Property Price Breakdown' =>
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
