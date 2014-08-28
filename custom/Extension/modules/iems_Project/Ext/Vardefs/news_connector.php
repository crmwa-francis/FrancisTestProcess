<?php
$dictionary["iems_Project"]["relationships"]["project_news"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_News',
    'rhs_table' => 'iems_news',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Project']['fields']['project_news'] = array(
    'name' => 'project_news',
    'type' => 'link',
    'relationship' => 'project_news',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_NEWS',
);