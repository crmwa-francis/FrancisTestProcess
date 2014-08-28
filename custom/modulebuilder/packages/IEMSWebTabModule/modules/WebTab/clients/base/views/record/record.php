<?php
$module_name = 'iems_WebTab';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'record' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'panel_header',
                                                'label' => 'LBL_RECORD_HEADER',
                                                'header' => true,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'picture',
                                                                'type' => 'avatar',
                                                                'width' => 42,
                                                                'height' => 42,
                                                                'dismiss_label' => true,
                                                                'readonly' => true,
                                                            ),
                                                        1 => 'name',
                                                        2 =>
                                                            array(
                                                                'name' => 'favorite',
                                                                'label' => 'LBL_FAVORITE',
                                                                'type' => 'favorite',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'follow',
                                                                'label' => 'LBL_FOLLOW',
                                                                'type' => 'follow',
                                                                'readonly' => true,
                                                                'dismiss_label' => true,
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'panel_body',
                                                'label' => 'LBL_RECORD_BODY',
                                                'columns' => 2,
                                                'labelsOnTop' => false,
                                                'placeholders' => true,
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'special_offers_banner',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_SPECIAL_OFFERS_BANNER',
                                                                'span' => 12,
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'price_list_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PRICE_LIST_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'css_class' => 'price_list_copy',
                                                                'css_id' => 'price_list_copy',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'estate_map_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_ESTATE_MAP_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),

                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'suburb_snapshot_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_SUBURB_SNAPSHOT_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'house_designs_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_HOUSE_DESIGNS_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'progress_news_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PROGRESS_NEWS_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'builder_information_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_BUILDER_INFORMATION_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'estate_covenant_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_ESTATE_COVENANT_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        8 =>
                                                            array(
                                                                'name' => 'photo_gallery_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PHOTO_GALLERY_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        9 =>
                                                            array(
                                                                'name' => 'amenities_copy',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_AMENITIES_COPY',
                                                                'type' => 'htmleditable_tinymce',
                                                                'width' => '100%',
                                                                'span' => 6,
                                                                'tinyConfig' => array(
                                                                    // Location of TinyMCE script
                                                                    'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                                                                    'height' => '100%',
                                                                    'width' => '100%',
                                                                    // General options
                                                                    'theme' => 'advanced',
                                                                    'skin' => 'sugar7',
                                                                    'plugins' => 'style,paste,inlinepopups',
                                                                    'entity_encoding' => 'raw',
                                                                    'forced_root_block' => false,
                                                                    // Theme options
                                                                    'theme_advanced_buttons1' => "code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull",
                                                                    'theme_advanced_buttons2' => "forecolor,backcolor,separator,fontsizeselect",
                                                                    'theme_advanced_toolbar_location' => "top",
                                                                    'theme_advanced_toolbar_align' => "left",
                                                                    'theme_advanced_statusbar_location' => "none",
                                                                    'theme_advanced_resizing' => false,
                                                                    'schema' => 'html5',
                                                                    'template_external_list_url' => 'lists/template_list.js',
                                                                    'external_link_list_url' => 'lists/link_list.js',
                                                                    'external_image_list_url' => 'lists/image_list.js',
                                                                    'media_external_list_url' => 'lists/media_list.js',
                                                                    'theme_advanced_path' => false,
                                                                    'theme_advanced_source_editor_width' => 500,
                                                                    'theme_advanced_source_editor_height' => 400,
                                                                    'inlinepopups_skin' => 'sugar7modal',
                                                                    //Url options for links
                                                                    'relative_urls' => false,
                                                                    'remove_script_host' => false,
                                                                ),
                                                            ),
                                                        10 =>
                                                            array(
                                                                'span' => 6
                                                            ),
                                                        11 => 'assigned_user_name',
                                                        12 => 'team_name',
                                                    ),
                                            ),
                                    ),
                                'templateMeta' =>
                                    array(
                                        'useTabs' => false,
                                        'tabDefs' =>
                                            array(
                                                'LBL_RECORD_BODY' =>
                                                    array(
                                                        'newTab' => false,
                                                        'panelDefault' => 'expanded',
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
