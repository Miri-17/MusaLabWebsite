<?php
function my_enqueue_scripts() {
    $uri = esc_url(get_template_directory_uri());
    wp_enqueue_style('reset-style', $uri . '/assets/css/destyle.css', []);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css');
    wp_enqueue_style('slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('main-style', $uri . '/assets/css/styles.css', []);
    wp_enqueue_script('jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '', true);
    wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '', true);
    wp_enqueue_script('image-slider-script', $uri . '/assets/js/image-slider.js', array(), '', true);
    wp_enqueue_script('search-script', $uri . '/assets/js/search.js', array(), '', true);
    wp_enqueue_script('main-script', $uri . '/assets/js/script.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function theme_setup() {
    // titleタグの自動的な表示
    add_theme_support('title-tag');
    
    // アイキャッチ画像を利用可能にする
    add_theme_support('post-thumbnails');

    // 抜粋機能を固定ページで使えるようにする
    add_post_type_support('page', 'excerpt');

    // メニューを設定可能にする
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

function my_setcookie() {
    setcookie('cookie_name', 'cookie_value', [
        'expires' => time() + 3600,
        'path' => '/',
        'domain' => 'example.com',
        'secure' => true, // HTTPSのみでクッキーを送信
        'httponly' => true, // JavaScriptからクッキーをアクセス不可にする
        'samesite' => 'Lax' // SameSite 属性を Lax に設定
    ]);
}
add_action('get_headr', 'my_setcookie');

function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args) {
    if ($args->theme_location === 'main-menu') {
        static $count = 0;
        $count++;

        switch($count) {
            case 2:
                $classes['class'] = 'gnav-link main-green';
                break;
            case 3:
                $classes['class'] = 'gnav-link main-yellow';
                break;
            case 4:
                $classes['class'] = 'gnav-link main-red';
                break;
            default:
                $classes['class'] = 'gnav-link main-blue';
                break;
        }
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// bodyにスラッグと同じ名前のクラスを付ける
function my_body_classes($classes) {
   if (is_page()) {
        $page = get_post();
        $classes[] = $page->post_name;
    }
    return $classes;
}
add_filter('body_class', 'my_body_classes');

// get_the_excerpt()で取得する文字列に改行タグを挿入
function apply_excerpt_br($value) {
    return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');

// 「カテゴリー: 」の文をなくす
// タグ検索の場合、「タグが「...」の記事一覧」とする
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = 'タグが「' . single_tag_title( '', false ) . '」の記事一覧';
    }
    return $title;
});

// サイトの一般的な画像サイズ
add_image_size('general-image', 1036, 583, true);
// メンバー画像のサイズ設定
add_image_size('member', 300, 300, true);

// 子ページを取得する
function get_child_pages($number = -1, $specified_id = null, $order_str = 'DESC') {
    if (isset($specified_id)):
        $parent_id = $specified_id;
    else:
        $parent_id = get_the_ID();
    endif;

    $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => $order_str,
        'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query($args);
    return $child_pages;
}

// 特定の記事を取得する
function get_specific_posts($post_type, $taxonomy = null, $term = null, $number = -1) {
    if (!$term):
        $terms_obj = get_terms($taxonomy);
        $term = wp_list_pluck($terms_obj, 'slug');
    endif;

    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => $number,
    );
    $specific_posts = new WP_Query($args);
    return $specific_posts;
}

// ページネーション
function page_navigation($number = 2) {
    the_posts_pagination(
        array(
            'mid_size' => $number, // 現在のページの両端に表示するページ数
            'prev_text' => '<',
            'next_text' => '>',
            'type' => 'list',
        )
    );
}

function get_flexible_excerpt($number, $term_description = null) {
    $value = '';
    if ($term_description) {
        $value = $term_description;
    } else {
        $value = get_the_excerpt();
    }
    $value = wp_trim_words($value, $number, '...');
    return $value;
}
