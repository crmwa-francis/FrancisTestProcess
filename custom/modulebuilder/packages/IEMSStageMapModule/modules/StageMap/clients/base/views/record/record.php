<?php
$module_name = 'iems_StageMap';
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
                                                        1 => array(
                                                            'name' => 'stage',
                                                            'label' => 'LBL_STAGE',
                                                            'required' => true
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
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'map',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_MAP',
                                                                'span' => 6,
                                                                'required' => true,
                                                                'css_class' => 'span6'
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'show_on_web',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_SHOW_ON_WEB',
                                                                'span' => 6,
                                                                'required' => false
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'coordinates',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_COORDINATES',
                                                                'required' => true
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'color',
                                                                'label' => 'LBL_COLOR',
                                                                'placeholder' => 'e.g. 00FF99'
                                                            ),
                                                        4 => 'assigned_user_name',
                                                        5 => 'team_name',
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
