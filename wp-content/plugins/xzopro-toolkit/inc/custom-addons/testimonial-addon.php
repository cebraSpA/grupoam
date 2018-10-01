<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


vc_map(
    array(
        "name" => __( "Testimonial Slider", "xzopro-toolkit" ),
        "base" => "xzopro_testimonial",
        "category" => __( "Xzopro", "xzopro-toolkit"),
        "icon"  => XZOPRO_ACC_URL.'/assets/images/td-logo.png',
        "params" => array(

            array(
                "type" => "dropdown",
                "heading" => __( "Testimonial Count", "xzopro-toolkit" ),
                "param_name" => "count",
                "admin_label" => true,
                "std" => "-1",
                "value" => array(
                    __('All Testimonials', 'xzopro-toolkit') => '-1',
                    __('2', 'xzopro-toolkit') => '2',
                    __('3', 'xzopro-toolkit') => '3',
                    __('4', 'xzopro-toolkit') => '4',
                    __('5', 'xzopro-toolkit') => '5',
                    __('6', 'xzopro-toolkit') => '6',
                    __('7', 'xzopro-toolkit') => '7',
                    __('8', 'xzopro-toolkit') => '8',
                    __('9', 'xzopro-toolkit') => '9',
                    __('10', 'xzopro-toolkit') => '10'
                ),
                "description" => __( "Select how many testimonial item you want to show.", "xzopro-toolkit" )
            ),

            array(
                "type" => "dropdown",
                "heading" => __( "Category", "xzopro-toolkit" ),
                "param_name" => "category",
                "value" => xzopro_testimonial_cat_list(),
                "admin_label" => true,
                "description" => __( "Show specific category testimonials.", "xzopro-toolkit" ),
            ),


            //Slide Options


            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Enable Autoplay?", "xzopro-toolkit" ),
                "param_name" => "autoplay",
                "std" => "true",
                "admin_label" => true,
                "value" => array(
                    __( 'Yes', 'xzopro-toolkit' ) => 'true',
                    __( 'No', 'xzopro-toolkit' ) => 'false'
                ),
                "group" => __( "Slider Options", 'xzopro-toolkit' ),
                "description" => __( "Enable or disable autoplay.", "xzopro-toolkit" ),
            ),

            array(
                "type" => "dropdown",
                "heading" => __( "Slide Interval", "xzopro-toolkit" ),
                "param_name" => "autoplay_time",
                "admin_label" => true,
                "std" => "4000",
                "value" => array(
                    __( '3 Seconds', 'xzopro-toolkit' ) => '3000',
                    __( '4 Seconds', 'xzopro-toolkit' ) => '4000',
                    __( '5 Seconds', 'xzopro-toolkit' ) => '5000',
                    __( '6 Seconds', 'xzopro-toolkit' ) => '6000',
                    __( '7 Seconds', 'xzopro-toolkit' ) => '7000',
                    __( '8 Seconds', 'xzopro-toolkit' ) => '8000',
                    __( '9 Seconds', 'xzopro-toolkit' ) => '9000',
                    __( '10 Seconds', 'xzopro-toolkit' ) => '10000',
                ),
                "dependency" => array(
                    "element" => "autoplay",
                    "value" => array('true'),
                ),
                "group" => __( "Slider Options", 'xzopro-toolkit' ),
                "description" => __( "Select slide interval time.", "xzopro-toolkit" ),
            ),

            array(
                "type" => "dropdown",
                "heading" => __( "Enable loop?", "xzopro-toolkit" ),
                "param_name" => "loop",
                "admin_label" => true,
                "std" => "true",
                "value" => array(
                    __( 'Yes', 'xzopro-toolkit') => 'true',
                    __( 'No', 'xzopro-toolkit') => 'false'
                ),
                "group" => __( "Slider Options", 'xzopro-toolkit' ),
                "dependency" => array(
                    "element" => "autoplay",
                    "value" => array('true'),
                ),
                "description" => __( "Enable or disable slider loop.", "xzopro-toolkit" ),
            ),

            array(
                "type" => "dropdown",
                "heading" => __( "Show Navigation Arrows On Hover?", "xzopro-toolkit" ),
                "param_name" => "nav",
                "std" => 'false',
                "admin_label" => true,
                "value" => array(
                    __( 'Yes', 'xzopro-toolkit') => 'true',
                    __( 'No', 'xzopro-toolkit') => 'false'
                ),
                "group" => __( "Slider Options", 'xzopro-toolkit' ),
                "description" => __( "Enable or disable navigation arrows.", "xzopro-toolkit" ),
            ),

            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show Navigation Dots.", "xzopro-toolkit" ),
                "param_name" => "dots",
                "admin_label" => true,
                "std" => 'false',
                "value" => array(
                    __( 'Yes', 'xzopro-toolkit') => 'true',
                    __( 'No', 'xzopro-toolkit') => 'false'
                ),
                "group" => __( "Slider Options", 'xzopro-toolkit' ),
                "description" => __( "Enable or disable navigation dots.", "xzopro-toolkit" ),
            ),

            array(
                'type' => 'css_editor',
                'heading' => __( 'Css Box', 'xzopro-toolkit' ),
                'param_name' => 'css',
                'group' => __( 'Design Options', 'xzopro-toolkit' ),
            )
        )
    )
);