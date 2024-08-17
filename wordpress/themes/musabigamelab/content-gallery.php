        <div class="article-card">
            <div class="image">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('general-image');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default.jpg" alt="">
<?php endif; ?>
            </div>
            <div class="text">
                <h2 class="title"><?php the_title(); ?></h2>
                <p><?php echo get_flexible_excerpt(31); ?></p>
                <div class="read-more"><p>もっと見る！→</p></div>
                <a href="<?php echo esc_url(get_permalink()) ?>"></a>
            </div>
        </div>
