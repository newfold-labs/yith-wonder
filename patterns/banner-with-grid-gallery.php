<?php
/**
 * Title: Banner with grid gallery
 * Slug: yith-wonder/banner-with-grid-gallery
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 * Description: A page section of two columns containing a call to action and a gallery grid miming product categories.
 *
 * @package yith-wonder
 * @since 1.3.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/slide-01.jpg","dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:custom|xl-spacing","bottom":"var:custom|xl-spacing"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--custom--xl-spacing);padding-bottom:var(--wp--custom--xl-spacing)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/slide-01.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2><?php echo esc_html_x( 'Discover our new jewels', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|70","bottom":"var:preset|spacing|30","left":"var:preset|spacing|70"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'SHOP NOW', 'demo-contents', 'yith-wonder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"100px"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/golden_rings.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'GOLDEN RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/engagement_rings.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'ENGAGMENTS RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/earrings.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'EARRINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/platinum_rings.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'PLATINUM RINGS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/bracelets.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'BRACELETS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/charms.jpg" alt=""/></a><figcaption class="wp-element-caption"><?php echo esc_html_x( 'CHARMS', 'demo-contents', 'yith-wonder' ); ?></figcaption></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
