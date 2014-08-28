<?php
$dictionary["iems_featurelist_iems_project"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'iems_featurelist_iems_project' =>
                array (
                    'lhs_module' => 'iems_Project',
                    'lhs_table' => 'iems_project',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_FeatureList',
                    'rhs_table' => 'iems_featurelist',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_featurelist_iems_project',
                    'join_key_lhs' => 'project_id',
                    'join_key_rhs' => 'featurelist_id',
                ),
        ),
    'table' => 'iems_featurelist_iems_project',
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
                    'name' => 'project_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'featurelist_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_featurelist_iems_projectspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_featurelist_iems_project_alt',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'project_id',
                            1 => 'featurelist_id',
                        ),
                ),
        ),
);