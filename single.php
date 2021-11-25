<div class="container">

    <?php get_header(); ?>

    <div class="main ">

        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()): ?>
            <img class="img-small" src="<?php the_post_thumbnail_url('smallest'); ?>"/>
        <?php endif ?>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>

    </div>

    <?php get_footer(); ?>

</div>