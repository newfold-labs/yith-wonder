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
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_register_style(
		'wonder-style',
		get_stylesheet_uri(),
		array(),
		WONDER_VERSION
	);
	wp_enqueue_style( 'wonder-style' );

	wp_register_style(
		'general-block-style',
		get_theme_file_uri( 'assets/css/general-block-style' . $suffix . '.css' ),
		array(),
		WONDER_VERSION
	);
	wp_enqueue_style( 'general-block-style' );

	wp_register_style(
		'registered-block-style',
		get_theme_file_uri( 'assets/css/registered-block-styles' . $suffix . '.css' ),
		array(),
		WONDER_VERSION
	);
	wp_enqueue_style( 'registered-block-style' );

	// WooCommerce.
	if ( class_exists( 'woocommerce' ) ) {
		wp_register_style(
			'wonder-woocommerce',
			get_theme_file_uri( 'assets/css/woocommerce' . $suffix . '.css' ),
			array(),
			WONDER_VERSION
		);
		wp_enqueue_style( 'wonder-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wonder_styles' );


if ( ! function_exists( 'wonder_theme_setup' ) ) {
	/**
	 * Theme support declarations
	 */
	function wonder_theme_setup() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		add_theme_support( 'wp-block-styles' );
		add_editor_style( './assets/css/general-block-style' . $suffix . '.css' );
		add_editor_style( './assets/css/registered-block-styles' . $suffix . '.css' );

		/*
		* Load additional block styles.
		*/
		$styled_blocks = array(
			'button',
			'navigation',
		);

		foreach ( $styled_blocks as $block_name ) {
			$args = array(
				'handle' => 'wonder-' . $block_name,
				'src'    => get_theme_file_uri( './assets/css/blocks/' . $block_name . $suffix . '.css' ),
				'path'   => get_theme_file_path( './assets/css/blocks/' . $block_name . $suffix . '.css' ),
				'ver'    => WONDER_VERSION,
			);
			wp_enqueue_block_style( 'core/' . $block_name, $args );
		}

	}
	add_action( 'after_setup_theme', 'wonder_theme_setup' );
}

// Enable customizer (mainly for Additional CSS feature).
add_action( 'customize_register', '__return_true' );

// Block patterns.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// WooCommerce.
if ( class_exists( 'woocommerce' ) ) {
	require_once get_theme_file_path( 'inc/woocommerce.php' );
}
