<?php
/**
 * Title: Banner with CTA #
 * Slug: yith-wonder/banner-with-cta-1
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 * Description: A page section with a cover image and a call to action inside.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/wardrobecapsule.jpg","dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/wardrobecapsule.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}}} -->
		<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:0px;padding-left:var(--wp--preset--spacing--80)"><!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"backgroundColor":"tertiary","textColor":"base"} -->
		<div class="wp-block-group has-base-color has-tertiary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
		<h2 class="has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'BUILD YOUR CAPSULE WARDROBE', 'demo-contents', 'yith-wonder' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Cras dolor mi, mattis nec placerat at, dapibus auctor mauris. Integer vel velit semper, aliquam dui vitae, ultrices odio. Vivamus in nunc sed arcu congue tincidunt ut eu est. ', 'demo-contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Aliquam id nibh pulvinar, accumsan metus nec, tempus leo. Vestibulum feugiat velit lacus, in dictum dolor ultricies at. Integer vitae vehicula erat.', 'demo-contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"tertiary","style":{"border":{"radius":"0px"}},"className":"is-style-fill","fontSize":"normal"} -->
		<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-tertiary-color has-base-background-color has-text-color has-background" style="border-radius:0px"><strong><?php echo esc_html_x( 'START TO SHOP', 'demo-contents', 'yith-wonder' ); ?></strong></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:html -->
		<div style="margin-bottom:-150px"></div>
		<!-- /wp:html -->
	</div>
</div>
<!-- /wp:cover -->
