<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <div>
            <input id="nav-input" class="nav-hidden" type="checkbox">
            <label class="btn-menu" for="nav-input">
                <span class="btn-menu-line"></span>
            </label>
            <nav class="gnav" id="gnav">
<?php
wp_nav_menu(
    array(
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'gnav-list',
        'add_li_class' => 'gnav-item',
        'add_a_class' => '',
    )
);
?>
                <div class="header-search-wrap">
                    <form role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
                        <input type="text" value="" name="s" id="header-search-text" placeholder="">
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <div class="header_empty"></div>
    
    <main class="main-contents wrapper">
        <div class="bread_crumb">
<?php
    if (function_exists('bcn_display')):
        bcn_display();
    endif;
?>
        </div>
