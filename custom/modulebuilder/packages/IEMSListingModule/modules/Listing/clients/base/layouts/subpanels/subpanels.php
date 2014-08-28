<?php
$viewdefs['iems_Listing']['base']['layout']['subpanels'] = array(
    'components' => array(
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_LISTING_PROJECTCONTACTS',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array (
                'link' => 'listing_projectcontacts',
            ),
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_LISTING_DOCUMENTS',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array (
                'link' => 'documents_iems_listing',
            ),
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_LISTING_SPECIALCONDITIONS',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array (
                'link' => 'listing_specialcondition',
            ),
        ),
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_CONTRACTS',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array(
                'link' => 'iems_listing_contracts'
            ),
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'Promotions',
            'override_subpanel_list_view' => 'subpanel-for-iems_pricing',
            'context' => array (
                'link' => 'promotion_listing',
            )
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'Options',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array (
                'link' => 'iems_listing_iems_options',
            )
        ),
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_IEMS_LISTING_IEMS_CONTRACTANNEXURE',
            'override_subpanel_list_view' => 'subpanel-for-iems_listing',
            'context' => array (
                'link' => 'iems_listing_iems_contractannexure',
            )
        ),
    )
);