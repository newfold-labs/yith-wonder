<?php
/**
 * Title: Site header (left logo - navigation inline)
 * Slug: yith-wonder/site-header-left-logo-navigation-inline
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"backgroundColor":"secondary-background","textColor":"secondary-foreground","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-secondary-foreground-color has-secondary-background-background-color has-text-color has-background" style="padding-top:30px;padding-bottom:30px">
	<!-- wp:group {"style":{"spacing":{"blockGap":"50px"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":150} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-foreground"}}}}} /-->
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"secondary-foreground","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"30px"}},"fontSize":"x-small"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
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
