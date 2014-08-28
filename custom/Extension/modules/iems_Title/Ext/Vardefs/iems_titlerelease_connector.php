<?php
$dictionary["iems_Title"]["relationships"]["iems_title_iems_titlerelease"]  = array(
    'lhs_module' => 'iems_Title',
    'lhs_table' => 'iems_title',
    'lhs_key' => 'id',
    'rhs_module' => 'iems_TitleRelease',
    'rhs_table' => 'iems_titlerelease',
    'rhs_key' => 'iems_title_id_c',
    'relationship_type' => 'one-to-many',
);

$dictionary['iems_Title']['fields']['iems_title_iems_titlerelease'] = array(
    'name' => 'iems_title_iems_titlerelease',
    'type' => 'link',
    'relationship' => 'iems_title_iems_titlerelease',
    'source' => 'non-db',
    'vname' => 'LBL_IEMS_TITLE_IEMS_TITLERELEASE',
);