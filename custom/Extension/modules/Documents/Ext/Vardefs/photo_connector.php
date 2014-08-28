<?php
$dictionary['Document']['relationships']['documents_photo'] = array(
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_Photo',
    'rhs_table' => 'iems_photo',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['Document']['fields']['documents_photo'] = array(
    'name' => 'documents_photo',
    'type' => 'link',
    'relationship' => 'documents_photo',
    'source' => 'non-db',
    'vname' => 'LBL_DOCUMENTS_PHOTOS',
);