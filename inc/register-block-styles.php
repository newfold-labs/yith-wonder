<?php
/**
 * Block styles.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function yith_wonder_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'yith-wonder-button-style-1',
			'label' => esc_html__( 'Button Style 1', 'wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'yith-wonder-image-creative',
			'label' => esc_html__( 'Creative #1', 'wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'yith-wonder-image-creative-2',
			'label' => esc_html__( 'Creative #2', 'wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'yith-wonder-quote-with-icon',
			'label' => esc_html__( 'With Icon', 'wonder' ),
		)
	);
}

add_action( 'init', 'yith_wonder_register_block_styles' );
