<?php
function saifad_css_register_customization($wp_customize){

    //To make the logo changing dynamic 
    $wp_customize->add_section('saifad_header_area', array(
        'title' => __('Header Area', 'saifahmad'),
        'description' => "If you want to change your logo then do it here."
    ));

    $wp_customize->add_setting('saifad_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'saifad_logo', array(
        'label' => 'Logo Upload',
        'description' => "If you want to change your logo then do it here.",
        'setting' => 'saifad_logo',
        'section' => 'saifad_header_area'
    )));

    //
    //

    //to make top nav position dynamic
    $wp_customize->add_section('saifad_menu_option', array(
        'title' => __('Menu Position Option', 'saifahmad'),
        'description' => "You can change your menu position here"
    ));

    $wp_customize->add_setting('saifad_menu_position', array(
        "default" => "right_menu"
    ));

    $wp_customize->add_control('saifad_menu_position', array(
        'label' => 'Menu Position',
        'description' => "Select Your Menu Position",
        'section' => "saifad_menu_option",
        'setting' => "saifad_menu_position",
        'type' => "radio",
        'choices' => array(
            "left_menu" => "Left Menu",
            "right_menu" => "Right Menu",
            "center_menu" => "Center Menu"
        )
    ));

    //
    //

    //Footer options

    $wp_customize->add_section('saifad_footer_option', array(
        'title' => __('Footer Option', 'saifahmad'),
        'description' => 'You can add copyright here'
    ));
    
    $wp_customize->add_setting('saifad_copyright_section', array(
        'default' => '&copy; Copyright 2024 | Saif Ahmad'
    ));

    $wp_customize->add_control('saifad_copyright_section', array(
        'label' => 'Enter Copyright Text',
        'description' => "If you want then Enter Copyright Text here",
        'section' => "saifad_footer_option",
        'setting' => "saifad_copyright_section",
    ));

}

add_action('customize_register','saifad_css_register_customization');