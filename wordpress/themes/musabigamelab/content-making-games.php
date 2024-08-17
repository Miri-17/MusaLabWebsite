        <div class="article-card">
            <div class="image">
<?php
$image_id = get_field('games_image', $term->taxonomy. '_'. $term->term_id);
echo wp_get_attachment_image($image_id, 'general-image');
?>
            </div>
            <div class="text">
                <h2 class="title"><?php echo $term->name; ?></h2>
                <p>
<?php
echo get_flexible_excerpt(31, $term->description);
?>
                </p>
                <div class="read-more"><p>もっと見る！→</p></div>
                <a href="<?php echo esc_url(get_term_link($term)); ?>"></a>
            </div>
        </div>
