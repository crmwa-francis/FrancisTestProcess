<?php
// created: 2014-01-13 11:49:23
$viewdefs['iems_Project']['base']['view']['subpanel-for-iems_project'] = array(
    'panels' =>
        array(
            0 =>
                array(
                    'name' => 'panel_header',
                    'label' => 'LBL_PANEL_1',
                    'fields' =>
                        array(
                            0 =>
                                array(
                                    'label' => 'LBL_NAME',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'name',
                                ),
                            1 =>
                                array(
                                    'name' => 'primary_address_street_number',
                                    'label' => 'LBL_PRIMARY_ADDRESS_STREET_NUMBER',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            2 =>
                                array(
                                    'name' => 'primary_address_street_name',
                                    'label' => 'LBL_PRIMARY_ADDRESS_STREET_NAME',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array(
                                    'name' => 'primary_address_suburb',
                                    'label' => 'LBL_PRIMARY_ADDRESS_SUBURB',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'build_status',
                                    'label' => 'LBL_BUILD_STATUS',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            5 =>
                                array(
                                    'name' => 'vendor',
                                    'label' => 'LBL_VENDOR',
                                    'enabled' => true,
                                    'id' => 'iems_project.vendor_id',
                                    'link' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                            6 =>
                                array(
                                    'name' => 'marketing_status',
                                    'label' => 'LBL_MARKETING_STATUS',
                                    'enabled' => true,
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
    'type' => 'subpanel-list',
);