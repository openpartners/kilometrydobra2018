<?php
include("../../../wp-load.php");

$data = $_POST['enrollment-form'];

if (!empty($data)) {
    $application = [
        'post_title'    => $data['organization-name'],
        'post_type'     => 'applications',
        'post_status'   => 'private',
        'post_author'   => 0
    ];

    $applicationId =  wp_insert_post( $application );
    add_post_meta($applicationId, '_organizationName', $data['organization-name'], true);
    add_post_meta($applicationId, '_country', $data['country'], true);
    add_post_meta($applicationId, '_city', $data['city'], true);
    add_post_meta($applicationId, '_firstName', $data['first-name'], true);
    add_post_meta($applicationId, '_lastName', $data['last-name'], true);
    add_post_meta($applicationId, '_email', $data['email'], true);
    add_post_meta($applicationId, '_phone', $data['phone'], true);

    $headers = array('Content-Type: text/html; charset=UTF-8');


    $to = $data['email'];
    $subject = 'Gratulacje!';
    $message = getTemplate('emails/afterEnrollment');
    wp_mail( $to, $subject, $message, $headers );

    $to = ['andrzejsew@gmail.com', 'r.kawalko@pif.org.pl', 'j.lesniewska@pif.org.pl'];
    $subject = 'Nowe zgłoszenie';
    $message = getTemplate('emails/enrollmentNotifier', ['data' => $data]);
    wp_mail( $to, $subject, $message, $headers );

    header('Location: /dziekujemy-za-zgloszenie');
    die;
}

header('Location: /');
