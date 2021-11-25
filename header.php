<!doctype html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="navigator">
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


</body>
