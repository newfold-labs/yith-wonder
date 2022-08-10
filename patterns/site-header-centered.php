<?php
/**
 * Title: Site header centered
 * Slug: yith-wonder/site-header-centered
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"backgroundColor":"secondary-background","textColor":"secondary-foreground","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-secondary-foreground-color has-secondary-background-background-color has-text-color has-background" style="padding-top:15px;padding-bottom:15px">
	<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group">
		<?php if ( class_exists( 'woocommerce' ) ) : ?>
		<!-- wp:pattern {"slug":" yith-wonder/my-account-icon"} /-->
		<!-- wp:woocommerce/mini-cart {"addToCartBehaviour":"open_drawer","fontSize":"x-small"} /-->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":250} /-->
		<!-- wp:navigation {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
