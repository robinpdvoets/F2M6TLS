<?php

function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/layout.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('post-thumbnails');