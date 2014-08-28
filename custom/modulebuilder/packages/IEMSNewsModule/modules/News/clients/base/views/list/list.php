<?php
$module_name = 'iems_News';
$viewdefs[$module_name] = 
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
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'published',
                'label' => 'LBL_PUBLISHED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'published_date',
                'label' => 'LBL_PUBLISHED_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
                'readonly' => true,
              ),
              3 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              5 => 
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
              6 => 
              array (
                'name' => 'content',
                'label' => 'LBL_CONTENT',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_FILENAME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
