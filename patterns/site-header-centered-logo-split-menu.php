<?php
/**
 * Title: Site header with splitted menu
 * Slug: yith-wonder/site-header-splitted-menu
 * Categories: yith-wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 * Description: A site header with navigation menu splitted by the site logo.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--40)","padding":{"top":"var(--wp--preset--spacing--40)","right":"0px","bottom":"var(--wp--preset--spacing--40)","left":"0px"}}},"backgroundColor":"header-background","textColor":"header-foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-header-foreground-color has-header-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:0px;padding-bottom:var(--wp--preset--spacing--40);padding-left:0px">
	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"isTopLevelLink":true} /-->

		<!-- wp:site-logo {"width":150} /-->

		<!-- wp:navigation-link {"isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"isTopLevelLink":true} /-->

		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
