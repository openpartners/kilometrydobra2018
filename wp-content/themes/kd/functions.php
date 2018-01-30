<?php
define('LANG', getLang());
define('EDITION', 2016);

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'logo', 240, 300, true );
add_image_size( 'logo-small', 123, 150, false );
add_image_size( 'news', 370, 246, true );
add_image_size( 'partners-logo', 202, 126, false );
add_image_size( 'small', 40, 60, true );

add_action( 'init', function(){
	register_post_type( 'organization_2017',
		[
			'labels' => [
				'name' => __( 'Organizacje 2017' ),
				'singular_name' => __( 'Organizacja' )
			],
			'public' => true,
			'has_archive' => true,
			'rewrite' => ['slug' => 'organization'],
		]
	);
});

// function create_organization() {
//
// 	register_post_type( 'organization',
// 	// CPT Options
// 		array(
// 			'labels' => array(
// 				'name' => __( 'Organizacje 2016' ),
// 				'singular_name' => __( 'Organizacja' )
// 			),
// 			'public' => true,
// 			'has_archive' => true,
// 			'rewrite' => array('slug' => 'organization'),
// 		)
// 	);
// }
//
// add_action( 'init', 'create_organization' );

add_action('init','add_my_vars');
function add_my_vars() {
    global $wp;
    $wp->add_query_var('id');
}

function create_orders() {

	register_post_type( 'orders',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Wpłaty' ),
				'singular_name' => __( 'Wpłata' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'order'),
		)
	);
}

add_action( 'init', 'create_orders' );


use KilometryDobra\Repository\DonationRepository;

add_action( 'wp_ajax_nopriv_get-o-stats', 'get_organization_stats' );
add_action( 'wp_ajax_get-o-stats', 'get_organization_stats' );
function get_organization_stats() {

	global $container;

    $id = (int) $_GET['id'];
	$results = [];

	$donations = $container['donation.repository']->getDonationsByOrganizationId($id);

	$organization = get_post($id);
	$i = count($donations);

	foreach($donations as $donation){
		$result['price'] = $donation['_price'];
		$result['name'] = $donation['_name'];
		$result['surname'] = $donation['_surname'];
		$result['target'] = $organization->post_title;
		$result['post_date'] = $donation['post_date'];
		$result['ID'] = $i--;

		$results[] = $result;
	}

    header( "Content-Type: application/json" );
    die(json_encode($results));
}

use KilometryDobra\Service\OrganizationService;

add_action( 'wp_ajax_nopriv_get-full-stats', 'get_full_stats' );
add_action( 'wp_ajax_get-full-stats', 'get_full_stats' );
function get_full_stats() {

	$organizationService = new OrganizationService();

	$organizations = $organizationService->getOrganizationsRanking(EDITION);

	foreach($organizations as $organization) {
		$organization = array(
			'id' => $organization['ID'],
			'city' => strip_tags($organization['_org_city']),
			'cash' => (float) $organization['total_donations'],
			'title' => strip_tags($organization['post_title']),
			'target' => strip_tags($organization['_org_target']),
			'target_en' => strip_tags($organization['_org_target_en']),
			'name_en' => strip_tags($organization['_org_name_en']),
			'guid'	=> $organization['guid']
		);
		$ranking[] = $organization;
	}

	function cmp($a, $b)
	{
		$aValue = $bValue = 0;
		foreach ($a as $temp) {
			$aValue += $temp['cash'];
		}

		foreach ($b as $temp) {
			$bValue += $temp['cash'];
		}

	    return $bValue - $aValue;
	}

	$out = array();
	foreach($ranking as $element) {
		$out[$element['city']][] = $element;
	}

	usort($out, "cmp");
    header( "Content-Type: application/json; charset=utf-8" );
    die(json_encode($out));
}

use KilometryDobra\Service\DonationService;

add_action( 'wp_ajax_nopriv_get-all-donations', 'get_all_donations' );
add_action( 'wp_ajax_get-all-donations', 'get_all_donations' );
function get_all_donations() {
	global $container;

	$limit = $_GET['limit']?$_GET['limit']:NULL;
	$offset = $_GET['offset']?$_GET['offset']:NULL;

	$donations = $container['donation.service']->getDonationsList(EDITION, LANG, $limit, $offset);

	foreach ($donations as $key => $donation) {
		$donation = [
			'id' => $key+1,
			'donor' => $donation['_name'] . ' ' . $donation['_surname'],
			'donation' => $donation['_price'],
			'date' => $donation['post_date'],
			'donatory' => $donation['_target']
		];
		$result[] = $donation;
	}

	die(json_encode($result));
}

add_action( 'wp_ajax_nopriv_get-org', 'get_organizations' );
add_action( 'wp_ajax_get-org', 'get_organizations' );
function get_organizations() {
	global $container;

	$organizations = $container['organization.service']->getOrganizations(EDITION, LANG);


	$result = array_map(function($organization){
		return [
			'id' => (int)$organization['organizationId'],
			'name' => $organization['organizationName'],
			'goal' => $organization['organizationGoal'],
			'imgUrl' => $organization['organizationLogo'],
			'city' => $organization['cityName'],
			'paypal' => !empty($organization['organizationPaypal']),
			'bm' => (!empty($organization['organizationBmKey']) && !empty($organization['organizationBmServiceId']))
		];
	}, $organizations);

    header( "Content-Type: application/json" );
    echo json_encode($result);
    die();
}

function create_marker() {

	register_post_type( 'marker',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Markery' ),
				'singular_name' => __( 'Marker' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'marker'),
		)
	);
}

add_action( 'init', 'create_marker' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function getLang()
{
	$URI = str_replace('/', '', $_SERVER['REQUEST_URI']);

	switch ($URI) {
		case 'milesofgood':
			$lang = 'en';
			break;
		case '':
			$lang = 'pl';
			break;
	}

	if (empty($lang)) {
		$lang = 'pl';
		if(!isset($_COOKIE['lang'])) {
			setcookie('lang', $lang, time() + (86400 * 30), "/");
		} else {
			$lang = $_COOKIE['lang'];
		}
	} else {
		setcookie('lang', $lang, time() + (86400 * 30), "/");
	}

	return $lang;
}

add_action( 'wp_ajax_nopriv_getDonations', 'get_organization_donations' );
function get_organization_donations() {
	$queryOrganizationId = (int) $_GET['organizationId'];

	$args = [
	    'post_type'        => 'orders',
	    'post_status'      => 'publish',
	    'posts_per_page'   => -1,
	    'meta_query' => [
	    'relation' => 'AND',
	        [
	            'key' => '_status',
	            'value' => 'opłacone',
	            'compare' => '='
	        ]
	    ]
	];

	$posts = get_posts($args);
	$totalPaid = 0.0;

	foreach ($posts as $post) {
	    $organizationId = get_post_meta($post->ID, '_organization', true)[0];
	    if ($organizationId == $queryOrganizationId) {
	        $totalPaid += get_post_meta($post->ID, '_price', true);
	    }
	}

    header( "Content-Type: application/json" );
    die(json_encode(['donations' => $totalPaid]));
}

add_filter('pre_get_posts','restrictOrderAccess');

function restrictOrderAccess($query) {

	global $pagenow;
	global $container;

	isset($_GET['post_type'])?$type = $_GET['post_type']:$type = '';
	isset($_GET['post'])?$postId = $_GET['post']:$postId = 0;

	$currentUser = wp_get_current_user();

	if ( !in_array('administrator', $currentUser->roles) && $type == 'orders' && is_admin()) {

		$userRoles = $container['user.service']
			->getUserRoles($currentUser->ID);

		if ($pagenow=='edit.php') {
			$query->set('meta_key', '_organizationId');
			$query->set('meta_value', $userRoles['organization_2017_editor']);
			$query->set('meta_compare', 'IN');
		}

		if ($pagenow == 'post.php') {

			if (!in_array(get_post_meta($postId, '_organizationId', true), $userRoles['organization_2017_editor'])) {
				wp_redirect('/wp-admin/edit.php?post_type=orders');
			}
		}
	}
}

add_action('admin_menu' , 'restrictDonorPhoneNumber');

function restrictDonorPhoneNumber() {
	global $pagenow;
	global $filteredFields;

	isset($_GET['post_type'])?$type = $_GET['post_type']:$type = '';
	isset($_GET['post'])?$postId = $_GET['post']:$postId = 0;

	$currentUser = wp_get_current_user();

	if ( !in_array('administrator', $currentUser->roles) && $type == 'orders' && is_admin()) {

		if ($pagenow == 'post.php' && !get_post_meta($postId, '_commercialInformation', true)) {
			$filteredFields[] = 'inputtext-1462153101';
		}
	}
}

add_filter( 'wp_get_attachment_image_src', 'checkProtocol');
function checkProtocol($data) {

	if (is_ssl()) {
		$data[0] = str_replace('http://', 'https://', $data[0]);
	}

  	return $data;
}

add_action( 'updated_post_meta', 'orderMetaFilter', 10, 4 );
add_action( 'added_post_meta', 'orderMetaFilter', 10, 4 );
function orderMetaFilter( $metaId, $postId, $metaKey, $metaValue ) {
	$post = get_post($postId);

	if ($post->post_type !== 'orders') {
		return;
	}

	switch ($metaKey) {
		case '_organization':
			$organizationId = reset($metaValue);
			if (!get_post_meta($postId, '_organizationId')) {
				add_post_meta($postId, '_organizationId', $organizationId);
			} else {
				update_post_meta($postId, '_organizationId', $organizationId);
			}
			break;

		case '_price':
			$metaValue = str_replace(',', '.', $metaValue);
			update_post_meta($postId, '_price', number_format((float)$metaValue, 2, '.', ''));
			break;
	}
}

add_filter( 'wp_mail', 'override_mail_recipient');
function override_mail_recipient ( $args ) {
 	if (ENVIRONMENT == 'production') {
		return $args;
	} else {
		return [
			'to'          => ['sebastianwidlak@gmail.com', 'frankiewiczmh@gmail.com'],
			'subject'     => '[Środowisko: '. ENVIRONMENT .', oryginalny adresat: '. $args['to'] .'] - ' . $args['subject'],
			'message'     => $args['message'],
			'html'        => $args['html'],
			'headers'     => $args['headers'],
			'attachments' => $args['attachments'],
		];
	}
}

function getTemplate($template, $variables = []) {
	$templatePath = get_template_directory() . '/templates/' . $template . '.php';

	foreach ($variables as $name => $value) {
		${$name} = $value;
	}

	ob_start();
	include ($templatePath);
	$content = ob_get_contents();
	ob_end_clean();

	return $content;
}

add_shortcode( 'cta-email', 'ctaEmailTag' );
function ctaEmailTag( $attributes = [], $content = null ) {
	$variables = [
		'url' 			=> $attributes['url'],
		'anchorText' 	=> $content
	];

	return getTemplate('shortcodes/ctaEmail', $variables);
}

/* Relacja na żywo */
add_action( 'init', 'createRelation' );
function createRelation() {

	register_post_type( 'relation',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Relacje' ),
				'singular_name' => __( 'Relacja' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'relation'),
		)
	);
}

add_action( 'wp_ajax_nopriv_get-relations', 'getRelations' );
add_action( 'wp_ajax_get-relations', 'getRelations' );
function getRelations() {
	$timestamp = (int) $_GET['timestamp'];
	$args = array(
		'post_type'        => 'relation',
		'post_status'      => 'publish',
		'posts_per_page'   => -1,
		'orderby'          => 'post_date',
		'order'            => 'ASC',
	);


	$posts = get_posts( $args );

	$relations = [];

	foreach ($posts as $post) {
		$relationTimestamp = strtotime($post->post_date_gmt);

		if ($relationTimestamp > $timestamp) {
			$relations[] = [
				'id' => $post->ID,
				'timestamp' => $relationTimestamp,
				'content' => $post->post_content,
				'image' => wp_get_attachment_image_src(get_post_meta($post->ID, '_relation_image', true), 'normal')[0]
			];
		}
	}

	die(json_encode($relations, true));
}

function createApplications() {

	register_post_type( 'applications',
		array(
			'labels' => array(
				'name' => __( 'Zgłoszenia' ),
				'singular_name' => __( 'Zgłoszenie' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'application'),
		)
	);
}

add_action( 'init', 'createApplications' );


function getLangByKey($langKey)
{
	global $container;

	if (isset($container['textlanguagesarray'][$langKey][LANG])) {
		return $container['textlanguagesarray'][$langKey][LANG];
	}

	return $langKey;
}
