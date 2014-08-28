<?php
$dictionary["iems_project_leads"] = array (
    'true_relationship_type' => 'many-to-many',
    'relationships' =>
        array (
            'iems_project_leads' =>
                array (
                    'lhs_module' => 'iems_Project',
                    'lhs_table' => 'iems_project',
                    'lhs_key' => 'id',
                    'rhs_module' => 'Leads',
                    'rhs_table' => 'leads',
                    'rhs_key' => 'id',
                    'relationship_type' => 'many-to-many',
                    'join_table' => 'iems_project_leads',
                    'join_key_lhs' => 'iems_project_id',
                    'join_key_rhs' => 'lead_id',
                ),
        ),
    'table' => 'iems_project_leads',
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
                    'name' => 'iems_project_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
            4 =>
                array (
                    'name' => 'lead_id',
                    'type' => 'varchar',
                    'len' => 36,
                ),
        ),
    'indices' =>
        array (
            0 =>
                array (
                    'name' => 'iems_project_leadsspk',
                    'type' => 'primary',
                    'fields' =>
                        array (
                            0 => 'id',
                        ),
                ),
            1 =>
                array (
                    'name' => 'iems_project_leads_iems_project_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'iems_project_id',
                            1 => 'lead_id',
                        ),
                ),
            2 =>
                array (
                    'name' => 'iems_project_leads_lead_id',
                    'type' => 'alternate_key',
                    'fields' =>
                        array (
                            0 => 'lead_id',
                            1 => 'iems_project_id',
                        ),
                ),
        ),
);