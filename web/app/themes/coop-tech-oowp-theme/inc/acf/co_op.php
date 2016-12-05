<?php

use Outlandish\MappingCoTech\Fields\Fields;

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_coop',
        'title' => 'CoOp',
        'fields' => array (
            array (
                'key' => 'field_583eb5b1febec',
                'label' => 'Logo',
                'name' => Fields::FEATURED_IMAGE,
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_583eb589febea',
                'label' => 'Website URL',
                'name' => Fields::WEBSITE_URL,
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_583eb5f5febed',
                'label' => 'Number of Employees',
                'name' => Fields::EMPLOYEE_COUNT,
                'type' => 'select',
                'required' => 1,
                'choices' => array (
                    '0-3' => '0-3',
                    '4-5' => '4-5',
                    '6-10' => '6-10',
                    '11-15' => '11-15',
                    '16-20' => '16-20',
                    '20-30' => '20-30',
                    '30+' => '30+',
                ),
                'default_value' => '',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_583eb659febee',
                'label' => 'Turnover',
                'name' => Fields::TURNOVER,
                'type' => 'number',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_583eb66bfebef',
                'label' => 'Address',
                'name' => Fields::ADDRESS,
                'type' => 'flexible_content',
                'layouts' => array (
                    array (
                        'label' => 'Address',
                        'name' => Fields::ADDRESS,
                        'display' => 'row',
                        'min' => 0,
                        'max' => 1,
                        'sub_fields' => array (
                            array (
                                'key' => 'field_583eb6aafebf0',
                                'label' => 'Address Line 1',
                                'name' => Fields::ADDRESS_LINE_1,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583eb6b9febf1',
                                'label' => 'Address Line 2',
                                'name' => Fields::ADDRESS_LINE_2,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583eb6bdfebf2',
                                'label' => 'Address Line 3',
                                'name' => Fields::ADDRESS_LINE_3,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583eb6c1febf3',
                                'label' => 'City',
                                'name' => Fields::CITY,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583eb6c6febf4',
                                'label' => 'Country',
                                'name' => Fields::COUNTRY,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583eb6ccfebf5',
                                'label' => 'Postcode',
                                'name' => Fields::POSTCODE,
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'html',
                                'maxlength' => '',
                            ),
                            array (
                                'key' => 'field_583edd92cca6c',
                                'label' => 'location',
                                'name' => Fields::LOCATION,
                                'type' => 'google_map',
                                'center_lat' => '51',
                                'center_lng' => '0',
                                'zoom' => '',
                                'height' => '400',
                            )
                        ),
                    ),
                ),
                'button_label' => 'Add Row',
                'min' => '',
                'max' => '',
            ),
            array (
                'key' => 'field_583eb71346c95',
                'label' => 'Social Media',
                'name' => Fields::SOCIAL_MEDIA,
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_583eb72c46c96',
                        'label' => 'Social Media Type',
                        'name' => Fields::SOCIAL_MEDIA_TYPE,
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array (
                            'facebook' => 'Facebook',
                            'twitter' => 'Twitter',
                            'google+' => 'Google+',
                            'email' => 'E-mail',
                            'github' => 'Github',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array (
                        'key' => 'field_583eb76146c97',
                        'label' => 'Social Media Link',
                        'name' => Fields::SOCIAL_MEDIA_LINK,
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'html',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => ouCoOp::postType(),
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
