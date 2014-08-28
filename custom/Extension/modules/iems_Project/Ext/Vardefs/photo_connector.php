<?php
$dictionary["iems_Project"]["relationships"]["project_photo"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Photo',
    'rhs_table' => 'iems_photo',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_photo'] = array(
    'name' => 'project_photo',
    'type' => 'link',
    'relationship' => 'project_photo',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PHOTO',
);