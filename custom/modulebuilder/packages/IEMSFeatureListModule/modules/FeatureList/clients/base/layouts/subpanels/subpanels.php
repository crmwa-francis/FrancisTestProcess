<?php
$module = 'iems_FeatureList';
$viewdefs[$module]['base']['layout']['subpanels'] = array(
    'components' => array(
        array (
            'layout' => 'subpanel',
            'label' => 'Features',
            'context' =>
                array (
                    'link' => 'iems_featurelist_iems_feature',
                ),
        ),
    )
);