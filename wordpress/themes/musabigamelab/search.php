<?php get_header(); ?>
        <h1 class="page-search-title">サイト内検索結果</h1>

        <div class="search-wrap">
            <form role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="search-text" placeholder="">
            </form>
        </div>

<?php if (get_search_query()): ?>
        <h3 class="search-title">「<?php the_search_query(); ?>」の検索結果</h3>
        <p>全<?php echo $wp_query->found_posts; ?>件</p>
<?php endif; ?>

        <div class="search-list">
<?php
if (have_posts() && get_search_query()):
    while (have_posts()): the_post();
?>
            <div class="search-link">
                <div class="search-content">
                    <figure>
<?php
if (has_post_thumbnail()):
    the_post_thumbnail('general-image');
else:
?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tmb-default.jpg" alt="">
<?php endif; ?>
                    </figure>
                    <div class="search-item-right">
                        <p class="title"><?php the_title(); ?></p>
                        <p class="text"><?php echo get_flexible_excerpt(45); ?></p>
                    </div>
                </div>
                <a href="<?php the_permalink(); ?>"></a>
            </div>
<?php endwhile; ?>
        </div>
<?php
page_navigation();

elseif (!get_search_query() && get_search_query() != '0'):
?>
        <p>検索ワードが入力されていません</p>
<?php else: ?>
        <p>該当する記事は見つかりませんでした。</p>
<?php
endif;

get_footer();
?>
