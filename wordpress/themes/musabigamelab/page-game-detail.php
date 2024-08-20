
<?php
/*
Template Name: ゲーム詳細
Template Post Type: games
*/
get_header('slider');
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
            <div class="share-icon">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-via="MusabiGameLab" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>

<?php
the_tags('<div class="tags-links"><ul><li>', '</li><li>', '</li></ul></div>');

get_footer();
?>
