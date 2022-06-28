<?php
/**
 * Title: Topbar
 * Slug: wonder/topbar
 * Categories: wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header topbar
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"backgroundColor":"cyan-bluish-gray","textColor":"white","layout":{"inherit":true}} -->
<div class="wp-block-group has-white-color has-cyan-bluish-gray-background-color has-text-color has-background">
	<!-- wp:paragraph -->
	<p class="has-text-align-center has-small-font-size">
		<?php echo esc_html_x( 'Add your topbar content here', 'sample content', 'wonder' ); ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
