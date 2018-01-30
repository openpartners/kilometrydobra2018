<?php
include("../../../wp-load.php");

use KilometryDobra\ValueObject\PaymentTypeValueObject;

$name = $_POST['firstname'];
$surname = $_POST['lastname'];
$email = $_POST['email'];
$price = number_format((float)$_POST['price'], 2, '.', '');
$oid = $_POST['oid'];
$regulations = (isset($_POST['regulations']) && $_POST['regulations'])?1:0;
$dataProcessing = (isset($_POST['data-processing']) &&  $_POST['data-processing'])?1:0;
$commercialInformation = (isset($_POST['commercial-information']) &&  $_POST['commercial-information'])?1:0;
$phone = $_POST['phone'];
$paymentType = $_POST['payment-type'];

if($name == "" && $surname == "") {
	$name = "Wpłata anonimowa";
}

$organization = $container['organization.service']->getOrganization($oid, LANG);

$sid = $organization['organizationBmServiceId'];
$key = $organization['organizationBmKey'];
$paypalEmail = $organization['organizationPaypal'];

switch ($paymentType) {
	case PaymentTypeValueObject::PAYPAL:
		if (!$paypalEmail) {
			header('Location: /wplac/?id=' . $oid);
			die;
		}
		break;

	case PaymentTypeValueObject::BLUEMEDIA:
		if (!$sid || !$key) {
			header('Location: /wplac/?id=' . $oid);
			die;
		}
		break;
}

$organizationName = $organization['organizationName'];

$orderNumber = md5(microtime().rand());

// new order
$order = array(
	'post_title' => $orderNumber,
	'post_type' => 'orders',
	'post_status' => 'publish',
	'post_author' => 0
);

$order_id = wp_insert_post( $order );
add_post_meta($order_id, '_price', $price, true);
add_post_meta($order_id, '_name', $name, true);
add_post_meta($order_id, '_surname', $surname, true);
add_post_meta($order_id, '_email', $email, true);
add_post_meta($order_id, '_phone', $phone, true);
add_post_meta($order_id, '_status', 'oczekuje', true);
add_post_meta($order_id, '_regulations', $regulations, true);
add_post_meta($order_id, '_dataProcessing', $dataProcessing, true);
add_post_meta($order_id, '_commercialInformation', $commercialInformation, true);
add_post_meta($order_id, '_organizationId', $oid, true);
add_post_meta($order_id, '_edition', EDITION, true);
add_post_meta($order_id, '_lang', LANG, true);

$org = array (
  0 => $oid,
);

add_post_meta($order_id, '_organization', $org, true);


if ($paymentType == PaymentTypeValueObject::PAYPAL && $paypalEmail) {

	$customData = base64_encode(json_encode(['orderId' => $orderNumber], true));
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title'); ?></title>
</head>
<body>
	<h1>Za chwilę nastąpi przekierowanie do serwisu płatności...</h1>
	<form id="paymentForm" action="<?= PAYPAL_GATE ?>" method="POST">
	<input type="hidden" name="business" value="<?= $paypalEmail ?>">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="custom" value="<?= urlencode($customData) ?>">
	<input type="hidden" name="item_name" value="Wpłata dla <?= $organizationName ?>">
	<input type="hidden" name="amount" value="<?= $price ?>">
	<input type="hidden" name="currency_code" value="PLN">
	<input type="hidden" name="cancel_return" value="<?= PAYPAL_CANCEL_RETURN ?>?id=<?= $oid ?>">
	<input type="hidden" name="return" value="<?= PAYPAL_RETURN ?>">
	</form>
	<script type="text/javascript">
		var paymentForm = document.getElementById('paymentForm');
		paymentForm.submit();
	</script>
</body>
</html>
<?php
} else { //poki co w ten sposob, bo w razie gdyby nie przeslalo typu platnosci to niech kieruje na BM
	// go to bluemedia
	$hash =  hash('sha256', $sid . '|' . $orderNumber . '|' . $price . '|' . $email . '|' . $key);
	header("Location: ". BLUE_MEDIA_GATE ."?ServiceID=$sid&OrderID=$orderNumber&Amount=$price&CustomerEmail=$email&Hash=$hash");
	die();
}

die;
