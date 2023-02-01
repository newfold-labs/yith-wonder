<?php
/**
 * Title: Homepage jewels
 * Slug: yith-wonder/homepage-jewels
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 *
 * @package yith-wonder
 * @since 1.3.0
 */

?>

<!-- wp:pattern {"slug":"yith-wonder/banner-with-title-and-separator"} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/product-best-sellers {"columns":4,"rows":1,"alignButtons":true,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":true}} /-->

<!-- wp:pattern {"slug":"yith-wonder/banner-with-grid-gallery"} /-->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","textColor":"contrast"} -->
<h2 class="has-text-align-center has-contrast-color has-text-color"><?php echo esc_html_x( 'Our new collection', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"50px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"yith-wonder/5-columns-product-categoriers-banner"} /-->

<!-- wp:spacer {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","textColor":"contrast"} -->
<h2 class="has-text-align-center has-contrast-color has-text-color"><?php echo esc_html_x( 'Our new collection', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"yith-wonder/creative-banners-grid"} /-->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"textColor":"contrast"} -->
<h2 class="has-text-align-center has-contrast-color has-text-color" style="margin-top:var(--wp--preset--spacing--70);margin-right:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);margin-left:var(--wp--preset--spacing--70)">NEWS</h2>
<!-- /wp:heading -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/background-blog.jpg","id":1582,"dimRatio":0,"focalPoint":{"x":0.5,"y":1},"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|80","left":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1582" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/background-blog.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1450px","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"large","addLinkToFeaturedImage":true,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:pattern {"slug":"yith-wonder/4-columns-icon-and-text"} /-->
