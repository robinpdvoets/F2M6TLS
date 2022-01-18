<?php
$categories = get_the_category();
?>
<?php get_header(); ?>

    <div class="main ">

        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()): ?>
            <img class="img-small" src="<?php the_post_thumbnail_url('smallest'); ?>"/>
        <?php endif ?>

        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>


                <br>
                <p class="category-container">Categories</p>
                <?php
                foreach ($categories as $category) {
                    echo $category->name . ', ';

                }
                ?>
                <? php ?>
            <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria . ', 'textdomain');
        endif; ?>
        <hr>
        <p>Nieuwste blog's</p>
        <br>
        <?php wp_get_archives('title_li=&type=postbypost&limit=3'); ?>


    </div>

<?php get_footer(); ?>