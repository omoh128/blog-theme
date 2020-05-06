<?php


 /**register default hooks and actions for WordPress
 register default hooks and actions for WordPress

/* Bootstrap FunctionsPhp */


 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
 	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
 endif;

if ( class_exists( 'Inc\\Init' ) ) :
	Inc\Init::register_services();
endif;
