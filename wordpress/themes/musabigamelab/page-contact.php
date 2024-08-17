<?php get_header(); ?>
        <h1 class="page-contact-title"><?php the_title(); ?></h1>
        <div class="form-content">
<?php
if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>
        </div>
<?php get_footer(); ?>
