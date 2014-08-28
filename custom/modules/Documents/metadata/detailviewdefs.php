<?php
$viewdefs['Documents'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_DOCUMENT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_document_information' => 
      array (
        0 => 
        array (
          0 => 'category_id',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'subject',
            'studio' => 'visible',
            'label' => 'LBL_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'display_in_web_pages',
            'studio' => 'visible',
            'label' => 'LBL_DISPLAY_IN_WEB_PAGES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sub_subject',
            'studio' => 'visible',
            'label' => 'LBL_SUB_SUBJECT',
          ),
          1 => 
          array (
            'name' => 'doc_type',
            'comment' => 'Document type (ex: Google, box.net, IBM SmartCloud)',
            'studio' => 
            array (
              'wirelesseditview' => false,
              'wirelessdetailview' => false,
              'wirelesslistview' => false,
              'wireless_basic_search' => false,
            ),
            'label' => 'LBL_DOC_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'attach_to_contract',
            'studio' => 'visible',
            'label' => 'LBL_ATTACH_TO_CONTRACT',
          ),
          1 => 
          array (
            'name' => 'person_c',
            'label' => 'LBL_PERSON_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'displayParams' => 
            array (
              'link' => 'filename',
              'id' => 'document_revision_id',
            ),
          ),
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'revision',
            'label' => 'LBL_DOC_VERSION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'template_type',
            'label' => 'LBL_DET_TEMPLATE_TYPE',
          ),
          1 => 
          array (
            'name' => 'is_template',
            'label' => 'LBL_DET_IS_TEMPLATE',
          ),
        ),
        7 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'display_order',
            'label' => 'LBL_DISPLAY_ORDER',
          ),
        ),
        8 => 
        array (
          0 => 'exp_date',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
        10 => 
        array (
          0 => 'related_doc_name',
          1 => 'related_doc_rev_number',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAM',
          ),
        ),
      ),
    ),
  ),
);
