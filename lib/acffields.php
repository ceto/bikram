<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
    'key' => 'group_59543cd5ea508',
    'title' => 'Additional content',
    'fields' => array (
        array (
            'key' => 'field_59543cdf6710d',
            'label' => 'Additional Wysiwyg Content',
            'name' => 'content2',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'tmpl-newcomer.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_59543ff1bf101',
    'title' => 'Additional images',
    'fields' => array (
        array (
            'key' => 'field_59544045ceeca',
            'label' => 'Gallery',
            'name' => 'gallery',
            'type' => 'gallery',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'min' => '',
            'max' => '',
            'insert' => 'append',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'tmpl-studio.php',
            ),
        ),
        array (
            array (
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_57c40ee42e5c0',
    'title' => 'Class details',
    'fields' => array (
        array (
            'key' => 'field_595432f2f34a8',
            'label' => 'Subtitle',
            'name' => 'subtitle',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_59543302319a3',
            'label' => 'Quote',
            'name' => 'quote',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'row',
            'button_label' => 'Sor hozzáadása',
            'sub_fields' => array (
                array (
                    'key' => 'field_5954331b319a4',
                    'label' => 'Quote row',
                    'name' => 'quote_row',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'class',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_57c40f4964453',
    'title' => 'Event Fields',
    'fields' => array (
        array (
            'key' => 'field_57c40f56f5acd',
            'label' => 'Class Type',
            'name' => 'class',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array (
                0 => 'class',
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
        array (
            'key' => 'field_57c4103edf0d4',
            'label' => 'Starts',
            'name' => 'starts',
            'type' => 'date_time_picker',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y-m-d H:i',
            'return_format' => 'Y/m/d H:i',
            'first_day' => 1,
        ),
        array (
            'key' => 'field_58b4a5720ee46',
            'label' => 'Tract',
            'name' => 'tract',
            'type' => 'radio',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array (
                60 => '60 minutes',
                90 => '90 minutes',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 90,
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        array (
            'key' => 'field_57c4108e3c3d5',
            'label' => 'Teacher',
            'name' => 'teacher',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array (
                0 => 'teacher',
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
        array (
            'key' => 'field_57c413c5e85bb',
            'label' => 'Note',
            'name' => 'note',
            'type' => 'text',
            'instructions' => 'Add custom info. Language, guest, surprise gift etc...',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 15,
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'event',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_595a317a8a62e',
    'title' => 'Hero section',
    'fields' => array (
        array (
            'key' => 'field_595a3192eb945',
            'label' => 'Maintext',
            'name' => 'maintext',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => 'Sor hozzáadása',
            'sub_fields' => array (
                array (
                    'key' => 'field_595a31abeb946',
                    'label' => 'Maintext row',
                    'name' => 'mintext_row',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
        array (
            'key' => 'field_595a31cef6acb',
            'label' => 'Lead',
            'name' => 'lead',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array (
            'key' => 'field_595a31d998db9',
            'label' => 'Button text',
            'name' => 'buttontext',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_595a31e8d15a7',
            'label' => 'Button target',
            'name' => 'buttontarget',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array (
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
        array (
            'key' => 'field_595a31f3acc42',
            'label' => 'Background image',
            'name' => 'bgimage',
            'type' => 'image',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium_large',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'tmpl-newcomer.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_57c57ee282145',
    'title' => 'Post Fields',
    'fields' => array (
        array (
            'key' => 'field_57c57eef378f9',
            'label' => 'Additional date information for events',
            'name' => 'hasdate',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Check this and add date if it\'s an event',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array (
            'key' => 'field_580f282d18e56',
            'label' => 'Two or more days event',
            'name' => 'multiday',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array (
                array (
                    array (
                        'field' => 'field_57c57eef378f9',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Check this if event takes two or more days',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array (
            'key' => 'field_57c58164db88c',
            'label' => 'Start date',
            'name' => 'startdate',
            'type' => 'date_time_picker',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array (
                array (
                    array (
                        'field' => 'field_57c57eef378f9',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y/m/d H:i',
            'return_format' => 'Y/m/d H:i',
            'first_day' => 1,
        ),
        array (
            'key' => 'field_57c5819811335',
            'label' => 'End date',
            'name' => 'enddate',
            'type' => 'date_time_picker',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array (
                array (
                    array (
                        'field' => 'field_57c57eef378f9',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'display_format' => 'Y/m/d H:i',
            'return_format' => 'Y/m/d H:i',
            'first_day' => 1,
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_59ce2ffc56f22',
    'title' => 'Prices block',
    'fields' => array (
        array (
            'key' => 'field_59ce30228a4a0',
            'label' => 'Pricetable',
            'name' => 'pricetable',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => 'Add item',
            'sub_fields' => array (
                array (
                    'key' => 'field_59ce30578a4a1',
                    'label' => 'Type',
                    'name' => 'type',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_59ce30698a4a2',
                    'label' => 'Comment',
                    'name' => 'comment',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_59ce309d8a4a3',
                    'label' => 'Full price',
                    'name' => 'price_full',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => 'Ft.',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
                array (
                    'key' => 'field_59ce30c18a4a4',
                    'label' => 'Reduced price',
                    'name' => 'price_reduced',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => 'Ft.',
                    'min' => '',
                    'max' => '',
                    'step' => '',
                ),
            ),
        ),
        array (
            'key' => 'field_59ce322dcab78',
            'label' => 'Prices disclaimer',
            'name' => 'pricedisclaimer',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'tmpl-prices.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

acf_add_local_field_group(array (
    'key' => 'group_57e928903fd33',
    'title' => 'Teacher fields',
    'fields' => array (
        array (
            'key' => 'field_57e928ba57b2a',
            'label' => 'Nick name',
            'name' => 'nick_name',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array (
            'key' => 'field_57e928d73d0fe',
            'label' => 'Avatar',
            'name' => 'avatar',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array (
            'key' => 'field_5883cdc75985c',
            'label' => 'Quote',
            'name' => 'quote',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'row',
            'button_label' => 'Sor hozzáadása',
            'sub_fields' => array (
                array (
                    'key' => 'field_5883cde85985d',
                    'label' => 'Quote row',
                    'name' => 'quote_row',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
        array (
            'key' => 'field_596cd0884443d',
            'label' => 'Classes',
            'name' => 'classes',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array (
                0 => 'class',
            ),
            'taxonomy' => array (
            ),
            'allow_null' => 0,
            'multiple' => 1,
            'return_format' => 'object',
            'ui' => 1,
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'teacher',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

endif;