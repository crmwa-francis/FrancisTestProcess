<?php
$dictionary["iems_PropertyCoordinates"]["relationships"]["stagemap_propertycoordinates"]  = array(
    'lhs_module' => 'iems_StageMap',
    'lhs_table' => 'iems_stagemap',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_PropertyCoordinates',
    'rhs_table' => 'iems_propertycoordinates',
    'rhs_key' => 'iems_stagemap_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_PropertyCoordinates']['fields']['stagemap_propertycoordinates'] = array(
    'name' => 'stagemap_propertycoordinates',
    'type' => 'link',
    'relationship' => 'stagemap_propertycoordinates',
    'source' => 'non-db',
    'vname' => 'LBL_STAGEMAP_PROPERTYCOORDINATES',
);