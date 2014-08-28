<?php
$module_name = 'iems_Project';
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
                                                                'name' => 'name',
                                                                'label' => 'LBL_NAME',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                                'width' => '10%',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'primary_address_street_number',
                                                                'label' => 'LBL_PRIMARY_ADDRESS_STREET_NUMBER',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'primary_address_street_name',
                                                                'label' => 'LBL_PRIMARY_ADDRESS_STREET_NAME',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'primary_address_suburb',
                                                                'label' => 'LBL_PRIMARY_ADDRESS_SUBURB',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'primary_address_state',
                                                                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'marketing_status',
                                                                'label' => 'LBL_MARKETING_STATUS',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => true,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'vendor',
                                                                'label' => 'LBL_VENDOR',
                                                                'enabled' => true,
                                                                'id' => 'VENDOR_ID',
                                                                'link' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => true,
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
