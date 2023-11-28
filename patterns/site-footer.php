<?php
/**
 * Title: Site footer
 * Slug: yith-wonder/site-footer
 * Categories: yith-wonder-site-footer
 * Block Types: core/columns, core/navigation
 * Keywords: site footer
 * Description: A classic footer template fully focused on navigation blocks divided in columns.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Our company', 'demo contents', 'yith-wonder' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"overlayMenu":"never","style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Our products', 'demo contents', 'yith-wonder' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"overlayMenu":"never","style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Special sales', 'demo contents', 'yith-wonder' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"overlayMenu":"never","style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2,"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Customer service', 'demo contents', 'yith-wonder' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"overlayMenu":"never","style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:heading {"level":2,"textColor":"secondary","fontSize":"normal"} -->
			<h2 class="wp-block-heading has-secondary-color has-text-color has-normal-font-size"><?php echo esc_html_x( 'Stay connected', 'demo contents', 'yith-wonder' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis tincidunt tortor in bibendum. Phasellus tellus elit, placerat et orci id, commodo finibus tortor.', 'demo-contents', 'yith-wonder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#404040","customIconBackgroundColor":"#f7f7f7","iconBackgroundColorValue":"#f7f7f7","openInNewTab":true,"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->

		<!-- wp:social-link {"url":"#","service":"youtube"} /-->

		<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

		<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

		<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

		<!-- wp:social-link {"url":"#","service":"twitter"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	</ul>
	<!-- /wp:social-links -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
	<p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Wonder – A WordPress Block theme by YITH', 'demo contents', 'yith-wonder' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
