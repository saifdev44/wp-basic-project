<?php


    // registering menu

    function register_theme_nav_menus(){
        register_nav_menus(array(
            'main_menu' => __('Main Menu','saifahmad'),
            'footer_menu' => __('Footer Menu','saifahmad')
        ));
    }

    add_action('init', 'register_theme_nav_menus');