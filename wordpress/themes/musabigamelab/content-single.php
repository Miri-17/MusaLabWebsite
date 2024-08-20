        <div class="post-list">
            <article class="post-item">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('general-image');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default-news.jpg" alt="" class="wp-post-image">
<?php endif; ?>
                <header class="post-header">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?></time>
                </header>
                <div class="post-content wrapper">
<?php the_content(); ?>
                </div>

                <div class="author-name">
                    <p>edited by <b><?php the_author(); ?></b></p>
                </div>
                
                <footer class="post-footer wrapper">
<?php the_tags('<div class="tags-links"><ul><li>', '</li><li>', '</li></ul></div>'); ?>
                    <div class="share-icon">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-via="MusabiGameLab" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </footer>
            </article>
        </div>
        
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ($prev_post || $next_post):
?>
        <div class="more-news">
            <div class="next">
<?php if ($next_post): ?>
                <a class="another-link" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">←次の記事へ</a>
<?php endif; ?>
            </div>
            <div class="prev">
<?php if ($prev_post): ?>
                <a class="another-link" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">前の記事へ→</a>
<?php endif; ?>
            </div>
        </div>
<?php endif; ?>
