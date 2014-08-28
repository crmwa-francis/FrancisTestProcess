<?php
$viewdefs['Notes'] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'list' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'panel_header',
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'name',
                                                                'width' => '40%',
                                                                'label' => 'LBL_LIST_SUBJECT',
                                                                'link' => true,
                                                                'enabled' => true,
                                                                'default' => true,
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'contact_name',
                                                                'width' => '20%',
                                                                'label' => 'LBL_LIST_CONTACT',
                                                                'link' => true,
                                                                'id' => 'CONTACT_ID',
                                                                'module' => 'Contacts',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'ACLTag' => 'CONTACT',
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'contact_id',
                                                                    ),
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'parent_name',
                                                                'width' => '20%',
                                                                'label' => 'LBL_LIST_RELATED_TO',
                                                                'dynamic_module' => 'PARENT_TYPE',
                                                                'id' => 'PARENT_ID',
                                                                'link' => true,
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'sortable' => false,
                                                                'ACLTag' => 'PARENT',
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'parent_id',
                                                                        1 => 'parent_type',
                                                                    ),
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'filename',
                                                                'width' => '20%',
                                                                'label' => 'LBL_LIST_FILENAME',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'type' => 'file',
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'file_url',
                                                                        1 => 'id',
                                                                        2 => 'file_mime_type',
                                                                    ),
                                                                'displayParams' =>
                                                                    array(
                                                                        'module' => 'Notes',
                                                                    ),
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'created_by_name',
                                                                'type' => 'relate',
                                                                'label' => 'LBL_CREATED_BY',
                                                                'width' => '10%',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'related_fields' =>
                                                                    array(
                                                                        0 => 'created_by',
                                                                    ),
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'date_entered',
                                                                'label' => 'LBL_DATE_ENTERED',
                                                                'enabled' => true,
                                                                'readonly' => true,
                                                                'width' => '10%',
                                                                'default' => false,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_ASSIGNED_TO',
                                                                'enabled' => true,
                                                                'id' => 'ASSIGNED_USER_ID',
                                                                'link' => true,
                                                                'sortable' => false,
                                                                'width' => '10%',
                                                                'default' => false,
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
