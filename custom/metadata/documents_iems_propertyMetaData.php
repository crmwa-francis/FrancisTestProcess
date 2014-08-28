<?php
$dictionary["documents_iems_properties"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'documents_iems_properties' =>
                array (
                    'lhs_module' => 'Documents',
                    'lhs_table' => 'documents',
                    'lhs_key' => 'id',
                    'rhs_module' => 'iems_Property',
                    'rhs_table' => 'iems_property',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'documents_iems_properties',
                    'join_key_lhs' => 'document_id',
                    'join_key_rhs' => 'iems_property_id',
                ),
        ),
    'table' => 'documents_iems_properties',
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
                    'name' => 'iems_property_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'documents_iems_propertyspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'documents_iems_property_property_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'iems_property_id',
                            1 => 'document_id',
                        ),
                ),
            2 =>
                array (
                    'name' => 'documents_iems_property_document_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'document_id',
                            1 => 'iems_property_id',
                        ),
                ),
        ),
);