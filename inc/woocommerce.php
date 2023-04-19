<?php
/**
 * WooCommerce setup.
 *
 * @since 1.0.0
 * @package yith-wonder
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function yith_wonder_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'gallery_thumbnail_image_width' => 300,
			'product_grid'                  => array(
				'default_rows'    => 4,
				'min_rows'        => 1,
				'max_rows'        => 8,
				'default_columns' => 4,
				'min_columns'     => 2,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'yith_wonder_woocommerce_setup' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param array $classes CSS classes applied to the body tag.
 *
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function yith_wonder_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}

add_filter( 'body_class', 'yith_wonder_woocommerce_active_body_class' );

/**
 * Remove the breadcrumbs from the shop page.
 *
 * @since 1.0.4
 */
add_filter(
	'template_redirect',
	function() {
		if ( is_shop() || is_product() || is_product_category() || is_product_taxonomy() ) {
			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
		}
	}
);

/**
 * Remove Product description tab title
 */
add_filter( 'woocommerce_product_description_heading', '__return_null' );


/**
 * Remove Additional information tab title
 */
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

/**
 * Move cross-sells at the end of cart page.
 */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display' );

/**
 * Organize cross-sells in 4 columns
 *
 * @param  int $columns Cross-sells columns.
 * @return int
 */
function yith_wonder_change_cross_sells_columns( $columns ) {
	return 4;
}

add_filter( 'woocommerce_cross_sells_columns', 'yith_wonder_change_cross_sells_columns' );
