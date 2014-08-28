<?php
$module_name = 'iems_Property';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'list' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'photo',
                                                                'label' => 'LBL_PHOTO',
                                                                'enabled' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'name',
                                                                'label' => 'LBL_PROPERTY_ID',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                                'width' => '10%',
                                                                'readonly' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'lot_width',
                                                                'label' => 'LBL_LOT_WIDTH',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'lot_length',
                                                                'label' => 'LBL_LOT_LENGTH',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'land_size',
                                                                'label' => 'LBL_LAND_SIZE',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'loading',
                                                                'label' => 'LBL_LOADING',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'total',
                                                                'label' => 'LBL_TOTAL',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'team_name',
                                                                'label' => 'LBL_TEAM',
                                                                'width' => '9%',
                                                                'default' => true,
                                                                'enabled' => true,
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                                                'width' => '9%',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                            ),
                                                        9 =>
                                                            array(
                                                                'label' => 'LBL_DATE_MODIFIED',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'name' => 'date_modified',
                                                                'readonly' => true,
                                                                'width' => '10%',
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'orderBy' =>
                                    array(
                                        'field' => 'date_modified',
                                        'direction' => 'desc',
                                    ),
                            ),
                    ),
            ),
    );
