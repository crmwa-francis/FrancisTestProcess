<?php
$viewdefs['iems_Property']['base']['layout']['listing-property-record-view'] = array(
    'components' => array(
        array(
            'view' => 'record',
        ),
        array(
            'layout' => array(
                'name' => 'module-togglepanel',
                'last_state' => array(
                    'id' => 'record-filterpanel',
                    'defaults' => array(
                        'toggle-view' => 'module-activitystream',
                    ),
                ),
                'availableToggles' => array(
                    array(
                        'name' => 'module-activitystream',
                        'label' => 'LBL_ACTIVITY_STREAM',
                    ),
                ),
                'components' => array(
                    array(
                        'layout' => 'module-activitystream',
                        'context' =>array(
                            'module' => 'Activities',
                        ),
                    ),
                )
            ),
        )
    ),
    'type' => 'listing-property-record-view',
    'span' => 12,
);