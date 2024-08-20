<?php
/*
Template Name: 個別ギャラリー
*/
get_header();
?>
        <div class="page-gallery-title">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="page-content">
<?php
if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>
        </div>
<?php get_footer(); ?>
