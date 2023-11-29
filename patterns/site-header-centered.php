<?php
/**
 * Title: Site header centered
 * Slug: yith-wonder/site-header-centered
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 * Description: A centered site header with site logo and navigation below. Above, two columns to add socials or contact informations. WooCommerce minicart display when plugin is enabled.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"header-background","textColor":"header-foreground","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-header-foreground-color has-header-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--40)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group">
		<?php if ( class_exists( 'woocommerce' ) ) : ?>
		<!-- wp:pattern {"slug":" yith-wonder/my-account-icon"} /-->
		<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","fontSize":"x-small"} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:site-logo {"width":250} /-->
		<!-- wp:navigation {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
