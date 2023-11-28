<?php
/**
 * Title: Homepage #2
 * Slug: yith-wonder/homepage-2
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 * Description: Homepage template containing banner sections, WooCommerce product blocks and call to actions.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

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
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg","dimRatio":60,"minHeight":680,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/banner2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
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

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"large"} -->
<h3 class="has-text-align-center has-primary-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Best seller of this month', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/triangle.png","dimRatio":0,"focalPoint":{"x":"0.00","y":"0.50"},"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/triangle.png" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"color":{}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">

<?php if ( class_exists( 'woocommerce' ) ) : ?>
<!-- wp:woocommerce/product-new {"columns":5,"rows":1,"alignButtons":true,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":false}} /-->
<?php endif; ?>

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:custom|4-xl-spacing"}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":61,"height":61,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/buysafe.svg" alt="" width="61" height="61"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Buy safe: our 30 days money back guarantee', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":70,"height":52,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/freedelivery.svg" alt="" width="70" height="52"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600"><?php echo wp_kses_post( _x( 'Free delivery<br>for orders over 100$', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":62,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/customercare.svg" alt="" width="62" height="56"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'Contact our Customer Care for any question or doubt', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"large"} -->
<h3 class="has-text-align-center has-primary-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'This week’s deals', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php if ( class_exists( 'woocommerce' ) ) : ?>
<!-- wp:woocommerce/product-new {"columns":5,"rows":1,"alignButtons":true,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":false}} /-->
<?php endif; ?>

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/wardrobecapsule.jpg","dimRatio":0,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-2/wardrobecapsule.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:0px;padding-left:var(--wp--preset--spacing--80)"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"base"} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'BUILD YOUR CAPSULE WARDROBE', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Cras dolor mi, mattis nec placerat at, dapibus auctor mauris. Integer vel velit semper, aliquam dui vitae, ultrices odio. Vivamus in nunc sed arcu congue tincidunt ut eu est. ', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Aliquam id nibh pulvinar, accumsan metus nec, tempus leo. Vestibulum feugiat velit lacus, in dictum dolor ultricies at. Integer vitae vehicula erat.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"primary","style":{"border":{"radius":"0px"}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background" style="border-radius:0px"><strong><?php echo esc_html_x( 'START TO SHOP', 'demo-contents', 'yith-wonder' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:html -->
<div style="margin-bottom:-150px"></div>
<!-- /wp:html --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
