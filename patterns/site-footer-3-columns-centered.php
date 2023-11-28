<?php
/**
 * Title: Site footer 3 columns centered
 * Slug: yith-wonder/site-footer-3-columns-centered
 * Categories: yith-wonder-site-footer
 * Block Types: core/columns, core/navigation
 * Keywords: site footer
 * Description: A footer template based on 3 columns layout. Phone number, site logo, social icons. Below a full row with the site navigation and another with credits.
 *
 * @package yith-wonder
 * @since 1.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"inherit":true}} -->
<div class="wp-block-group">
	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","layout":{"inherit":true}} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size" style="font-style:normal;font-weight:600"><img style="width: 30px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/phone-handset-black.svg" alt="">   <?php echo esc_attr_x( 'Call 800 - 647 - 927', 'demo contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-logo {"width":280,"align":"center"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#404040","openInNewTab":true,"size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

		<!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /-->

		<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"backgroundColor":"secondary-background","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-secondary-background-color has-alpha-channel-opacity has-secondary-background-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:navigation {"ref":238,"layout":{"type":"flex","justifyContent":"center"}} /-->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
	<p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Wonder – A WordPress Block theme by YITH', 'demo contents', 'yith-wonder' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
