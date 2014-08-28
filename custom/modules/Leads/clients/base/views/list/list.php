<?php
$viewdefs['Leads'] =
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
                                                'name' => 'panel_header',
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'full_name',
                                                                'type' => 'fullname',
                                                                'fields' =>
                                                                    array(
                                                                        0 => 'salutation',
                                                                        1 => 'first_name',
                                                                        2 => 'last_name',
                                                                    ),
                                                                'link' => true,
                                                                'css_class' => 'full-name',
                                                                'label' => 'LBL_LIST_NAME',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'width' => '10%',
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'status',
                                                                'label' => 'LBL_LIST_STATUS',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'width' => '10%',
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'account_name',
                                                                'label' => 'LBL_LIST_ACCOUNT_NAME',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'account_id',
                                                                        1 => 'converted',
                                                                    ),
                                                                'width' => '10%',
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'phone_work',
                                                                'label' => 'LBL_LIST_PHONE',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'width' => '10%',
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'email',
                                                                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'width' => '10%',
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_LIST_ASSIGNED_USER',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'width' => '10%',
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'date_entered',
                                                                'label' => 'LBL_DATE_ENTERED',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'readonly' => true,
                                                                'width' => '10%',
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'refered_by',
                                                                'label' => 'LBL_REFERED_BY',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => false,
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'lead_source',
                                                                'label' => 'LBL_LEAD_SOURCE',
                                                                'enabled' => true,
                                                                'width' => '10%',
                                                                'default' => false,
                                                            ),
                                                        9 =>
                                                            array(
                                                                'name' => 'lead_source_description',
                                                                'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
                                                                'enabled' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => false,
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
