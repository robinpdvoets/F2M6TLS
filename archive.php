<div class="container">
    <?php get_header(); ?>

    <div class="main ">
        <h1><?php single_cat_title(); ?></h1>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Lees meer</a>

            <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>
    </div>

    <?php get_footer(); ?>
</div>