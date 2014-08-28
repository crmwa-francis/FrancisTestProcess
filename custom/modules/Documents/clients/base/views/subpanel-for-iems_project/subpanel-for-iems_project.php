<?php
//description
//category
//attach to contract
//security - paki explain
//date
//time - paki explain
//person - paki explain

$viewdefs['Documents']['base']['view']['subpanel-for-iems_project'] = array(
    'type' => 'subpanel-list',
    'panels' =>
        array(
            array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_1',
                'fields' =>
                    array(
                        array(
                            'name' => 'document_name',
                            'label' => 'LBL_DOCUMENT_NAME',
                            'enabled' => true,
                            'default' => true,
                            'link' => true
                        ),
                        array(
                            'name' => 'description',
                            'label' => 'LBL_DESCRIPTION',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'category_id',
                            'label' => 'LBL_SF_CATEGORY',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'date_entered',
                            'label' => 'LBL_DATE_ENTERED',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'attach_to_contract',
                            'label' => 'LBL_ATTACH_TO_CONTRACT',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'person_c',
                            'label' => 'LBL_PERSON_C',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
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
