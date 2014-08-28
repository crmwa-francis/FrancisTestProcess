<?php
$dictionary["iems_project_subprojects"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'iems_project_subprojects' =>
    array (
      'lhs_module' => 'iems_Project',
      'lhs_table' => 'iems_project',
      'lhs_key' => 'id',
      'rhs_module' => 'iems_Project',
      'rhs_table' => 'iems_project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'iems_project_subprojects',
      'join_key_lhs' => 'iems_project_subprojects_mainproject_id',
      'join_key_rhs' => 'iems_project_subprojects_subproject_id',
    ),
  ),
  'table' => 'iems_project_subprojects',
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
      'name' => 'iems_project_subprojects_mainproject_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'iems_project_subprojects_subproject_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'iems_project_subprojects_spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'iems_project_subprojects_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'iems_project_subprojects_mainproject_id',
      ),
    ),
    2 => 
    array (
      'name' => 'iems_project_subprojects_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'iems_project_subprojects_subproject_id',
      ),
    ),
  ),
);