<?php get_header('slider'); ?>
        <div class="page-content">
<?php
$common_obj = get_page_by_path('what-is-musabigamelab');
$post = $common_obj;
setup_postdata($post);
?>
            <h2 class="main-blue"><?php the_title(); ?></h2>
<?php
the_content();
wp_reset_postdata();
?>
        </div>
        <div class="btn-gradient">
            <a href="<?php echo esc_url(home_url('what-is-musabigamelab')) ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text">詳細を見る</span>
            </a>
        </div>

        <div class="page-content">
<?php $game_obj = get_page_by_path('making-games'); ?>
            <h2 class="main-green"><?php echo esc_html($game_obj->post_title); ?></h2>
        </div>
        <div class="post-list">
<?php
$game_pages = get_specific_posts('games', 'start-year', '', 6);
if ($game_pages->have_posts()):
    while ($game_pages->have_posts()): $game_pages->the_post();
?>
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
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
        <div class="btn-gradient">
            <a href="<?php echo esc_url(home_url('making-games')); ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text"><?php echo esc_html($game_obj->post_title); ?>一覧へ</span>
            </a>
        </div>

        <div class="page-content">
<?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
            <h2 class="main-yellow"><?php echo $term_obj->name; ?></h2>
        </div>
        <div class="post-list">
<?php
$news_posts = get_specific_posts('post', 'category', 'news', 6);
if ($news_posts->have_posts()):
    while ($news_posts->have_posts()): $news_posts->the_post();
?>
            <article class="post-item">
                <a href="<?php echo esc_url(get_permalink()); ?>">
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('general-image');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default-news.jpg" alt="" class="wp-post-image">
<?php endif; ?>
                </a>
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                    </h2>
                    <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
<?php the_tags('<div class="tags-links"><ul><li>', '</li><li>', '</li></ul></div>'); ?>
                </header>
            </article>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
        <div class="btn-gradient">
            <a href="<?php echo esc_url(get_term_link($term_obj)); ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text"><?php echo $term_obj->name; ?>一覧へ</span>
            </a>
        </div>

        <div class="page-content">
<?php
$gallery_obj = get_page_by_path('gallery');
$post = $gallery_obj;
setup_postdata($post);
?>
            <h2 class="main-red"><?php the_title(); ?></h2>
            <div class="gallery-excerpt">
<?php
echo get_the_excerpt();
wp_reset_postdata();
?>
            </div>
        </div>
        <div class="btn-gradient">
            <a href="<?php echo esc_url(home_url('gallery')); ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text"><?php echo esc_html($gallery_obj->post_title); ?>へ</span>
            </a>
        </div>
<?php get_footer(); ?>
