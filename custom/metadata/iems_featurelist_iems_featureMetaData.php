<?php
$dictionary["iems_featurelist_iems_feature"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'iems_featurelist_iems_feature' =>
                array (
                    'lhs_module' => 'iems_Feature',
                    'lhs_table' => 'iems_feature',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_FeatureList',
                    'rhs_table' => 'iems_featurelist',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_featurelist_iems_feature',
                    'join_key_lhs' => 'iems_featurelist_iems_featureiems_featurelist_ida',
                    'join_key_rhs' => 'iems_featurelist_iems_featureiems_feature_idb',
                ),
        ),
    'table' => 'iems_featurelist_iems_feature',
    'fields' =>
        array (
            0 =>
                array (
                    'name' => 'id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            1 =>
                array (
                    'name' => 'date_modified',
                    'type' => 'datetime',
                ),
            2 =>
                array (
                    'name' => 'deleted',
                    'type' => 'bool',
                    'len' => '1',
                    'default' => '0',
                    'required' => true,
                ),
            3 =>
                array (
                    'name' => 'iems_featurelist_iems_featureiems_featurelist_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'iems_featurelist_iems_featureiems_feature_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_featurelist_iems_featurespk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_featurelist_iems_feature_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'iems_featurelist_iems_featureiems_featurelist_ida',
                            1 => 'iems_featurelist_iems_featureiems_feature_idb',
                        ),
                ),
        ),
);