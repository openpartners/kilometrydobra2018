<?php
/*
    Plugin Name: Require https.
*/

function requireHttpsInit(){
    $uriArray = [
        '/wplac',
        '/dziekujemy',
        '/wp-admin',
        '/wp-login',
        '/wp-content/themes/kd/neworder.php',
        '/pay.php',
        '/paypal-ipn.php',
        '/zglos-sie',
	'/enroll.php'
    ];

    $exceptions = [
        '/wp-admin/admin-ajax.php'
    ];

    $exception = array_filter($exceptions, function($uri){
        return preg_match('|'.$uri.'|', $_SERVER['REQUEST_URI']);
    });

    if (!$exception) {
        $match = array_filter($uriArray, function($uri){
            return preg_match('|'.$uri.'|', $_SERVER['REQUEST_URI']);
        });

        if (!is_ssl() && count($match) > 0) {
            die(header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));
        } elseif (is_ssl() && count($match) == 0) {
            /**
             * Nginx dodatkowo potrzebuje portu 80, bo inaczej nie może się 'oderwać'
             * od ssla.
             */
            die(header('Location: http://'.$_SERVER['HTTP_HOST'].':80'.$_SERVER['REQUEST_URI']));
        }
    }
}
add_action('init','requireHttpsInit');
