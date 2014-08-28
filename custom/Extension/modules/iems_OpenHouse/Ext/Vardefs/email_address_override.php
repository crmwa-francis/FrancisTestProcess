<?php
$dictionary['iems_OpenHouse']['fields']['email'] = array(
    'name' => 'email',
    'type' => 'email',
    'query_type' => 'default',
    'source' => 'non-db',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => array(
        'id',
    ),
    'vname' => 'LBL_ANY_EMAIL',
    'studio' => array('visible' => false, 'searchview' => true),
    'duplicate_on_record_copy' => 'always',
    'len' => 100
);

$dictionary['iems_OpenHouse']['fields']['email1'] = array(
    'name' => 'email1',
    'vname' => 'LBL_EMAIL_ADDRESS',
    'type' => 'varchar',
    'function' => array(
        'name' => 'getEmailAddressWidget',
        'returns' => 'html'
    ),
    'source' => 'non-db',
    'link' => 'email_addresses_primary',
    'rname' => 'email_address',
    'group' => 'email1',
    'merge_filter' => 'enabled',
    'studio' => array(
        'editview' => true,
        'editField' => true,
        'searchview' => false,
        'popupsearch' => false
    ), // bug 46859
    'full_text_search' => array('boost' => 3, 'analyzer' => 'whitespace'), //bug 54567
    'duplicate_on_record_copy' => 'always',
);

$dictionary['iems_OpenHouse']['fields']['email2'] = array(
    'name' => 'email2',
    'vname' => 'LBL_OTHER_EMAIL_ADDRESS',
    'type' => 'varchar',
    'function' => array(
        'name' => 'getEmailAddressWidget',
        'returns' => 'html'
    ),
    'source' => 'non-db',
    'group' => 'email2',
    'merge_filter' => 'enabled',
    'studio' => 'false',
    'duplicate_on_record_copy' => 'always',
);

$dictionary['iems_OpenHouse']['fields']['invalid_email'] = array(
    'name' => 'invalid_email',
    'vname' => 'LBL_INVALID_EMAIL',
    'source' => 'non-db',
    'type' => 'bool',
    'link' => 'email_addresses_primary',
    'rname' => 'invalid_email',
    'massupdate' => false,
    'studio' => 'false',
    'duplicate_on_record_copy' => 'always',
);

$dictionary['iems_OpenHouse']['fields']['email_opt_out'] = array(
    'name' => 'email_opt_out',
    'vname' => 'LBL_EMAIL_OPT_OUT',
    'source' => 'non-db',
    'type' => 'bool',
    'link' => 'email_addresses_primary',
    'rname' => 'out_out',
    'massupdate' => false,
    'studio' => 'false',
    'duplicate_on_record_copy' => 'always',
);

$dictionary['iems_OpenHouse']['fields']['email_addresses_primary'] = array(
    'name' => 'email_addresses_primary',
    'type' => 'link',
    'relationship' => 'iems_openhouse_email_addresses_primary',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
    'duplicate_merge' => 'disabled',
);
$dictionary['iems_OpenHouse']['fields']['email_addresses'] = array(
    'name' => 'email_addresses',
    'type' => 'link',
    'relationship' => 'iems_openhouse_email_addresses',
    'source' => 'non-db',
    'vname' => 'LBL_EMAIL_ADDRESSES',
    'reportable' => false,
    'unified_search' => true,
    'rel_fields' => array('primary_address' => array('type' => 'bool')),
);

$dictionary['iems_OpenHouse']['relationships']['iems_openhouse_email_addresses'] = array(
    'lhs_module' => 'iems_OpenHouse',
    'lhs_table' => 'iems_openhouse',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'iems_OpenHouse'

);

$dictionary['iems_OpenHouse']['relationships']['iems_openhouse_email_addresses_primary'] = array(
    'lhs_module' => 'iems_OpenHouse',
    'lhs_table' => 'iems_openhouse',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1'
);