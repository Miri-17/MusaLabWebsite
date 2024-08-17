<?php get_header(); ?>
        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
        <div class="post-list">
<?php
if (have_posts()):
    while(have_posts()): the_post();
        get_template_part('content-archive');
    endwhile;
endif;
?>
        </div>
<?php
page_navigation();

get_footer();
?>
