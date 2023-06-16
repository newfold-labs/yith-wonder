<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yith-wonder
 * @since 1.0.0
 */

if ( ! defined( 'YITH_WONDER_VERSION' ) ) {
	define( 'YITH_WONDER_VERSION', wp_get_theme()->get( 'Version' ) );
}

// Scripts.
require_once get_theme_file_path( 'inc/scripts.php' );

// Enable customizer (mainly for Additional CSS feature).
add_action( 'customize_register', '__return_true' );

// Block patterns.
require_once get_theme_file_path( 'inc/register-block-pattern-categories.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// WooCommerce.
if ( class_exists( 'woocommerce' ) ) {
	require_once get_theme_file_path( 'inc/woocommerce.php' );
}

// Backward compatibility.
require_once get_theme_file_path( 'inc/backward-compatibility.php' );
