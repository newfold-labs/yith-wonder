<?php
/**
 * Title: Banner with 3 buttons
 * Slug: wonder/banner-with-3-buttons
 * Categories: wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:columns {"style":{"color":{"background":"#e9e9e9"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns has-background" style="background-color:#e9e9e9;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"layout":{"inherit":true}} -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-3/banner4.jpg" alt="" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"luminous-vivid-amber","fontSize":"normal"} -->
	<p class="has-text-align-center has-luminous-vivid-amber-color has-text-color has-normal-font-size" style="font-style:normal;font-weight:500">JUST LANDED</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","textColor":"secondary","fontSize":"x-large"} -->
	<h2 class="has-text-align-center has-secondary-color has-text-color has-x-large-font-size">New Collections</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px">Shop Man</a></div>
	<!-- /wp:button -->

	<!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px">Shop Woman</a></div>
	<!-- /wp:button -->

	<!-- wp:button {"style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px">Accesories</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
