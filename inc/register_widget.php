<?php

function saifad_register_sidebar() {
    register_sidebar(array(
        'name'          => __('Main Sidebar','saifahmad'), // Sidebar name in admin
        'id'            => 'main-sidebar', // Unique ID
        'description'   => 'This is the main sidebar for the theme.',
        'before_widget' => '<div class="widget %2$s">', // Before each widget
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">', // Widget title style
        'after_title'   => '</h3>',
    ));
    
    for ($i = 1; $i <= 3; $i++) {
        register_sidebar(array(
            'name'          => "Footer Widget Area $i",
            'id'            => "footer-widget-area-$i",
            'description'   => "Widgets for footer column $i.",
            'before_widget' => '<div class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
add_action('widgets_init', 'saifad_register_sidebar');