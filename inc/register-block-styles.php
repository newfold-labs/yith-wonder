<?php
/**
 * Block styles.
 *
 * @package wonder
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function wonder_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'wonder-button-style-1',
			'label' => esc_html__( 'Button Style 1', 'wonder' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'wonder-image-creative',
			'label' => esc_html__( 'Creative', 'wonder' ),
		)
	);
	register_block_style(
		'core/quote',
		array(
			'name'  => 'wonder-quote-with-icon',
			'label' => esc_html__( 'With Icon', 'wonder' ),
		)
	);
}

add_action( 'init', 'wonder_register_block_styles' );
