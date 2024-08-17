
<?php
/*
Template Name: ゲーム詳細
Template Post Type: games
*/
get_header();
?>
        <div class="game-content">
            <h2 class="title"><?php the_title(); ?></h2>
<?php
if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>
        </div>

<?php
the_tags('<div class="tags-links"><ul><li>', '</li><li>', '</li></ul></div>');

get_footer();
?>
