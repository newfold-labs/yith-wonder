<?php
/**
 * Title: Site header (left logo - navigation below)
 * Slug: yith-wonder/site-header-left-logo-navigation-below
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 * Description: A left aligned site header with site logo, title and tagline on a line and navigation block below. WooCommerce mini cart display when plugin is enabled.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"header-background","textColor":"header-foreground","className":"has-header-foreground-color has-text-color","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-header-foreground-color has-text-color has-header-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":150} /-->

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|header-titles"}}}},"textColor":"header-titles"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:site-tagline {"textColor":"header-titles"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

		<?php if ( class_exists( 'woocommerce' ) ) : ?>
		<!-- wp:pattern {"slug":" yith-wonder/my-account-icon"} /-->
		<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","fontSize":"x-small"} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
