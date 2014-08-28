<?php
$dictionary["iems_StageMap"]["relationships"]["project_stagemap"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_StageMap',
    'rhs_table' => 'iems_stagemap',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_StageMap']['fields']['project_stagemap'] = array(
    'name' => 'project_stagemap',
    'type' => 'link',
    'relationship' => 'project_stagemap',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_STAGEMAP',
);