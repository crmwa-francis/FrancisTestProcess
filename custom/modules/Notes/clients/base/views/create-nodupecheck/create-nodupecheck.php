<?php
$viewdefs['Notes']['base']['view']['create-nodupecheck'] = array(
    'template' => 'record',
    'buttons' => array(
        array(
            'name'      => 'cancel_button',
            'type'      => 'button',
            'label'     => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
        ),
        array(
            'name'    => 'save_button',
            'type'    => 'button',
            'label'   => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
