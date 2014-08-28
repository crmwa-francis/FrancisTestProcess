<?php
$viewdefs['Documents'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'document_name',
                'label' => 'LBL_LIST_DOCUMENT_NAME',
                'enabled' => true,
                'default' => true,
                'link' => true,
                'type' => 'name',
                'width' => '20%',
              ),
              1 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_LIST_FILENAME',
                'enabled' => true,
                'default' => true,
                'width' => '20%',
              ),
              2 => 
              array (
                'name' => 'doc_type',
                'label' => 'LBL_LIST_DOC_TYPE',
                'enabled' => true,
                'default' => true,
                'width' => '5%',
              ),
              3 => 
              array (
                'name' => 'category_id',
                'label' => 'LBL_LIST_CATEGORY',
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              4 => 
              array (
                'name' => 'subcategory_id',
                'label' => 'LBL_SF_SUBCATEGORY',
                'enabled' => true,
                'width' => '15%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'last_rev_create_date',
                'label' => 'LBL_LAST_REV_CREATE_DATE',
                'enabled' => true,
                'id' => '',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'exp_date',
                'label' => 'LBL_DOC_EXP_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO',
                'enabled' => true,
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAMS',
                'enabled' => true,
                'id' => 'TEAM_ID',
                'link' => true,
                'sortable' => false,
                'width' => '2%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'active_date',
                'label' => 'LBL_LIST_ACTIVE_DATE',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
              12 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'is_template',
                'label' => 'LBL_IS_TEMPLATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'template_type',
                'label' => 'LBL_TEMPLATE_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'revision',
                'label' => 'LBL_DOC_VERSION',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'last_rev_created_name',
                'label' => 'LBL_LAST_REV_CREATOR',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'display_order',
                'label' => 'LBL_DISPLAY_ORDER',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'person_c',
                'label' => 'LBL_PERSON_C',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
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
