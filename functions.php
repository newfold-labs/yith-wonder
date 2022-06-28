<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wonder
 * @since 1.0.0
 */

if ( ! defined( 'WONDER_VERSION' ) ) {
	define( 'WONDER_VERSION', wp_get_theme()->get( 'Version' ) );
}

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function wonder_styles() {
	wp_enqueue_style(
		'wonder-style',
		get_stylesheet_uri(),
		array(),
		WONDER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'wonder_styles' );


if ( ! function_exists( 'wonder_theme_setup' ) ) {
	/**
	 * Theme support declarations
	 */
	function wonder_theme_setup() {
		add_theme_support( 'wp-block-styles' );
	}
	add_action( 'after_setup_theme', 'wonder_theme_setup' );
}

/**
 * Enable again the customizer
 */
add_action( 'customize_register', '__return_true' );
