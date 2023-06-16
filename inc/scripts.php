<?php
/**
 * YITH Wonder CSS & Scripts
 *
 * @package yith-wonder
 * @since 1.3.2
 */

if ( ! function_exists( 'yith_wonder_styles' ) ) {
	/**
	 * Enqueue the style.css file.
	 *
	 * @since 1.0.0
	 */
	function yith_wonder_styles() {
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		wp_register_style(
			'yith-wonder-style',
			get_stylesheet_uri(),
			array(),
			YITH_WONDER_VERSION
		);
		wp_enqueue_style( 'yith-wonder-style' );

		wp_register_style(
			'yith-wonder-general-block-style',
			get_theme_file_uri( 'assets/css/general-block-style' . $suffix . '.css' ),
			array(),
			YITH_WONDER_VERSION
		);
		wp_enqueue_style( 'yith-wonder-general-block-style' );

		wp_register_style(
			'yith-wonder-registered-block-style',
			get_theme_file_uri( 'assets/css/registered-block-styles' . $suffix . '.css' ),
			array(),
			YITH_WONDER_VERSION
		);
		wp_enqueue_style( 'yith-wonder-registered-block-style' );

		// WooCommerce.
		if ( class_exists( 'woocommerce' ) ) {
			wp_register_style(
				'yith-wonder-woocommerce',
				get_theme_file_uri( 'assets/css/woocommerce/woocommerce' . $suffix . '.css' ),
				array(),
				YITH_WONDER_VERSION
			);
			wp_enqueue_style( 'yith-wonder-woocommerce' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'yith_wonder_styles' );
}

if ( ! function_exists( 'yith_wonder_theme_setup' ) ) {
	/**
	 * Theme support declarations
	 */
	function yith_wonder_theme_setup() {
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
			'paragraph',
		);

		foreach ( $styled_blocks as $block_name ) {
			$args = array(
				'handle' => 'yith-wonder-' . $block_name,
				'src'    => get_theme_file_uri( './assets/css/blocks/' . $block_name . $suffix . '.css' ),
				'path'   => get_theme_file_path( './assets/css/blocks/' . $block_name . $suffix . '.css' ),
				'ver'    => YITH_WONDER_VERSION,
			);
			wp_enqueue_block_style( 'core/' . $block_name, $args );
		}

	}
	add_action( 'after_setup_theme', 'yith_wonder_theme_setup' );
}
