<?php
$module_name = 'iems_OpenHouse';
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
                                                'labelsOnTop' => false,
                                                'placeholders' => true,
                                                'fields' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'name' => 'date_time',
                                                                'label' => 'LBL_DATE_TIME',
                                                            ),
                                                        1 =>
                                                            array (
                                                                'name' => 'rating',
                                                                'label' => 'LBL_RATING',
                                                            ),
                                                        2 =>
                                                            array (
                                                                'name' => 'lead_source',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_LEAD_SOURCE',
                                                            ),
                                                        3 =>
                                                            array (
                                                                'name' => 'email',
                                                                'label' => 'LBL_EMAIL',
                                                            ),
                                                        4 =>
                                                            array (
                                                                'name' => 'mobile',
                                                                'label' => 'LBL_MOBILE',
                                                            ),
                                                        5 =>
                                                            array (
                                                                'name' => 'comment',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_COMMENT',
                                                            ),
                                                        6 => 'assigned_user_name',
                                                        7 => 'team_name',
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
