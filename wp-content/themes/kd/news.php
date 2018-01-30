<?php /* Template Name: News */ ?>

<?php get_header(); ?>


<?php

/**
 * Obejście naprawiające paginację.
 */

$postsPerPage = 5;
$page = get_query_var('paged');
$offset = $page * $postsPerPage - $postsPerPage;

if ($offset < 0) {
    $offset = 0;
}

$wp_query = new WP_Query([
    'category_name' => 'aktualnosci',
    'posts_per_page' => $postsPerPage,
    'paged' => (get_query_var('page')) ? get_query_var('page') : 1,
    'offset' => $offset,
]);

?>

<div id="main-news" class="container">
    <h1>Aktualności</h1>
    <div>
    <?php
    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) :
            $wp_query->the_post();
    ?>


        <article>
            <div class="date"><?= the_time('d M Y'); ?></div>
            <div class="row">
                <div class="four columns thumbnail">
                    <a href="<?= the_permalink(); ?>"><?= has_post_thumbnail() ? the_post_thumbnail('news') : '&nbsp;' ?></a>
                </div>
                <div class="eight columns post">
                    <h2 class="title"><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="teaser"><?= the_content('') ?></div>
                    <div class="more"><a href="<?= the_permalink(); ?>">Czytaj dalej</a></div>
                </div>
            </div>


        </article>


        <?php endwhile; ?>
        <nav>
            <div class="previous-page"><?= previous_posts_link('Poprzednia strona') ?></div>
            <div class="next-page"><?= next_posts_link('Następna strona') ?></div>
        </nav>

    <?php endif;?>
    </div>

</div>

<?php get_footer(); ?>
