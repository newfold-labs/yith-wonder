<?php
/**
 * Title: Site footer 3 columns
 * Slug: yith-wonder/site-footer-3-columns
 * Categories: yith-wonder-site-footer
 * Block Types: core/columns, core/navigation
 * Keywords: site footer
 *
 * @package yith-wonder
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"35px"}},"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":"100px"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo {"width":280} /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top","layout":{"inherit":true}} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":3,"textColor":"secondary"} -->
	<h3 class="has-secondary-color has-text-color"><?php echo esc_html_x( 'About us', 'demo contents', 'yith-wonder' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis tincidunt tortor in bibendum. Phasellus tellus elit, placerat et orci id, commodo finibus tortor.', 'demo contents', 'yith-wonder' ); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":3,"textColor":"secondary"} -->
	<h3 class="has-secondary-color has-text-color"><?php echo esc_html_x( 'Customer service', 'demo contents', 'yith-wonder' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#404040","openInNewTab":true,"size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

	<!-- wp:social-link {"url":"#","service":"twitter"} /-->

	<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

	<!-- wp:social-link {"url":"#","service":"instagram"} /-->

	<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
	<!-- /wp:social-links -->

	<!-- wp:separator {"backgroundColor":"secondary-background","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-secondary-background-color has-alpha-channel-opacity has-secondary-background-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
	<p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Wonder – A WordPress Block theme by YITH', 'demo contents', 'yith-wonder' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
