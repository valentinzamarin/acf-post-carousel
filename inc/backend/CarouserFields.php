<?php

defined( 'ABSPATH' ) || exit;

class CarouserFields{
    public function register_carousel_fields() {
        if ( function_exists( 'acf_add_local_field_group' ) ) :

            acf_add_local_field_group(
                array(
                    'key'                   => 'post_carousel',
                    'title'                 => 'Карусель изображений',
                    'fields'                => array(
                        array(
                            'key'               => 'field_post_carousel',
                            'label'             => '',
                            'name'              => 'post_carousel',
                            'type'              => 'gallery',
                            'prefix'            => '',
                            'instructions'      => 'Написать [post_gallery] в месте, где нужно вывести изображения',
                            'required'          => 0,
                            'conditional_logic' => 0,
                            'wrapper'           => array(
                                'width' => '',
                                'class' => '',
                                'id'    => '',
                            ),
                            'default_value'     => '',
                            'placeholder'       => '',
                            'prepend'           => '',
                            'append'            => '',
                            'maxlength'         => '',
                            'readonly'          => 0,
                            'disabled'          => 0,
                            'placement'         => 'top',
                        ),
                    ),
                    'location'              => array(
                        array(
                            array(
                                'param'    => 'post_type',
                                'operator' => '==',
                                'value'    => 'post',
                            ),
                        ),
                    ),
                    'menu_order'            => 0,
                    'position'              => 'normal',
                    'style'                 => 'default',
                    'label_placement'       => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen'        => '',
                )
            );

        endif;
    }
}