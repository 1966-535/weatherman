<?php
$sites = include_once 'config/params.php';
 foreach ( $sites as $key => $value ) {
	if ( ! defined( $key ) ) {
		define( $key , $value );
	}
}
$to      = OBI_MAIL;
$subject = 'The subject!!!';
$message = 'hello!!!';
$headers = 'From: weatherman@obiandsons.com' . "\r\n" .
    'Reply-To: weatherman@obiandsons.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);  
