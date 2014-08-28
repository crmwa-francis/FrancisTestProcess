<?php
$dictionary["iems_MasterContract"]["relationships"]["iems_mastercontract_iems_specialcondition"]  = array(
    'lhs_module' => 'iems_MasterContract',
    'lhs_table' => 'iems_mastercontract',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_SpecialCondition',
    'rhs_table' => 'iems_specialcondition',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_MasterContract']['fields']['iems_mastercontract_iems_specialcondition'] = array(
    'name' => 'iems_mastercontract_iems_specialcondition',
    'type' => 'link',
    'relationship' => 'iems_mastercontract_iems_specialcondition',
    'module' => 'iems_SpecialCondition',
    'bean_name' => 'iems_specialcondition',
    'source' => 'non-db',
    'vname' => 'LBL_MASTERCONTRACT_SPECIALCONDITION',
);