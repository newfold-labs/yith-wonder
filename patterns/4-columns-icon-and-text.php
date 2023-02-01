<?php
/**
 * Title: 4 columns icon and text
 * Slug: yith-wonder/4-columns-icon-and-text
 * Categories: yith-wonder-page-sections
 * Keywords: sections, icons
 * Block Types: core/group, core/columns, core/image
 *
 * @package yith-wonder
 * @since 1.3.0
 */

?>

<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":105,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/services-shipping.svg" alt="" width="105"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'FREE SHIPPING<br>OVER $ 75', 'demo-contents', 'yith-wonder' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":50,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/services-payment.svg" alt="" width="50"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'SECURE<br>PAYMENTS', 'demo-contetns', 'yith-wonder' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":70,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/services-warranty.svg" alt="" width="70"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( '10 YEARS<br>WARRANTY', 'demo-contents', 'yith-wonder' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","width":130,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/services-review.svg" alt="" width="130"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
<h3 class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'POSITIVE REVIEWS<br>100,000+', 'demo-contents', 'yith-wonder' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
