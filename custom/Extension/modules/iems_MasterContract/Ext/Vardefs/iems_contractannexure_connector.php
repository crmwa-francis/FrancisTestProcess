<?php
$dictionary["iems_MasterContract"]["relationships"]["iems_mastercontract_iems_contractannexure"]  = array(
    'lhs_module' => 'iems_MasterContract',
    'lhs_table' => 'iems_mastercontract',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_ContractAnnexure',
    'rhs_table' => 'iems_contractannexure',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_MasterContract']['fields']['iems_mastercontract_iems_contractannexure'] = array(
    'name' => 'iems_mastercontract_iems_contractannexure',
    'type' => 'link',
    'relationship' => 'iems_mastercontract_iems_contractannexure',
    'module' => 'iems_ContractAnnexure',
    'bean_name' => 'iems_contractannexure',
    'source' => 'non-db',
    'vname' => 'LBL_MASTERCONTRACT_CONTRACTANNEXURE',
);