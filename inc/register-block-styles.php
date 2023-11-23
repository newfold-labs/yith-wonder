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
			'label' => esc_html__( 'Button Style 1', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'yith-wonder-image-creative',
			'label' => esc_html__( 'Creative #1', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'yith-wonder-image-creative-2',
			'label' => esc_html__( 'Creative #2', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/image',
		array(
			'name'  => 'yith-wonder-image-with-shadow',
			'label' => esc_html__( 'With shadow', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/quote',
		array(
			'name'  => 'yith-wonder-quote-with-icon',
			'label' => esc_html__( 'With Icon', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'woocommerce/mini-cart',
		array(
			'name'  => 'yith-wonder-mini-cart-hidden-total',
			'label' => esc_html__( 'Hidden total', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'yith-wonder-left-aligned-separator',
			'label' => esc_html__( 'Left aligned', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'yith-wonder-right-aligned-separator',
			'label' => esc_html__( 'Right aligned', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/separator',
		array(
			'name'  => 'yith-wonder-dashed-wide-separator',
			'label' => esc_html__( 'Dashed wide', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/latest-posts',
		array(
			'name'  => 'yith-wonder-latest-posts-boxed',
			'label' => esc_html__( 'Boxed', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'yith-wonder-group-with-shadow',
			'label' => esc_html__( 'With shadow', 'yith-wonder' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'  => 'yith-wonder-cover-unscaled-background',
			'label' => esc_html__( 'Unscaled background', 'yith-wonder' ),
		)
	);
}

add_action( 'init', 'yith_wonder_register_block_styles' );
