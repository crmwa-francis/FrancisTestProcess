<?php
$module_name = 'iems_SpecialCondition';
$viewdefs[$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'parent_name',
          1 => 'stage',
        ),
        2 => 
        array (
        ),
        3 => 
        array (
          0 => 'date_approved',
          1 => 'date_expected',
        ),
        4 => 
        array (
          0 => 'approved_by',
        ),
        5 => 
        array (
          0 => 'expired',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
