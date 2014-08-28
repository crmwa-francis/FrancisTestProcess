<?php
// created: 2014-01-13 14:34:19
$viewdefs['Documents']['base']['view']['subpanel-for-iems_listing'] = array(
    'type' => 'subpanel-list',
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
                                    'name' => 'document_name',
                                    'label' => 'LBL_DOCUMENT_NAME',
                                    'enabled' => true,
                                    'default' => true,
                                    'link' => true
                                ),
                            1 =>
                                array(
                                    'name' => 'description',
                                    'label' => 'LBL_DESCRIPTION',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            2 =>
                                array(
                                    'name' => 'category_id',
                                    'label' => 'LBL_SF_CATEGORY',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            3 =>
                                array(
                                    'name' => 'attach_to_contract',
                                    'label' => 'LBL_ATTACH_TO_CONTRACT',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            4 =>
                                array(
                                    'name' => 'date_entered',
                                    'label' => 'LBL_DATE_ENTERED',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            5 =>
                                array(
                                    'name' => 'person_c',
                                    'label' => 'LBL_PERSON_C',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            6 => array(
                                'name' => 'display_order',
                                'label' => 'LBL_DISPLAY_ORDER',
                                'enabled' => true,
                                'default' => true,
                            ),
                        ),
                ),
        ),
    'rowactions' => array(
        'actions' => array(
            array(
                'type' => 'unlink-action',
                'icon' => 'icon-unlink',
                'label' => 'LBL_UNLINK_BUTTON',
            ),
        ),
    ),
);