<?php
$module_name = 'iems_Title';
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
                                                'name' => 'TitleTitles',
                                                'label' => 'Titles',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
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
                                                                'name' => 'diagram',
                                                                'label' => 'LBL_DIAGRAM',
                                                            ),
                                                        2 =>
                                                            array (
                                                                'name' => 'survey',
                                                                'label' => 'LBL_SURVEY',
                                                            ),
                                                        3 =>
                                                            array (
                                                                'name' => 'local_coucil',
                                                                'label' => 'LBL_LOCAL_COUCIL',
                                                            ),
                                                        4 =>
                                                            array (
                                                                'name' => 'strata',
                                                                'label' => 'LBL_STRATA',
                                                            ),
                                                        5 =>
                                                            array (
                                                                'name' => 'zoning_1',
                                                                'label' => 'LBL_ZONING_1',
                                                            ),
                                                        6 =>
                                                            array (
                                                                'name' => 'folio',
                                                                'label' => 'LBL_FOLIO',
                                                            ),
                                                        7 =>
                                                            array (
                                                                'name' => 'zoning_2',
                                                                'label' => 'LBL_ZONING_2',
                                                            ),
                                                        8 =>
                                                            array (
                                                                'name' => 'volume',
                                                                'label' => 'LBL_VOLUME',
                                                            ),
                                                        9 =>
                                                            array (
                                                                'name' => 'water_authority',
                                                                'label' => 'LBL_WATER_AUTHORITY',
                                                            ),
                                                        10 =>
                                                            array (
                                                                'name' => 'plan_c',
                                                                'label' => 'LBL_PLAN_C',
                                                                'span' => 6,
                                                            ),
                                                        11 =>
                                                            array (
                                                                'span' => 6,
                                                            ),
                                                    ),
                                            ),
                                        2 =>
                                            array (
                                                'newTab' => true,
                                                'panelDefault' => 'expanded',
                                                'name' => 'TitleRates',
                                                'label' => 'Rates',
                                                'columns' => 2,
                                                'labelsOnTop' => 1,
                                                'placeholders' => 1,
                                                'fields' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'name' => 'liability_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_LIABILITY_PA',
                                                            ),
                                                        1 =>
                                                            array (
                                                                'name' => 'liability_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_LIABILITY_PQ',
                                                            ),
                                                        2 =>
                                                            array (
                                                                'name' => 'water_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_WATER_PA',
                                                            ),
                                                        3 =>
                                                            array (
                                                                'name' => 'water_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_WATER_PQ',
                                                            ),
                                                        4 =>
                                                            array (
                                                                'name' => 'council_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_COUNCIL_PA',
                                                            ),
                                                        5 =>
                                                            array (
                                                                'name' => 'council_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_COUNCIL_PQ',
                                                            ),
                                                        6 =>
                                                            array (
                                                                'name' => 'body_admin_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_BODY_ADMIN_PA',
                                                            ),
                                                        7 =>
                                                            array (
                                                                'name' => 'body_admin_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_BODY_ADMIN_PQ',
                                                            ),
                                                        8 =>
                                                            array (
                                                                'name' => 'body_sinking_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_BODY_SINKING_PA',
                                                            ),
                                                        9 =>
                                                            array (
                                                                'name' => 'body_sinking_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_BODY_SINKING_PQ',
                                                            ),
                                                        10 =>
                                                            array (
                                                                'name' => 'outgoing_pa',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_OUTGOING_PA',
                                                            ),
                                                        11 =>
                                                            array (
                                                                'name' => 'outgoing_pq',
                                                                'related_fields' =>
                                                                    array (
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'label' => 'LBL_OUTGOING_PQ',
                                                            ),
                                                        12 =>
                                                            array (
                                                                'name' => 'last_updated',
                                                                'label' => 'LBL_LAST_UPDATED',
                                                            ),
                                                        13 => 'assigned_user_name',
                                                        14 =>
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
                                                        15 =>
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
                                                        'panelDefault' => 'collapsed',
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
