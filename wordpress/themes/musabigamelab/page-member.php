<?php get_header(); ?>
        <h1 class="page-common-title"><?php the_title(); ?></h1>

        <div class="grid">
<?php
$member_pages = get_child_pages(-1, null, 'ASC');
if ($member_pages->have_posts()):
    while ($member_pages->have_posts()): $member_pages->the_post();
        get_template_part('content-member');
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
        
<?php get_footer(); ?>
