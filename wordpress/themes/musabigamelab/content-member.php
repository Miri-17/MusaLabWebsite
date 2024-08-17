            <div class="member-item">
                <div class="member-link">
                    <div class="member-content">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('member');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default-member.jpg" alt="">
<?php endif; ?>
                        <p class="member-name"><?php the_title(); ?></p>
                        <p class="member-role"><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <a href="<?php echo esc_url(get_permalink()) ?>"></a>
                </div>
            </div>
