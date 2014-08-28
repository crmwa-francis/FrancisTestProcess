<?php
$module_name = 'iems_News';
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
                                                'name' => 'panel_body',
                                                'label' => 'LBL_RECORD_BODY',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => true,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'published',
                                                                'label' => 'LBL_PUBLISHED',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'published_date',
                                                                'label' => 'LBL_PUBLISHED_DATE',
                                                                'readonly' => true
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'filename',
                                                                'comment' => 'File name associated with the note (attachment)',
                                                                'label' => 'LBL_FILENAME',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'content',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_CONTENT',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'date_entered',
                                                                'comment' => 'Date record created',
                                                                'studio' =>
                                                                    array(
                                                                        'portaleditview' => false,
                                                                    ),
                                                                'readonly' => true,
                                                                'label' => 'LBL_DATE_ENTERED',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'date_modified',
                                                                'comment' => 'Date record last modified',
                                                                'studio' =>
                                                                    array(
                                                                        'portaleditview' => false,
                                                                    ),
                                                                'readonly' => true,
                                                                'label' => 'LBL_DATE_MODIFIED',
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
