<?php
include("wp-load.php");

use KdManagement\ValueObject\EmailTemplateVO;

$base = $_POST['transactions'];
//file_put_contents('base.txt', $base . PHP_EOL, FILE_APPEND);

$xml = base64_decode($base);
$data = simplexml_load_string($xml) or die();

$serviceID = (string) $data->serviceID;
$orderID = (string) $data->transactions->transaction->orderID;
$remoteID = (string) $data->transactions->transaction->remoteID;
$amount = (string) $data->transactions->transaction->amount;
$currency = (string) $data->transactions->transaction->currency;
$gatewayID = (string) $data->transactions->transaction->gatewayID;
$paymentDate = (string) $data->transactions->transaction->paymentDate;
$paymentStatus = (string) $data->transactions->transaction->paymentStatus;
$paymentStatusDetails = (string) $data->transactions->transaction->paymentStatusDetails;

$fName = (string) $data->transactions->transaction->customerData->fName;
$lName = (string) $data->transactions->transaction->customerData->lName;
$streetName = (string) $data->transactions->transaction->customerData->streetName;
$streetHouseNo = (string) $data->transactions->transaction->customerData->streetHouseNo;
$streetStaircaseNo = (string) $data->transactions->transaction->customerData->streetStaircaseNo;
$streetPremiseNo = (string) $data->transactions->transaction->customerData->streetPremiseNo;
$postalCode = (string) $data->transactions->transaction->customerData->postalCode;
$city = (string) $data->transactions->transaction->customerData->city;
$nrb = (string) $data->transactions->transaction->customerData->nrb;

$hash = (string) $data->hash;

$args = array(
    'post_type'        => 'orders',
    'title'       => $orderID
);
$posts_array = get_posts( $args );
$orderpost = $posts_array[0];

// get organization key
$organization = $container['organization.repository']
    ->getFirstByBlueMediaServiceId($serviceID);

$args = array(
    'post_type'        => 'organization',
    'meta_key' => '_sid',
    'meta_value' => $serviceID
);
$posts_array = get_posts( $args );
$post_key = $organization->bm_key;

$st = "";
// generating post hash
if($serviceID) $st .= $serviceID;
if($orderID) $st .= '|' . $orderID;
if($remoteID) $st .= '|' . $remoteID;
if($amount) $st .= '|' . $amount;
if($currency) $st .= '|' . $currency;
if($gatewayID) $st .= '|' . $gatewayID;
if($paymentDate) $st .= '|' . $paymentDate;
if($paymentStatus) $st .= '|' . $paymentStatus;
if($paymentStatusDetails) $st .= '|' . $paymentStatusDetails;
if($fName) $st .= '|' . $fName;
if($lName) $st .= '|' . $lName;
if($streetName) $st .= '|' . $streetName;
if($streetHouseNo) $st .= '|' . $streetHouseNo;
if($streetStaircaseNo) $st .= '|' . $streetStaircaseNo;
if($streetPremiseNo) $st .= '|' . $streetPremiseNo;
if($postalCode) $st .= '|' . $postalCode;
if($city) $st .= '|' . $city;
if($nrb) $st .= '|' . $nrb;

$st .= '|' . $post_key;
$post_hash = hash('sha256', $st);

// change payment status
// file_put_contents('test.txt', $post_hash, FILE_APPEND);
// file_put_contents('test.txt', '   ', FILE_APPEND);
// file_put_contents('test.txt', $hash, FILE_APPEND);

if($post_hash == $hash) {
    $confirmation = "CONFIRMED";
    $status = 'oczekuje';


    if($paymentStatus == 'FAILURE' && preg_match('/REJECTED/', $paymentStatusDetails)) {
        $status = 'nieopłacone';
    } elseif ($paymentStatus == 'SUCCESS') {
        $status = 'opłacone';
    }

    update_post_meta($orderpost->ID, '_status', $status);

    // send mail
    $oid = $organization->organization_id;
    $orderID = $orderpost->ID;
    $to = get_post_meta($orderID, '_email', true);
    $language = get_post_meta($orderID, '_lang', true);

    if ($paymentStatus == 'SUCCESS') {
        $container['email.service']->sendEmail($oid, EmailTemplateVO::PAYMENT_SUCCESS, $language, $to);
    } else {
        $container['email.service']->sendEmail($oid, EmailTemplateVO::PAYMENT_NEW, $language, $to);
    }

} else {
    update_post_meta($orderpost->ID, '_status', 'sprawdź');
    $confirmation = "NOTCONFIRMED";
}

$str = $serviceID . '|' . $orderID . '|' . $confirmation . '|' . $post_key;
$nh = hash('sha256', $str);

$output = '<?xml version="1.0" encoding="UTF-8"?>
<confirmationList>
    <serviceID>' .$serviceID. '</serviceID>
    <transactionsConfirmations>
        <transactionConfirmed>
            <orderID>' . $orderID . '</orderID>
            <confirmation>' .$confirmation. '</confirmation>
        </transactionConfirmed>
    </transactionsConfirmations>
    <hash>' .$nh. '</hash>
</confirmationList>';

header('Content-Type: application/xml');
print ($output);
