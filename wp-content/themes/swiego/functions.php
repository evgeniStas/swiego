<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 30.01.18
 * Time: 10:25
 */
add_action('wp_ajax_contact', 'contact_callback');
function contact_callback() {
    $data = json_decode($_REQUEST["data"]);

    $to = get_option('admin_email');
    $subject = "New message from swiego.com";
    $headers = 'From:' . $data["email"];
    $message = "Name : ".$data["name"].", Mail : ".$data["email"].", Phone : ".$data["phone"];
    wp_mail( $to, $subject, $message, $headers);
    wp_die();
}