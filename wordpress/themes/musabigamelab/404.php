<?php get_header(); ?>
        <div class="page-content">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/404.jpg" alt="404 Not Found">
            <h3>ページが見つかりません</h3>
            <p>
                お探しのページは、移動または削除された可能性があります。<br>
                サイト内検索よりもう一度目的のページをお探しください。
            </p>

            <div class="search-wrap">
                <form role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
                    <input type="text" value="" name="s" id="search-text" placeholder="">
                </form>
            </div>
        </div>
<?php get_footer(); ?>
