<?php
$viewdefs['iems_SpecialCondition']['base']['view']['subpanel-for-iems_project'] = array (
    'panels' =>
        array (
            0 =>
                array (
                    'name' => 'panel_header',
                    'label' => 'LBL_PANEL_1',
                    'fields' =>
                        array (
                            0 =>
                                array (
                                    'name' => 'name',
                                    'label' => 'LBL_NAME',
                                    'enabled' => true,
                                    'sortable' => false,
                                    'default' => true,
                                    'link' => true,
                                    'type' => 'varchar',
                                ),
                            1 =>
                                array (
                                    'label' => 'LBL_EXTRA_INFO',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'extra_info',
                                ),
                            2 =>
                                array (
                                    'name' => 'stage',
                                    'label' => 'LBL_STAGE',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array (
                                    'name' => 'price_c',
                                    'label' => 'LBL_PRICE_C',
                                    'enabled' => true,
                                    'currency_format' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array (
                                    'label' => 'LBL_DATE_EXPECTED',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'date_expected',
                                ),
                            5 =>
                                array (
                                    'label' => 'LBL_DATE_APPROVED',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'date_approved',
                                ),
                            6 =>
                                array (
                                    'label' => 'LBL_APPROVED_BY',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'approved_by',
                                ),
                            7 =>
                                array (
                                    'name' => 'expired',
                                    'label' => 'LBL_EXPIRED',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            8 =>
                                array (
                                    'name' => 'filename',
                                    'label' => 'LBL_FILENAME',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                        ),
                ),
        ),
    'orderBy' =>
        array (
            'field' => 'date_modified',
            'direction' => 'desc',
        ),
    'type' => 'subpanel-list',
);