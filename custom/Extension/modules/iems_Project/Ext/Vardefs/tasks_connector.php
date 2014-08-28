<?php
$dictionary["iems_Project"]["relationships"]["project_tasks"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_tasks'] = array(
    'name' => 'project_tasks',
    'type' => 'link',
    'relationship' => 'project_tasks',
    'module' => 'Tasks',
    'bean_name' => 'Task',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_TASK',
);