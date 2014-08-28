<?php
$dictionary['Document']['fields']['subject'] = array(
    'required' => false,
    'name' => 'subject',
    'vname' => 'LBL_SUBJECT',
    'type' => 'enum',
    'massupdate' => '1',
    'default' => 'ground_floor',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'document_subject_name_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary['Document']['fields']['subject']['visibility_grid'] = array(
    'trigger' => 'category_id',
    'values' =>
        array(
            'plans' =>
                array(
                    0 => 'ground_floor',
                    1 => '1st_floor',
                    2 => '2nd_floor',
                    3 => '3d_animation',
                    4 => 'artists_impressions',
                    5 => 'dvd',
                    6 => 'elevation',
                    7 => 'electrical',
                    8 => 'facade',
                    9 => 'floor_plans',
                    10 => 'lot_diagram',
                    11 => 'other',
                    12 => 'perspective',
                    13 => 'photo_library',
                    14 => 'plan_of_subdivision',
                    15 => 'site_plan',
                    16 => 'stage_plan',
                    17 => 'supporting_documents',
                    18 => 'views',
                    19 => 'working_drawings',
                    20 => 'estate_covenants',
                    21 => 'estate_annexures',
                    22 => 'easement',
                    23 => 'nbn'
                ),
            'sales' =>
                array(
                    0 => 'colour_board_sign_off',
                    1 => 'covering_letter',
                    2 => 'demographics_graph',
                    3 => 'depreciation_schedule',
                    4 => 'finishes_schedule',
                    5 => 'news',
                    6 => 'rental_appraisal',
                    7 => 'sales_brochure',
                    8 => 'signing_pack',
                    9 => 'specs_list',
                    10 => 'suburb_research_report',
                    11 => 'valuation',
                ),
            'contracts' =>
                array(
                    0 => 'contract_of_sale_signed_section_32',
                    1 => 'house_contract',
                    2 => 'land_contract',
                    3 => 'other',
                    4 => 'signing_pack',
                ),
            'building_stage_photos' =>
                array(
                    0 => 'start_construction',
                    1 => 'slab',
                    2 => 'plate_high_frame',
                    3 => 'roof_cover',
                    4 => 'lockup',
                    5 => 'fitout',
                    6 => 'practical_completion',
                ),
            'finance_timeline' =>
                array(
                    0 => 'application',
                    1 => 'conditional_approval_docs',
                    2 => 'declined_docs',
                    3 => 'supporting_docs',
                    4 => 'unconditional_approval_docs',
                ),
        ),
);

$dictionary['Document']['fields']['sub_subject'] = array(
    'required' => false,
    'name' => 'sub_subject',
    'vname' => 'LBL_SUB_SUBJECT',
    'type' => 'enum',
    'massupdate' => '1',
    'default' => 'detailed_area_plan',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'document_sub_subject_name_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary['Document']['fields']['sub_subject']['visibility_grid'] = array(
    'trigger' => 'subject',
    'values' => array(
        'estate_annexures' => array('detailed_area_plan'),
        'easement' => array('crossover'),
        'nbn' => array(
            'bushfire_management',
            'transformer_located_next_to_block'
        )
    )
);