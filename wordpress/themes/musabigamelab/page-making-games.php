<?php get_header(); ?>
        <h1 class="page-making-games-title"><?php the_title(); ?></h1>
<?php
$terms = get_terms('start-year');
foreach ($terms as $term):
    include 'content-making-games.php';
endforeach;

get_footer();
?>
