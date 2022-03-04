<?php

/**
 * Plugin Name:       REST login
 * Plugin URI:        http://thecodifica.com/
 * Description:       This Pluggin helps you login through email & password
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mohammad Omer
 * Author URI:        http://thecodifica.com/
 */


add_action('rest_api_init', function() {
    register_rest_route('wl/v2', 'users', [
        "methods" => 'GET',
        'callback' => 'wl_user'
    ]);
}
);


function wl_user($params) {

    $username = $params->get_param('username');
    $password = $params->get_param('password');

    $Username = $username;
    $Password = $password;

    $Users = wp_authenticate($Username, $Password);


    return $Users;
}

