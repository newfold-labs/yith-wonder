<?php
/**
 * Title: Banner 1/3 - 2/3
 * Slug: wonder/banner-1-3-2-3
 * Categories: wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:columns {"className":"has-2-columns"} -->
<div class="wp-block-columns has-2-columns">
	<!-- wp:column {"width":"34%","className":"animate-fade-right","layout":{"inherit":true}} -->
	<div class="wp-block-column animate-fade-right" style="flex-basis:34%">
		<!-- wp:cover {"customOverlayColor":"#f0f0f0","isDark":false} -->
		<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f0f0f0"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-group"><!-- wp:image {"width":472,"height":182,"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-1/glass@2x.png" alt="" width="472" height="182"/></figure>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"center","textColor":"very-dark-gray"} -->
		<p class="has-text-align-center has-very-dark-gray-color has-text-color">DISCOVERY THE TREND OF</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":50,"fontStyle":"normal","fontWeight":"800"}},"textColor":"very-dark-gray"} -->
		<p class="has-text-align-center has-very-dark-gray-color has-text-color" style="font-size:50px;font-style:normal;font-weight:800">GLASSES</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66%","className":"animate-fade-left","layout":{"inherit":true}} -->
	<div class="wp-block-column animate-fade-left" style="flex-basis:66%">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-1/Intersection-1@2x.jpg","dimRatio":70,"overlayColor":"secondary","minHeight":100,"minHeightUnit":"%"} -->
		<div class="wp-block-cover" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-1/Intersection-1@2x.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":50,"fontStyle":"normal","fontWeight":"700","lineHeight":1.2}},"textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color" style="font-size:50px;font-style:normal;font-weight:700;line-height:1.2">SAVE 20% IN<br>MAN CLOTHING</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":18}},"textColor":"background"} -->
		<p class="has-text-align-center has-background-color has-text-color" style="font-size:18px">Enjoy a special -20% discount on man category</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
