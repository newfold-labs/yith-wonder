<?php
/**
 * Title: Testimonial with image #3
 * Slug: yith-wonder/testimonial-with-image-3
 * Categories: yith-wonder-testimonials
 * Keywords: testimonials
 * Block Types: core/cover, core/group, core/media-text, core/spacer
 * Description: A page section displaying a testimonial and the related quote in a full width cover block.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.jpg","dimRatio":80,"overlayColor":"secondary","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:0px;padding-left:var(--wp--preset--spacing--80)">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
				<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/martharamos.jpg" alt=""/></figure>
				<div class="wp-block-media-text__content">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
					<p class="has-huge-font-size" style="font-style:normal;font-weight:700"><?php echo wp_kses_post( _x( '“ Here I can find original items, low prices without to lose quality or sustainability.<br>Love it! “', 'demo-contents', 'yith-wonder' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":"50px"} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p><?php echo wp_kses_post( _x( 'Martha Ramos <br>Customer from 2007', 'demo-contents', 'yith-wonder' ) ); ?></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:media-text -->

			<!-- wp:html -->
			<div style="margin-bottom:-100px"></div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
