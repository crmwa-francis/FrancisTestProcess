<?php
$dictionary["iems_Property"]["relationships"]["project_projectproperty"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Property',
    'rhs_table' => 'iems_property',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Property']['fields']['project_projectproperty'] = array(
    'name' => 'project_projectproperty',
    'type' => 'link',
    'relationship' => 'project_projectproperty',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PROJECTPROPERTY',
);