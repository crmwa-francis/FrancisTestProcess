<?php
$dictionary['Contract']['fields']['project_contracts'] = array(
    'name' => 'project_contracts',
    'type' => 'link',
    'relationship' => 'project_contracts',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECT_CONTRACTS',
);

$dictionary['Contract']['relationships']['contract_specialcondition'] = array(
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_SpecialCondition',
    'rhs_table' => 'iems_specialcondition',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['Contract']['fields']['contract_specialcondition'] = array(
    'name' => 'contract_specialcondition',
    'type' => 'link',
    'relationship' => 'contract_specialcondition',
    'source' => 'non-db',
    'vname' => 'LBL_CONTRACT_SPECIALCONDITION',
);

$dictionary['Contract']['relationships']['contract_contractannexure'] = array(
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ContractAnnexure',
    'rhs_table' => 'iems_contractannexure',
    'rhs_key' => 'contract_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['Contract']['fields']['contract_contractannexure'] = array(
    'name' => 'contract_contractannexure',
    'type' => 'link',
    'relationship' => 'contract_contractannexure',
    'source' => 'non-db',
    'vname' => 'LBL_CONTRACT_CONTRACTANNEXURE',
);