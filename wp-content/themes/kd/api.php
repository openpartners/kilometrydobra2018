<?php
include("wp-load.php");

if ($_GET['action'] == 'getMarkers') {

$edition = @$_GET['edition'];
$result = [];

$args = array(
    'post_type'        => 'marker',
    'post_status'      => 'publish',
    'posts_per_page'   => -1
);
$posts_array = get_posts( $args );

foreach($posts_array as $marker){

    $editio = get_post_meta($marker->ID, '_edition', true);

    if ($edition && $edition != get_post_meta($marker->ID, '_edition', true)) {
        continue;
    }
    $obj = array(
        'type' => 'major',
        'lat' => (float) get_post_meta($marker->ID, '_lat', true),
        'lng' => (float) get_post_meta($marker->ID, '_lng', true),
        'centerLat' => (float) get_post_meta($marker->ID, '_centerlat', true),
        'centerLng' => (float) get_post_meta($marker->ID, '_centerlng', true),
    );

    array_push($result, $obj);

}


$args = array(
    'post_type'        => 'organization',
    'post_status'      => 'publish',
    'posts_per_page'   => -1
);
$organizations = get_posts( $args );

foreach($organizations as $org){

    if ($edition && $edition != get_post_meta($org->ID, '_edition', true)) {
        continue;
    }

    $name = (LANG == 'pl')?$org->post_title:strip_tags(get_post_meta($org->ID, '_org_name_en', true));
    $description = (LANG == 'pl')?strip_tags(get_post_meta($org->ID, '_org_target', true)):strip_tags(get_post_meta($org->ID, '_org_target_en', true));
    $obj = array(
        'guid' => $org->guid,
        'name' => $name,
        'type' => 'minor',
        'lat' => (float) get_post_meta($org->ID, '_lat', true),
        'lng' => (float) get_post_meta($org->ID, '_lng', true),
        'city' => get_post_meta($org->ID, '_org_city', true),
        'description' => $description,
        'logo' => wp_get_attachment_image_src(get_post_meta($org->ID, '_org_logo', true), 'normal')[0],
        'id' => $org->ID
    );
    array_push($result, $obj);
}

    die(json_encode($result));
}
//array_search('green', $array);
