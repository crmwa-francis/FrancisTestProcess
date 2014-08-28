<?php
// created: 2014-01-13 11:31:44
$viewdefs['iems_ProjectContacts']['base']['view']['subpanel-for-iems_listing'] = array(
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
                                    'name' => 'role',
                                    'label' => 'LBL_ROLE',
                                    'enabled' => true,
                                    'default' => true,
                                ),
                            1 =>
                                array(
                                    'name' => 'parent_name',
                                    'label' => 'LBL_FLEX_RELATE',
                                    'enabled' => true,
                                    'id' => 'PARENT_ID',
                                    'link' => true,
                                    'sortable' => false,
                                    'width' => '10%',
                                    'default' => true,
                                ),
                            2 =>
                                array(
                                    'name' => 'phone_mobile',
                                    'label' => 'LBL_PHONE_MOBILE',
                                    'enabled' => true,
                                    'default' => true,
                                    'type' => 'phone',
                                    'readonly' => true
                                ),
                            3 =>
                                array(
                                    'name' => 'phone_office',
                                    'label' => 'LBL_PHONE_OFFICE',
                                    'enabled' => true,
                                    'default' => true,
                                    'type' => 'phone',
                                    'readonly' => true
                                ),
                            4 =>
                                array(
                                    'name' => 'email1',
                                    'label' => 'LBL_EMAIL1',
                                    'enabled' => true,
                                    'default' => true,
                                    'type' => 'email',
                                    'readonly' => true
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