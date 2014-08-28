<?php
$dictionary["iems_Project"]["relationships"]["project_specialcondition"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_SpecialCondition',
    'rhs_table' => 'iems_specialcondition',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_specialcondition'] = array(
    'name' => 'project_specialcondition',
    'type' => 'link',
    'relationship' => 'project_specialcondition',
    'module' => 'iems_SpecialCondition',
    'bean_name' => 'iems_SpecialCondition',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_SPECIALCONDITION',
);