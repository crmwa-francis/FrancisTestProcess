<?php
$viewdefs['Contracts'] =
    array(
        'DetailView' =>
            array(
                'templateMeta' =>
                    array(
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'form' =>
                            array(
                                'buttons' =>
                                    array(
                                        0 => 'EDIT',
                                        1 => 'SHARE',
                                        2 => 'DUPLICATE',
                                        3 => 'DELETE',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_CONTRACT_INFORMATION' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL1' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL2' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_ASSIGNMENT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'includes' => array(
                            array(
                                'file' => 'custom/modules/Contracts/js/revert-expiration-helper.js'
                            ),
                        ),
                    ),
                'panels' =>
                    array(
                        'lbl_contract_information' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'project',
                                                'studio' => 'visible',
                                                'label' => 'LBL_PROJECT',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'date_entered',
                                                'customCode' => '{$fields.date_entered.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.created_by_name.value}',
                                                'label' => 'LBL_DATE_ENTERED',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 => '',
                                        1 =>
                                            array(
                                                'name' => 'listing',
                                                'studio' => 'visible',
                                                'readonly' => true,
                                                'label' => 'LBL_LISTING_ID',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'titles_expected',
                                                'label' => 'LBL_TITLES_EXPECTED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'name',
                                                'label' => 'LBL_CONTRACT_ID',
                                            ),
                                    ),
                                3 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'titles_released',
                                                'label' => 'LBL_TITLE_RELEASED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'sunset_date_extension',
                                                'label' => 'LBL_SUNSET_DATE_EXTENSION',
                                            ),
                                    ),
                                4 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'expected_completion',
                                                'label' => 'LBL_EXPECTED_COMPLETION',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_panel_sale_dates' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'firb_required',
                                                'studio' => 'visible',
                                                'label' => 'LBL_FIRB_REQUIRED',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'firb_approved',
                                                'label' => 'LBL_FIRB_APPROVED',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'property_chattels_included',
                                                'studio' => 'visible',
                                                'label' => 'LBL_PROPERTY_CHATTELS_INCLUDED',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_panel_settlement_details_land' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'sunset_date',
                                                'label' => 'LBL_SUNSET_DATE',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'LBL_PANEL_ASSIGNMENT' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO',
                                            ),
                                        1 => 'team_name',
                                    ),
                            ),
                    ),
            ),
    );
