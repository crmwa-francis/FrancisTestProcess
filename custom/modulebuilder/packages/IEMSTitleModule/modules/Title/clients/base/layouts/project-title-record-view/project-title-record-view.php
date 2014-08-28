<?php
$viewdefs['iems_Title']['base']['layout']['project-title-record-view'] = array(
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
                        'toggle-view' => 'module-subpanels',
                    ),
                ),
                'availableToggles' => array(
                    array(
                        'name' => 'module-subpanels',
                        'label' => 'LBL_DATA_VIEW',
                    ),
                    array(
                        'name' => 'module-activitystream',
                        'label' => 'LBL_ACTIVITY_STREAM',
                    ),
                ),
                'components' => array(
                    array(
                        'layout' => 'module-subpanels'
                    ),
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
    'type' => 'project-title-record-view',
    'span' => 12,
);