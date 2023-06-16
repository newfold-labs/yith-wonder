<?php
/**
 * Backward compatibility resources
 *
 * @package yith-wonder
 * @since 1.3.2
 */

/**
 * Add backwards compatibility resources
 *
 * @since 1.2.0
 *
 * @return void
 */
function yith_wonder_add_backwards_compatibility_resources() {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_register_style(
		'yith-wonder-backwards-compatibility',
		get_theme_file_uri( 'assets/css/backwards-compatibility' . $suffix . '.css' ),
		array(),
		YITH_WONDER_VERSION
	);
	wp_enqueue_style( 'yith-wonder-backwards-compatibility' );
}

add_action( 'wp_enqueue_scripts', 'yith_wonder_add_backwards_compatibility_resources', 0 );
