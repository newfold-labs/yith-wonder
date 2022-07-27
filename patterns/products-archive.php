<?php
/**
 * Title: Products Archive page
 * Slug: yith-wonder/products-archive-page
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","theme":"yith-wonder","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull">
	<?php if ( ! class_exists( 'woocommerce' ) ) : ?>
		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'Sorry, but this template needs WooCommerce plugin to work.', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<?php else : ?>
	<!-- wp:spacer {"height":40} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":3} -->
			<h3><?php esc_html_e( 'Shop by category', 'yith-wonder' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/product-categories {"isHierarchical":false} /-->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:woocommerce/stock-filter -->
			<div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true" data-heading="<?php esc_attr_e( 'Filter by stock status', 'yith-wonder' ); ?>" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
			<!-- /wp:woocommerce/stock-filter -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:woocommerce/price-filter -->
			<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="<?php esc_attr_e( 'Filter by price', 'yith-wonder' ); ?>" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
			<!-- /wp:woocommerce/price-filter -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%"} -->
		<div class="wp-block-column" style="flex-basis:80%">
			<!-- wp:woocommerce/legacy-template {"template":"archive-product"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<?php endif; ?>
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"yith-wonder","tagName":"footer"} /-->
