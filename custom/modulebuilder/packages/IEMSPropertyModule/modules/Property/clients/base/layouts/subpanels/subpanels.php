<?php
$viewdefs['iems_Property']['base']['layout']['subpanels'] = array(
    'components' => array(
        array(
            'layout' => 'subpanel',
            'label' => 'LBL_PROPERTY_LISTINGS',
            'override_subpanel_list_view' => 'subpanel-for-iems_property',
            'context' => array(
                'link' => 'property_listings',
            ),
        ),
    )
);