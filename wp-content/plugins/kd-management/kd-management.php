<?php
/**
 * Plugin Name: KD Management
 */

require_once(plugin_dir_path( __FILE__ ) . 'vendor/autoload.php');

register_activation_hook(__FILE__, function(){
    // add_role(
    //     'kd_management_admin',
    //     __( 'Administrator dodatku KD Management' ),
    //     [
    //         'kdm_admin' => true,
    //     ]
    // );

    $role = get_role('administrator');
    $role->add_cap('kdm_admin');
});

require_once(plugin_dir_path( __FILE__ ) . 'bootstrap.php');
