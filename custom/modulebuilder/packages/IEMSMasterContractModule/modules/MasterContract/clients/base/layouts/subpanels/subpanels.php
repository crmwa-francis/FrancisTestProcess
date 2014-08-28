<?php
$viewdefs['iems_MasterContract']['base']['layout']['subpanels'] = array(
    'components' => array(
        array (
            'layout' => 'module-subpanel',
            'label' => 'LBL_MASTERCONTRACT_SPECIALCONDITION',
            'override_subpanel_list_view' => 'subpanel-for-iems_mastercontract',
            'context' => array (
                'link' => 'iems_mastercontract_iems_specialcondition',
            ),
        ),
        array (
            'layout' => 'module-subpanel',
            'label' => 'LBL_MASTERCONTRACT_CONTRACTANNEXURE',
            'override_subpanel_list_view' => 'subpanel-for-iems_mastercontract',
            'context' => array (
                'link' => 'iems_mastercontract_iems_contractannexure',
            ),
        ),
    ),
);