<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 30.01.18
 * Time: 10:25
 */
add_action('wp_ajax_contact', 'contact_callback');
add_action('wp_ajax_nopriv_contact', 'contact_callback');
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        //$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );
function contact_callback() {
    global $wpdb;
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];

    $to = get_option('admin_email');

    $txt = '';
    $txt .= '<div>';
    $txt .= "Name: " . $name. "<br>";
    $txt .= "Email: " . $email. "<br>";
    $txt .= "Phone:  " . $phone. "<br>";
    $txt .= "</div>";
    //$to = "ofirs1988@gmail.com";
    $subject = "Swiego SITE new lead";
    $headers = "From: office@swiego.com" . "\r\n" .
        "CC: office@swiego.com";
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $wpdb->insert('contacts', array(
        'email' => $email,
        'name' => $name,
        'phone' => $phone
    ));

    try {
        $mail->SMTPDebug = 2;                              // Enable verbose debug output

        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'office@swiego.com';                 // SMTP username
        $mail->Password = 'swiego55555';                           // SMTP password
        $mail->Charset = 'UTF-8';
        $mail->AddAddress($to, 'Swiego One');
        $mail->AddAddress('office@swiego.com', 'Swiego One');
        $mail->AddAddress('ofir@swiego.com', 'Ofir shurdeker');
        $mail->AddAddress('gal@swiego.com', 'Swiego');
        $mail->AddAddress('evgeni@swiego.com', 'evgeni fomenko');
        //$mail->setFrom('office@swiego.com', 'Swiego');
        //$mail->addAddress($to);     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = '=?utf-8?B?' . base64_encode($subject) . '?=';
        $mail->Body = $txt;
        $mail->AltBody = $txt;
        //$last_id = $link->insert_id;
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        $errors[] = "Send mail sucsessfully";
    } catch (phpmailerException $e) {
        $errors[] = $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        $errors[] = $e->getMessage(); //Boring error messages from anything else!
    }
    wp_die();
}