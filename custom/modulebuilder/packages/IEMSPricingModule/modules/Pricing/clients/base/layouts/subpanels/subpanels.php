<?php
$viewdefs['iems_Pricing']['base']['layout']['subpanels'] = array(
    'components' => array(
        array (
            'layout' => 'module-subpanel',
            'label' => 'Promotions',
            'override_subpanel_list_view' => 'subpanel-for-iems_pricing',
            'context' => array (
                'link' => 'promotion-pricing',
            )
        ),
        array (
            'layout' => 'module-subpanel',
            'label' => 'Pricing Display Options',
            'override_subpanel_list_view' => 'subpanel-for-iems_pricing',
            'context' =>
                array (
                    'link' => 'pricing_pricingdisplayoptions',
                ),
        ),
    )
);

