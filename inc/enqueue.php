<?php

    // CSS and JS file calling 
    // the first word of the name of this function should be your project's unique identity
    
function saifad_css_js_file_calling(){
    wp_enqueue_style("saifad-style", get_stylesheet_uri());

    //registering bootstrap and custom.css
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', "all");
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', "all");

    //enqueuing bootstrap.css and custom.css
    wp_enqueue_style("bootstrap");
    wp_enqueue_style("custom");
    
    //
    //

    // enqueuing jquery.js, bootstrap.js and main.js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.3', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.3.3', true);

    //
    //

    // adding google fonts
    wp_enqueue_style('oswald_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto&display=swap', false);
}

add_action( "wp_enqueue_scripts", "saifad_css_js_file_calling" );