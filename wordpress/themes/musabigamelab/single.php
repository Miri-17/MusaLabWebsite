<?php
get_header();

if (have_posts()):
    while (have_posts()): the_post();
        get_template_part('content-single');
    endwhile;
else:
?>
        <p>記事はありません。</p>
<?php
endif;

get_footer();
?>
