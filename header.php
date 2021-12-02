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

<div class="header ">
    <h2>Welcome to <br/>
        <?php bloginfo('name'); ?>
    </h2>
</div>


<div class="container">


