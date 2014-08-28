<?php
$viewdefs['iems_Listing']['base']['view']['subpanel-for-iems_project'] = array(
    'panels' =>
        array(
            0 =>
                array(
                    'name' => 'panel_header',
                    'label' => 'LBL_PANEL_1',
                    'fields' =>
                        array(
                            0 => array(
                                'name' => 'name',
                                'label' => 'LBL_LISTING_ID',
                                'enabled' => false,
                                'link' => true,
                                'readonly' => true,
                                'sortable' => true,
                                'default' => true
                            ),
                            1 =>
                                array(
                                    'name' => 'property',
                                    'label' => 'LBL_PROPERTY',
                                    'enabled' => true,
                                    'id' => 'IEMS_PROPERTY_ID_C',
                                    'link' => true,
                                    'sortable' => false,
                                    'default' => true,
                                ),
                            2 =>
                                array(
                                    'name' => 'primary_address_lot_number',
                                    'label' => 'LBL_PRIMARY_ADDRESS_LOT_NUMBER',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array(
                                    'name' => 'primary_address_street_number',
                                    'label' => 'LBL_PRIMARY_ADDRESS_STREET_NUMBER',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'primary_address_street_name',
                                    'label' => 'LBL_PRIMARY_ADDRESS_STREETNAME',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            5 =>
                                array(
                                    'name' => 'primary_address_suburb',
                                    'label' => 'LBL_PRIMARY_ADDRESS_SUBURB',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            6 =>
                                array(
                                    'name' => 'primary_address_state',
                                    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            7 =>
                                array (
                                    'name' => 'estate',
                                    'label' => 'LBL_ESTATE',
                                    'enabled' => true,
                                    'id' => 'IEMS_PROJECT_ID_C',
                                    'link' => true,
                                    'sortable' => false,
                                    'width' => '10%',
                                    'default' => true,
                                    'readonly' => true,
                                ),
                            8 =>
                                array(
                                    'name' => 'property_status',
                                    'label' => 'LBL_PROPERTY_STATUS',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            9 =>
                                array(
                                    'name' => 'date_entered',
                                    'label' => 'LBL_DATE_ENTERED',
                                    'enabled' => true,
                                    'readonly' => true,
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