<?php
$dictionary["iems_Project"]["relationships"]["project_projectcontacts"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ProjectContacts',
    'rhs_table' => 'iems_projectcontacts',
    'rhs_key' => 'iems_parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_projectcontacts'] = array(
    'name' => 'project_projectcontacts',
    'type' => 'link',
    'relationship' => 'project_projectcontacts',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PROJECTCONTACTS',
);