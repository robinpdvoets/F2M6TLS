<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="navigator ">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigator'
        )
    ); ?>

</div>

<header class="header"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(<?php echo get_header_image(); ?> );">

    <?php get_custom_header(); ?>
    <?php if (has_custom_logo()) ;
    echo get_custom_logo();
    ?>
    <h1>
        <?php bloginfo('name'); ?>
    </h1>

</header>


<div class="container">


