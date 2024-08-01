<?php
/**
 * Block variations.
 *
 * @package yith-wonder
 * @since 2.1.0
 */

/**
 * Create block variations.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
 *
 * @since 2.1.0
 *
 * @return void
 */
function yith_wonder_register_block_variations() {
	wp_enqueue_script(
		'yith-wonder-block-variations',
		get_template_directory_uri() . '/assets/js/block-variations.js',
		array( 'wp-blocks' ),
		YITH_WONDER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'yith_wonder_register_block_variations' );
