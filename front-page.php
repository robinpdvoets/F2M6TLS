<?php get_header(); ?>

<header class="header"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(<?php echo get_header_image(); ?> );">

    <?php get_custom_header(); ?>
    <?php if (has_custom_logo()) ;
    echo get_custom_logo();
    ?>

    <button><a href="<?php the_permalink(); ?>/winkel/">Bekijk hier alle pakketten</a></button>
</header>



