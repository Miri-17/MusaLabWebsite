<?php get_header(); ?>
        <h1 class="page-common-title"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>

        <div class="small-title">
<?php $history_obj = get_page_by_path('/what-is-musabigamelab/history'); ?>
            <h2><?php echo esc_html($history_obj->post_title); ?></h2>
        </div>
        <!-- 歴史ページに書いていることを一部抜粋しています。該当部分をWordpress上で変更する際はご一報ください -->
        <div class="timeline">
            <h2>2022</h2>
            <ul>
                <li>
                    <time class="time">2022年4月6日</time>
                    <p class="desc">武蔵野美術大学の1年生7名が集まり、サークルを設立</p>
                </li>
                <li>
                    <time class="time">2022年4月17日</time>
                    <p class="desc">サークル名が「ムサビゲームラボ」に決定</p>
                </li>
                <li>
                    <time class="time">2022年11月28日</time>
                    <p class="desc">芸術祭で3つのゲームを展示</p>
                </li>
            </ul>
            <h2>2023</h2>
            <ul>
                <li>
                    <time class="time">2023年10月27日</time>
                    <p class="desc">芸術祭で8種類のゲームと2種類のゲーム企画書を展示</p>
                </li>
                <li>
                    <time class="time">2023年12月29日</time>
                    <p class="desc">2022年に制作されたゲーム「育星霜」が、GC甲子園にて審査員賞を受賞</p>
                </li>
            </ul>
            <h2>2024</h2>
            <ul>
                <li>
                    <time class="time">2024年4月1日</time>
                    <p class="desc">公式Webサイトを設立</p>
                </li>
            </ul>
        </div>
        <!-- ページ抜粋ここまで -->
        <div class="btn-gradient">
            <a href="<?php echo esc_url(home_url('history')) ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text">もっと見る</span>
            </a>
        </div>

        <div class="small-title">
<?php $member_obj = get_page_by_path('/what-is-musabigamelab/member'); ?>
            <h2><?php echo esc_html($member_obj->post_title); ?></h2>
        </div>
        <div class="grid">
<?php
$member_pages = get_child_pages(8, $member_obj->ID, 'ASC');
if ($member_pages->have_posts()):
    while ($member_pages->have_posts()): $member_pages->the_post();
?>
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
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
        </div>
        <div class="btn-gradient">
            <a href="<?php echo esc_url(home_url('member')); ?>" class="btn-gradient-border">
                <span class="btn-gradient-border__text">もっと見る</span>
            </a>
        </div>
<?php get_footer(); ?>
