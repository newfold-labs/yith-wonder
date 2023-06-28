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
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner1.jpg","dimRatio":0,"minHeight":680,"isDark":false,"className":"has-custom-content-position is-position-bottom-left"} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link" href="#" style="border-radius:0px"><?php echo wp_kses_post( _x( '<strong>A romantic touch of black<br></strong>Start to shop <strong>⟶</strong>', 'demo-contents', 'yith-wonder' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg","dimRatio":60,"minHeight":680,"style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}}}} -->
<div class="wp-block-cover" style="padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"}},"fontSize":"huge"} -->
<p class="has-text-align-left has-huge-font-size" style="font-style:normal;font-weight:800;line-height:1.2"><?php echo wp_kses_post( _x( 'JEANS &amp;<br>DENIM', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-foreground","textColor":"base","style":{"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-secondary-foreground-background-color has-text-color has-background" href="#" style="border-radius:0px"><?php echo wp_kses_post( _x( 'Start to shop <strong>⟶</strong>', 'demo-contents', 'yith-wonder' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner4.jpg","dimRatio":0,"minHeight":680,"className":"has-custom-content-position is-position-bottom-left"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-foreground","textColor":"base","style":{"border":{"radius":"0px"}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-base-color has-secondary-foreground-background-color has-text-color has-background" href="#" style="border-radius:0px"><?php echo wp_kses_post( _x( '<strong>Accessories</strong><br>Start to shop <strong>⟶</strong>', 'demo-contents', 'yith-wonder' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>

<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
