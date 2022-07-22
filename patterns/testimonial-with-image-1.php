<?php
/**
 * Title: Testimonial with image #1
 * Slug: wonder/testimonial-with-image-1
 * Categories: wonder-testimonials
 * Keywords: testimonials
 * Block Types: core/group, core/image, core/quote, core/spacer
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","right":"35px","bottom":"35px","left":"35px"}}},"backgroundColor":"secondary-background","textColor":"secondary-foreground"} -->
<div class="wp-block-group has-secondary-foreground-color has-secondary-background-background-color has-text-color has-background" style="padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px">
	<!-- wp:quote {"className":"is-style-wonder-quote-with-icon","fontSize":"medium"} -->
	<blockquote class="wp-block-quote is-style-wonder-quote-with-icon has-medium-font-size">
		<p>I don't usually leave reviews but I have decided to for Wonder. I love there clothing and accessories I've never had a problem returning and parcels always arrive well within time stated.</p>
		<cite>JOCELYN HENDRIKSON</cite>
	</blockquote>
	<!-- /wp:quote -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:image {"align":"right","width":264,"height":305,"sizeSlug":"full","linkDestination":"none","className":"is-style-wonder-image-creative-alt"} -->
	<figure class="wp-block-image alignright size-full is-resized is-style-wonder-image-creative-alt"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/testimonials/testimonials-image-4.png" alt="" width="264" height="305"/></figure>
	<!-- /wp:image -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:html -->
	<div style="margin-bottom: -150px"></div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
