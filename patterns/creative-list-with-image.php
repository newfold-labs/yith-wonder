<?php
/**
 * Title: Creative list with image
 * Slug: yith-wonder/creative-list-with-image
 * Categories: yith-wonder-page-sections
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/pattern-bg.jpg","dimRatio":90,"customOverlayColor":"#e3efed","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"50px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:50px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim" style="background-color:#e3efed"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/pattern-bg.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0px","right":"40px","bottom":"0px","left":"20px"}}},"className":"animated fadeIn","layout":{"inherit":false}} -->
		<div class="wp-block-column is-vertically-aligned-center animated fadeIn" style="padding-top:0px;padding-right:40px;padding-bottom:0px;padding-left:20px;flex-basis:45%">
		<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","className":"is-style-yith-wonder-image-creative"} -->
		<figure class="wp-block-image aligncenter size-large is-style-yith-wonder-image-creative"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/yellow-woman.jpg" alt=""/></figure>
		<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"className":"animated fadeInRight"} -->
		<div class="wp-block-columns animated fadeInRight"><!-- wp:column {"width":"100px"} -->
		<div class="wp-block-column" style="flex-basis:100px"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/icon1.svg" alt=""/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textColor":"primary"} -->
		<h2 class="has-primary-color has-text-color"><?php echo esc_html_x( 'Confident shopping', 'demo-contents', 'yith-wonder' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Fast delivery, simply returns, quick response &amp; safe and secure shopping: discover our 30 days money back guarantee and start today to shop with trust.', 'demo-contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"70px"} -->
		<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"className":"animated fadeInRight"} -->
		<div class="wp-block-columns animated fadeInRight"><!-- wp:column {"width":"100px"} -->
		<div class="wp-block-column" style="flex-basis:100px"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/icon2.svg" alt=""/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textColor":"primary"} -->
		<h2 class="has-primary-color has-text-color"><?php echo esc_html_x( '100.000+ customers trust us', 'demo-contents', 'yith-wonder' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Fast delivery, simply returns, quick response &amp; safe and secure shopping: discover our 30 days money back guarantee and start today to shop with trust.', 'demo-contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"70px"} -->
		<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"className":"animated fadeInRight"} -->
		<div class="wp-block-columns animated fadeInRight"><!-- wp:column {"width":"100px"} -->
		<div class="wp-block-column" style="flex-basis:100px"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/icon3.svg" alt=""/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"textColor":"primary"} -->
		<h2 class="has-primary-color has-text-color"><?php echo esc_html_x( 'Our customer care', 'demo-contents', 'yith-wonder' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Fast delivery, simply returns, quick response &amp; safe and secure shopping: discover our 30 days money back guarantee and start today to shop with trust.', 'demo-contents', 'yith-wonder' ); ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
