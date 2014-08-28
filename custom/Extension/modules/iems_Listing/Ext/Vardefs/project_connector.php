<?php
$dictionary["iems_Listing"]["relationships"]["project_projectlisting"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Listing',
    'rhs_table' => 'iems_listing',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);


$dictionary['iems_Listing']['fields']['project_projectlisting'] = array(
    'name' => 'project_projectlisting',
    'type' => 'link',
    'relationship' => 'project_projectlisting',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_PROJECTLISTING',
);