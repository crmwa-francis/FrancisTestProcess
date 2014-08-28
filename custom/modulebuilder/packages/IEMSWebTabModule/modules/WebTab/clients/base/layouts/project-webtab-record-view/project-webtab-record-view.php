<?php
$viewdefs['iems_WebTab']['base']['layout']['project-webtab-record-view'] = array(
    'components' => array(
        array(
            'view' => 'record',
        ),
        array(
            'layout' => array(
                'name' => 'module-togglepanel',
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
                ),
            ),
        ),
    ),
    'type' => 'project-webtab-record-view',
    'span' => 12,
);