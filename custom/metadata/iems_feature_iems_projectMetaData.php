<?php
$dictionary["iems_feature_iems_project"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'iems_feature_iems_project' =>
                array (
                    'lhs_module' => 'iems_Feature',
                    'lhs_table' => 'iems_feature',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_Project',
                    'rhs_table' => 'iems_project',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_feature_iems_project_c',
                    'join_key_lhs' => 'iems_feature_iems_projectiems_feature_ida',
                    'join_key_rhs' => 'iems_feature_iems_projectiems_project_idb',
                ),
        ),
    'table' => 'iems_feature_iems_project_c',
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
                    'name' => 'iems_feature_iems_projectiems_feature_ida',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'iems_feature_iems_projectiems_project_idb',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_feature_iems_projectspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_feature_iems_project_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'iems_feature_iems_projectiems_feature_ida',
                            1 => 'iems_feature_iems_projectiems_project_idb',
                        ),
                ),
        ),
);