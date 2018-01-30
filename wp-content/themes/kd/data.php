<?php
include("wp-load.php");

$args = array(
    'post_type'        => 'orders',
    'post_status'      => 'publish',
    'posts_per_page'   => -1,

    'meta_query' => array(
    'relation' => 'AND',
        array(
            'key' => '_status',
            'value' => 'opłacone',
            'compare' => '='
        ),
        array(
            'key' => '_edition',
            'value' => EDITION,
            'compare' => '='
        )
    )
);
$posts = get_posts($args);
$totalPaid = 0;

foreach ($posts as $post) {
    $totalPaid += get_post_meta($post->ID, '_price', true);
}
