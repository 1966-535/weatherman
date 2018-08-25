<?php
$sites = include_once 'config/params.php';
 foreach ( $sites as $key => $value ) {
	if ( ! defined( $key ) ) {
		define( $key , $value );
	}
}
echo WEATHERMAN_EOF;
