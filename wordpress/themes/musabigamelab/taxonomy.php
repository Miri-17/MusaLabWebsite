<?php get_header(); ?>
        <h1 class="page-making-games-title"><?php single_cat_title(); ?></h1>
        <div class="post-list">
<?php
$term = get_specific_posts('games', 'start-year', $term);
if ($term->have_posts()):
    while ($term->have_posts()): $term->the_post();
        get_template_part('content-tax');
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
<?php get_footer(); ?>
