<?php
include('wp-load.php');

use KilometryDobra\Service\PaymentService;
use KilometryDobra\ValueObject\PaypalPaymentStatusVO;

use KdManagement\ValueObject\EmailTemplateVO;

$paymentService = new PaymentService();
$paymentData = $_POST;

if (!$paymentService->verifyPaypalIPN($paymentData)) {
    header('Bad Request', true, 400);
    die;
}


$customData = urldecode($paymentData['custom']);
$custom = json_decode(base64_decode($customData), true);

$args = [
    'post_type' => 'orders',
    'title'     => $custom['orderId']
];
$posts_array = get_posts( $args );
$order = $posts_array[0];


$organizationId = get_post_meta($order->ID, '_organizationId', true);


switch ($paymentData['payment_status']) {
    case PaypalPaymentStatusVO::COMPLETED:
        update_post_meta($order->ID, '_status', 'opłacone');
        break;

    case PaypalPaymentStatusVO::PENDING:
        update_post_meta($order->ID, '_status', 'oczekuje');
        break;

    default:
        update_post_meta($order->ID, '_status', 'nieopłacone');
        break;
}

$to = get_post_meta($order->ID, '_email', true);
$language = get_post_meta($orderID, '_lang', true);

if ($paymentStatus == PaypalPaymentStatusVO::COMPLETED) {
    $container['email.service']->sendEmail($organizationId, EmailTemplateVO::PAYMENT_SUCCESS, $language, $to);
} else {
    $container['email.service']->sendEmail($organizationId, EmailTemplateVO::PAYMENT_NEW, $language, $to);
}

die;
