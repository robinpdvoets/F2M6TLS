<?php
$categories = get_the_category();
?>


<?php get_header(); ?>

<div class="main ">
    <h1><?php single_cat_title(); ?></h1>
    <hr>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <?php if (has_post_thumbnail()): ?>
            <img class="img-small" src="<?php the_post_thumbnail_url('smallest'); ?>"/>
        <?php endif ?>

            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <br>
            <p class="category-container">Categories</p>

            <?php
            foreach ($categories as $category) {
                echo $category->name . ', ';
            }
            ?>
            <br><br>
            <a class="button" href="<?php the_permalink(); ?>">Lees meer</a>
            
            <hr>
        <?php endwhile;
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
</div>

<?php get_footer(); ?>
