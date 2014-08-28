<?php
$viewdefs['Leads']['base']['view']['subpanel-for-project'] = array(
    'type' => 'subpanel-list',
    'panels' =>
        array(
            array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_1',
                'fields' =>
                    array(
                        array(
                            'name' => 'name',
                            'label' => 'LBL_SUBJECT',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'lead_source',
                            'label' => 'LBL_LEAD_SOURCE',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'email1',
                            'label' => 'LBL_EMAIL_ADDRESS',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'phone_mobile',
                            'label' => 'LBL_MOBILE_PHONE',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'lead_source_description',
                            'label' => 'LBL_LEAD_SOURCE_DESCRIPTION',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'assigned_to_name',
                            'label' => 'LBL_ASSIGNED_TO_NAME',
                            'enabled' => true,
                            'default' => true,
                        ),
                    ),
            ),
        ),
);