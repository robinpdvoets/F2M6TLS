<?php get_header(); ?>


<?php $header_image = get_field("header_foto");
if ($header_image) {
    echo $header_image;
} else {
    echo 'empty';
} ?>

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