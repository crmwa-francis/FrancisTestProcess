<?php
$dictionary["iems_title_iems_project"] = array (
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' =>
        array (
            'iems_title_iems_project' =>
                array (
                    'lhs_module' => 'iems_Project',
                    'lhs_table' => 'iems_project',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_Title',
                    'rhs_table' => 'iems_title',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_title_iems_project',
                    'join_key_lhs' => 'project_id',
                    'join_key_rhs' => 'title_id',
                ),
        ),
    'table' => 'iems_title_iems_project',
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
                    'name' => 'title_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            5 =>
                array (
                    'name' => 'name',
                    'type' => 'varchar',
                    'len' => 36,
                )
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_title_iems_projectspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_title_iems_project_id1',
                    'type' => 'index',
                    'fields' =>
                        array (
                            0 => 'title_id',
                        ),
                ),
            2 =>
                array (
                    'name' => 'iems_title_iems_project_id2',
                    'type' => 'index',
                    'fields' =>
                        array (
                            0 => 'project_id',
                        ),
                ),
        ),
);