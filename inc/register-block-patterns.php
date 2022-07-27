<?php
/**
 * Block patterns categories.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function yith_wonder_register_block_pattern_category() {

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-site-footer',
		array( 'label' => esc_html__( 'Wonder - Site Footers', 'wonder' ) )
	);

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-site-header',
		array( 'label' => esc_html__( 'Wonder - Site Headers', 'wonder' ) )
	);

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-pages',
		array( 'label' => esc_html__( 'Wonder - Pages', 'wonder' ) )
	);

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-testimonials',
		array( 'label' => esc_html__( 'Wonder - Testimonials', 'wonder' ) )
	);

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-banners',
		array( 'label' => esc_html__( 'Wonder - Banners', 'wonder' ) )
	);

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'yith-wonder-page-sections',
		array( 'label' => esc_html__( 'Wonder - Page sections', 'wonder' ) )
	);

}
add_action( 'init', 'yith_wonder_register_block_pattern_category', 5 );
