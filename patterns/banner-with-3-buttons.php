<?php
/**
 * Title: Banner with 3 buttons
 * Slug: yith-wonder/banner-with-3-buttons
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"secondary-background"} -->
<div class="wp-block-columns has-secondary-background-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"layout":{"inherit":true}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-3/banner4.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary-foreground","fontSize":"normal"} -->
<p class="has-text-align-center has-secondary-foreground-color has-text-color has-normal-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'JUST LANDED', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"primary","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-primary-color has-text-color has-x-large-font-size"><?php echo esc_html_x( 'New Collections', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"className":"is-style-outline","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html_x( 'Shop Man', 'demo-contents', 'yith-wonder' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"className":"is-style-outline","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html_x( 'Shop Woman', 'demo-contents', 'yith-wonder' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"primary","style":{"spacing":{"padding":{"top":"10px","right":"30px","bottom":"10px","left":"30px"}}},"className":"is-style-outline","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color" href="#" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php echo esc_html_x( 'Accessories', 'demo-contents', 'yith-wonder' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
