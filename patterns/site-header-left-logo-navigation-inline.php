<?php
/**
 * Title: Site header (left logo - navigation inline)
 * Slug: wonder/site-header-left-logo-navigation-inline
 * Categories: wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","right":"","bottom":"15px","left":""}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-bottom:15px">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:navigation {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} /-->
		<?php if ( class_exists( 'woocommerce' ) ) : ?>
		<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","fontSize":"x-small","fontWeight":"600"} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
