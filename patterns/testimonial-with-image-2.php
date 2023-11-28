<?php
/**
 * Title: Testimonial with image #2
 * Slug: yith-wonder/testimonial-with-image-2
 * Categories: yith-wonder-testimonials
 * Keywords: testimonials
 * Block Types: core/columns, core/group, core/cover
 * Description: A page section displaying a testimonial and the related quote in a creative, squared, design.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
		<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/company/testimonial.jpg","dimRatio":50,"focalPoint":{"x":"0.50","y":"0.00"},"minHeight":700,"customGradient":"linear-gradient(90deg,rgb(0,167,156) 0%,rgb(1,175,141) 21%,rgba(255,255,255,0) 21%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:700px">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgb(0,167,156) 0%,rgb(1,175,141) 21%,rgba(255,255,255,0) 21%)"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/company/testimonial.jpg"" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|70","bottom":"0px","left":"var:preset|spacing|70"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"base","textColor":"contrast","layout":{"inherit":false}} -->
				<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:0px;padding-left:var(--wp--preset--spacing--70);font-style:normal;font-weight:500">
					<!-- wp:paragraph {"fontSize":"medium"} -->
					<p class="has-medium-font-size"><?php echo wp_kses_post( _x( '<strong>Martha Ramos<br></strong>Customer from 2007', 'demo-contents', 'yith-wonder' ) ); ?></p>
					<!-- /wp:paragraph -->
				</div>
			<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"bottom","width":"50%","className":"negative-left-margin"} -->
	<div class="wp-block-column is-vertically-aligned-bottom negative-left-margin" style="flex-basis:50%">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:custom|xl-spacing","right":"var:custom|xl-spacing","bottom":"var:custom|xl-spacing","left":"var:custom|xl-spacing"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"backgroundColor":"secondary-background","textColor":"secondary-foreground","fontSize":"x-large"} -->
		<div class="wp-block-group has-secondary-foreground-color has-secondary-background-background-color has-text-color has-background has-x-large-font-size" style="padding-top:var(--wp--custom--xl-spacing);padding-right:var(--wp--custom--xl-spacing);padding-bottom:var(--wp--custom--xl-spacing);padding-left:var(--wp--custom--xl-spacing);font-style:normal;font-weight:700">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( '“Here I can find original items, low prices without to lose quality or sustainability. Love it!“', 'demo-contents', 'yith-wonder' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
