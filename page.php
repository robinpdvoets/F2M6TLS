<?php get_header(); ?>

    <div class="main ">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>
            <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>
    </div>

<?php get_footer(); ?>