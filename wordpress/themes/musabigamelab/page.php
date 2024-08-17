<?php get_header(); ?>
        <div class="member-page">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <div id="member-image">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('member');
else:
?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default-member.jpg" alt="" class="wp-post-image">
<?php endif; ?>
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
        </div>
<?php get_footer(); ?>
