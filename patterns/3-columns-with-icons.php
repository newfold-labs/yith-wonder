<?php
/**
 * Title: 3 columns with icons
 * Slug: wonder/3-columns-with-icons
 * Categories: wonder-page-sections
 * Keywords: columns
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:columns {"style":{"spacing":{"blockGap":"140px"}}} -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"align":"center","width":61,"height":61,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/buysafe.png" alt="" width="61" height="61"/></figure>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
		<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600">Buy safe: our 30 days money back guarantee</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"align":"center","width":70,"height":52,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/freedelivery.png" alt="" width="70" height="52"/></figure>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
		<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600">Free delivery<br>for orders over 100$</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"align":"center","width":62,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/customercare.png" alt="" width="62" height="56"/></figure>
		<!-- /wp:image -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
		<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600">Contact our Customer Care for any question or doubt</p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
