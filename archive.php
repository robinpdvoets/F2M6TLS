<?php
$categories = get_the_category();
?>


<div class="main ">
    <h1><?php single_cat_title(); ?></h1>
    <hr>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <article
                <?php if (has_post_thumbnail()): ?>style="background-size: 150vh auto;background-repeat: no-repeat;background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(<?php the_post_thumbnail_url('smallest'); ?>"<?php endif;
            ?>>


                <h3><?php the_title(); ?></h3>
                <p>By: <?php the_author() ?></p> <br>
                <p><?php the_date() ?></p>
                <?php the_excerpt(); ?>
                <br>
                <p class="category-container">Categories</p>

                <?php the_category() ?>
                <?php the_tags() ?>
                <br><br>
                <a class="button" href="<?php the_permalink(); ?>">Lees meer</a>
                <br>
            </article>

        <?php endwhile;
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
</div>

<?php get_footer(); ?>
