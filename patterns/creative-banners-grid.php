<?php
/**
 * Title: Creative banners grid
 * Slug: yith-wonder/creative-banners-grid
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 * Description: A page section with 3 cover blocks in a creative grid layout. Sample images are jewelry related and can be replaced.
 *
 * @package yith-wonder
 * @since 1.3.0
 */

?>

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/watches.jpg","dimRatio":0,"minHeight":100,"minHeightUnit":"%","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/watches.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#ffffffc9"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#ffffffc9;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="has-x-large-font-size"><?php echo esc_html_x( 'Watches', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'NEW COLLECTIONS', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/accessories.jpg","dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/accessories.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#ffffffc9"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#ffffffc9;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
<h3 class="has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Accessories', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/jewelry.jpg","dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/jewelry.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#ffffffc9"},"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#ffffffc9;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
<h3 class="has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Jewelry', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
