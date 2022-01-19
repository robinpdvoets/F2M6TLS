<?php


function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/assets/css/layout.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');

    wp_enqueue_script('jquery');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * Enable support for post thumbnails and featured images.
 */
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);


add_theme_support('automatic-feed-links');
add_theme_support('menus');

//custom header
function custom_header_setup()
{
    $args = array(
        'default-image' => get_template_directory_uri() . '/img/Lake.jpeg',
        'width' => 1000,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $args);

    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'custom_header_setup');

register_nav_menus(
    array(
        'top-menu' => __('Top navigator', 'theme'),
        'bottom-menu' => __('Bottom navigator', 'theme')

    )
);

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id' => 'footer',
            'name' => __('Footer'),
            'description' => __('Footer sidebar'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}



