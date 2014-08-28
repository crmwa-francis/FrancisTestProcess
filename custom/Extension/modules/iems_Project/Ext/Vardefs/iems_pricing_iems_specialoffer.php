<?php

$dictionary["iems_Project"]["relationships"]["project_specialoffer"]  = array(
    'lhs_module' => 'iems_Project',
    'lhs_table' => 'iems_project',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_SpecialOffer',
    'rhs_table' => 'iems_specialoffer',
    'rhs_key' => 'iems_project_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary["iems_Project"]["fields"]["project_specialoffer"] = array (
    'name' => 'project_specialoffer',
    'type' => 'link',
    'relationship' => 'project_specialoffer',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_SPECIALOFFER',
);