<?php
/**
 * Override registered block patterns
 *
 * @package yith-wonder
 * @since 2.1.0
 */

/**
 * Register block patterns
 *
 * @since 2.1.0
 *
 * @return void
 */
function yith_wonder_override_registered_block_patterns() {
	register_block_pattern(
		'woocommerce/order-confirmation-totals-heading',
		array(
			'title'    => '',
			'inserter' => false,
			'content'  => '<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html__( 'Order details', 'woocommerce' ) . '</h3>
			<!-- /wp:heading -->',
		)
	);

	register_block_pattern(
		'woocommerce/order-confirmation-downloads-heading',
		array(
			'title'    => '',
			'inserter' => false,
			'content'  => '<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Downloads', 'woocommerce' ) . '</h3><!-- /wp:heading -->',
		)
	);

	register_block_pattern(
		'woocommerce/order-confirmation-shipping-heading',
		array(
			'title'    => '',
			'inserter' => false,
			'content'  => '<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Shipping address', 'woocommerce' ) . '</h3><!-- /wp:heading -->',
		)
	);

	register_block_pattern(
		'woocommerce/order-confirmation-billing-heading',
		array(
			'title'    => '',
			'inserter' => false,
			'content'  => '<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Billing address', 'woocommerce' ) . '</h3><!-- /wp:heading -->',
		)
	);

	register_block_pattern(
		'woocommerce/order-confirmation-additional-fields-heading',
		array(
			'title'    => '',
			'inserter' => false,
			'content'  => '<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:600">' . esc_html__( 'Additional information', 'woocommerce' ) . '</h3><!-- /wp:heading -->',
		)
	);
}

add_action( 'wp_loaded', 'yith_wonder_override_registered_block_patterns', 20 );
