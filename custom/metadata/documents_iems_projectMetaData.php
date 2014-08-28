<?php
$dictionary["documents_iems_project"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'documents_iems_project' =>
                array (
                    'lhs_module' => 'Documents',
                    'lhs_table' => 'documents',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_Project',
                    'rhs_table' => 'iems_project',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'documents_iems_project',
                    'join_key_lhs' => 'document_id',
                    'join_key_rhs' => 'iems_project_id',
                ),
        ),
    'table' => 'documents_iems_project',
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
                    'name' => 'document_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'iems_project_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'documents_iems_projectspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'documents_iems_project_project_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'iems_project_id',
                            1 => 'document_id',
                        ),
                ),
            2 =>
                array (
                    'name' => 'documents_iems_project_document_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'document_id',
                            1 => 'iems_project_id',
                        ),
                ),
        ),
);