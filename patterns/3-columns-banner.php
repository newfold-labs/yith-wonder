<?php
/**
 * Title: 3 columns banner
 * Slug: yith-wonder/3-columns-banner
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner1.jpg","dimRatio":0,"minHeight":680,"isDark":false,"className":"has-custom-content-position is-position-bottom-left"} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"backgroundColor":"primary","textColor":"background"} -->
			<p class="has-background-color has-primary-background-color has-text-color has-background"><strong>A romantic touch of black<br></strong>Start to shop <strong>⟶</strong></p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:cover -->
		</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg","dimRatio":60,"minHeight":680,"style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}}}} -->
		<div class="wp-block-cover" style="padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-left has-large-font-size">JEANS &amp;<br>DENIM</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p>Start to shop <strong>⟶</strong></p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:cover -->
		</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner3.jpg","dimRatio":0,"minHeight":680,"className":"has-custom-content-position is-position-bottom-left"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-2/banner3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"backgroundColor":"black","textColor":"background"} -->
		<p class="has-background-color has-black-background-color has-text-color has-background"><strong>Accessories</strong><br>Start to shop <strong>⟶</strong></p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
