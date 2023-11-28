<?php
/**
 * Title: 404
 * Slug: yith-wonder/404-page
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 * Description: The 404 page template with large 404 text and a search box below.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","theme":"yith-wonder","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"120px"}}} -->
	<h2 class="has-text-align-center" style="font-size:120px">4🙃4</h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size"><?php esc_html_e( 'Ooops, page not found.', 'yith-wonder' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Sorry, but the requested page is not found. You might try a search below.', 'yith-wonder' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'yith-wonder' ); ?>","showLabel":false,"width":75,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'yith-wonder' ); ?>","buttonUseIcon":true,"align":"center"} /-->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"yith-wonder","tagName":"footer"} /-->
