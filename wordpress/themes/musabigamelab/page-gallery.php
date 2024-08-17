<?php get_header(); ?>
        <h1 class="page-gallery-title"><?php the_title(); ?></h1>

<?php
$gallery_pages = get_child_pages(-1);
if ($gallery_pages->have_posts()):
    while ($gallery_pages->have_posts()): $gallery_pages->the_post();
        get_template_part('content-gallery');
    endwhile;
    wp_reset_postdata();
endif;

get_footer();
?>
