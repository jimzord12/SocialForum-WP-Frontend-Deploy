<?php
/**
 * Kadence functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kadence
 */

include 'blockchain/blockchain.php'; 

define( 'KADENCE_VERSION', '1.1.37' );
define( 'KADENCE_MINIMUM_WP_VERSION', '5.4' );
define( 'KADENCE_MINIMUM_PHP_VERSION', '7.2' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], KADENCE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), KADENCE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `kadence()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Kadence\kadence' );

// GENERA
function my_custom_styles() {
    wp_enqueue_style( 'my-custom-style', get_template_directory_uri() . '/components/successAnimation.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'my_custom_styles' );

