<?php
$viewdefs['iems_Deposit']['base']['view']['subpanel-for-project'] = array(
    'type' => 'subpanel-list',
    'panels' =>
        array(
            array(
                'name' => 'panel_header',
                'label' => 'LBL_PANEL_1',
                'fields' =>
                    array(
                        array(
                            'name' => 'deposit_type',
                            'label' => 'LBL_DEPOSIT_TYPE',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array(
                            'name' => 'acceptable_method',
                            'label' => 'LBL_ACCEPTABLE_METHOD',
                            'enabled' => true,
                            'default' => true,
                        ),
                        array (
                            'name' => 'deposit_to_be_held_by',
                            'label' => 'LBL_DEPOSIT_TO_BE_HELD_BY',
                            'enabled' => true,
                            'default' => true,
                        ),
                    ),
            ),
        ),
);