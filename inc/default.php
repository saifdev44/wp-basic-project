<?php  

function my_theme_setup() {
    //Theme title
    add_theme_support("title-tag");

    //

    //Thumbnail image area
    add_theme_support('post-thumbnails');

    //

    //add image size
    add_image_size( "post_thumbnails", 970, 350, true);
}

add_action('after_setup_theme', 'my_theme_setup');

//Adding excerpt length
function custom_excerpt_length($length){
    return 60;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function add_read_more_link($excerpt) {
    return $excerpt . ' <a href="' . get_permalink() . '">Read More...</a>';
}
add_filter('the_excerpt', 'add_read_more_link');