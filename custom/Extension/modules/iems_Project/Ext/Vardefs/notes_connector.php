<?php
$dictionary["iems_Project"]["relationships"]["project_notes"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_notes'] = array(
    'name' => 'project_notes',
    'type' => 'link',
    'relationship' => 'project_notes',
    'module' => 'Notes',
    'bean_name' => 'Note',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_NOTES',
);