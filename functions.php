<?php

function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/layout.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Enable support for post thumbnails and featured images.
 */
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top navigator', 'theme'),
        'bottom-menu' => __('Bottom navigator', 'theme')

    )
);

add_image_size('smallest', 300, 300, true);

