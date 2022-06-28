<?php
/**
 * Block patterns categories.
 *
 * @package wonder
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wonder_register_block_pattern_category() {

	register_block_pattern_category(
		'wonder-site-footer',
		array( 'label' => esc_html__( 'Wonder - Site Footers', 'wonder' ) )
	);

	register_block_pattern_category(
		'wonder-site-header',
		array( 'label' => esc_html__( 'Wonder - Site Headers', 'wonder' ) )
	);

}
add_action( 'init', 'wonder_register_block_pattern_category', 5 );
