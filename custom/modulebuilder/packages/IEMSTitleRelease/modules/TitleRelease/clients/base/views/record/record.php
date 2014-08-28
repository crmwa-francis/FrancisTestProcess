<?php
$module_name = 'iems_TitleRelease';
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
                                                        1 =>
                                                            array(
                                                                'name' => 'favorite',
                                                                'label' => 'LBL_FAVORITE',
                                                                'type' => 'favorite',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                        2 =>
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
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'send_email',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_SEND_EMAIL',
                                                                'placeholder' => 'LBL_SEND_EMAIL',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'stage',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_STAGE',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'deposited_plan',
                                                                'label' => 'LBL_DEPOSITED_PLAN',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'buildings',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_BUILDINGS',
                                                                'placeholder' => 'LBL_BUILDINGS',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'date_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_DATE_C',
                                                                'placeholder' => 'LBL_DATE_C',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'document',
                                                                'comment' => 'The filename of the document attachment',
                                                                'label' => 'LBL_DOCUMENT',
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'approved_by',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_APPROVED_BY',
                                                                'placeholder' => 'LBL_APPROVED_BY',
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'released',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_RELEASED',
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
