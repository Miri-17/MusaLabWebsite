            <article class="post-item">
                <a href="<?php echo esc_url(get_permalink()); ?>">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('general-image');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default.jpg" alt="" class="wp-post-image">
<?php endif; ?>
                </a>
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="post-description">
<?php echo get_flexible_excerpt(48); ?>
                    </p>
<?php the_tags('<div class="tags-links"><ul><li>', '</li><li>', '</li></ul></div>'); ?>
                </header>
            </article>
