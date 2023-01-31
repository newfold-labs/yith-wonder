<?php
/**
 * Title: Banner with grid gallery
 * Slug: yith-wonder/banner-with-grid-gallery
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/slide-01.jpg","id":1482,"dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1482" alt="" src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/slide-01.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
<h2 style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'Discover our new jewels', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|70","bottom":"var:preset|spacing|30","left":"var:preset|spacing|70"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'SHOP NOW', 'demo-contents', 'yith-wonder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"90px"} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":1496,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-01-1024x1024.jpg" alt="" class="wp-image-1496"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'GOLDEN RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":1497,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-03-1024x1024.jpg" alt="" class="wp-image-1497"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'ENGAGMENTS RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":1499,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-04-1024x1024.jpg" alt="" class="wp-image-1499"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'EARRINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":1500,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-05-1024x1024.jpg" alt="" class="wp-image-1500"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'PLATINUM RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":1498,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-06-1024x1024.jpg" alt="" class="wp-image-1498"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'BRACELETS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":1501,"sizeSlug":"large","linkDestination":"custom"} -->
	<figure class="wp-block-image size-large"><a href="#"><img src="http://wonder.test/jewelry/wp-content/uploads/sites/3/2023/01/prodotto-09-1024x1024.jpg" alt="" class="wp-image-1501"/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'CHARMS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
	<!-- /wp:image -->
</figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
