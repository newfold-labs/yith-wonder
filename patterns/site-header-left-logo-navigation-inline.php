<?php
/**
 * Title: Site header (left logo - navigation inline)
 * Slug: yith-wonder/site-header-left-logo-navigation-inline
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 * Description: A left aligned site header with horizontal stacked elements: site logo, title, tagline and navigation block. WooCommerce mini cart display when plugin is enabled.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--40)"}}},"backgroundColor":"header-background","textColor":"header-foreground","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-header-foreground-color has-header-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--40)"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":150} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|header-foreground"}}}}} /-->
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"header-foreground","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"var(--wp--preset--spacing--40)"}},"fontSize":"x-small"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--40)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<?php if ( class_exists( 'woocommerce' ) ) : ?>
			<!-- wp:pattern {"slug":"yith-wonder/my-account-icon"} /-->
			<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","fontSize":"x-small"} /-->
			<?php endif; ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
