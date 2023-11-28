<?php
/**
 * Title: Testimonial with image #1
 * Slug: yith-wonder/testimonial-with-image-1
 * Categories: yith-wonder-testimonials
 * Keywords: testimonials
 * Block Types: core/group, core/image, core/quote, core/spacer
 * Description: A page section displaying a testimonial and the related quote in a creative, right aligned, design.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"secondary-background","textColor":"secondary-foreground"} -->
<div class="wp-block-group has-secondary-foreground-color has-secondary-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:quote {"className":"is-style-yith-wonder-quote-with-icon","fontSize":"medium"} -->
	<blockquote class="wp-block-quote is-style-yith-wonder-quote-with-icon has-medium-font-size">
		<p><?php echo esc_html_x( 'I don\'t usually leave reviews but I have decided to for Wonder. I love there clothing and accessories I\'ve never had a problem returning and parcels always arrive well within time stated.', 'demo-contents', 'yith-wonder' ); ?></p>
		<cite><?php echo esc_html_x( 'JOCELYN ERICSSON', 'demo-contents', 'yith-wonder' ); ?></cite>
	</blockquote>
	<!-- /wp:quote -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:image {"align":"right","sizeSlug":"full","linkDestination":"none","className":"is-style-yith-wonder-image-creative-2"} -->
	<figure class="wp-block-image alignright size-full is-resized is-style-yith-wonder-image-creative-2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/testimonials/testimonials-image-4.jpg" alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:html -->
	<div style="margin-bottom: -150px"></div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
