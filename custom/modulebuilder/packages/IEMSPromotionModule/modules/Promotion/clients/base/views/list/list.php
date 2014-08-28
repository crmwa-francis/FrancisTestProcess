<?php
$module_name = 'iems_Promotion';
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
                                                                'name' => 'comment',
                                                                'label' => 'LBL_COMMENT',
                                                                'enabled' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'price',
                                                                'label' => 'LBL_PRICE',
                                                                'enabled' => true,
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'currency_id',
                                                                        1 => 'base_rate',
                                                                    ),
                                                                'currency_format' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'for_c',
                                                                'label' => 'LBL_FOR_C',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'date_expected',
                                                                'label' => 'LBL_DATE_EXPECTED',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'date_approved',
                                                                'label' => 'LBL_DATE_APPROVED',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'approved_by',
                                                                'label' => 'LBL_APPROVED_BY',
                                                                'enabled' => true,
                                                                'id' => 'USER_ID_C',
                                                                'link' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'expired',
                                                                'label' => 'LBL_EXPIRED',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'filename',
                                                                'label' => 'LBL_FILENAME',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        8 =>
                                                            array(
                                                                'label' => 'LBL_DATE_MODIFIED',
                                                                'enabled' => true,
                                                                'default' => false,
                                                                'name' => 'date_modified',
                                                                'readonly' => true,
                                                                'width' => '10%',
                                                            ),
                                                        9 =>
                                                            array(
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                                                'width' => '9%',
                                                                'default' => false,
                                                                'enabled' => true,
                                                                'link' => true,
                                                            ),
                                                        10 =>
                                                            array(
                                                                'name' => 'team_name',
                                                                'label' => 'LBL_TEAM',
                                                                'width' => '9%',
                                                                'default' => false,
                                                                'enabled' => true,
                                                            ),
                                                        11 =>
                                                            array(
                                                                'name' => 'name',
                                                                'label' => 'LBL_NAME',
                                                                'default' => false,
                                                                'enabled' => true,
                                                                'link' => true,
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
