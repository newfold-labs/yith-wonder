<?php
/**
 * Title: Homepage #1
 * Slug: yith-wonder/homepage-1
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 * Description: Homepage template containing hero section, alternated banner sections, WooCommerce product blocks and testimonial section.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"backgroundColor":"header-background","textColor":"header-foreground","spacing":{"blockGap":"0px","padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-header-foreground-color has-header-background-background-color has-text-color has-background" style="
padding-top:0px;padding-bottom:0px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"header-titles","fontSize":"huge"} -->
<h2 class="has-header-titles-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_x( 'New Spring Casuals', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50"}}},"fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><strong><?php echo esc_html_x( 'Shop now', 'demo-contents', 'yith-wonder' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/banner-image.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/black.jpg","dimRatio":0,"minHeight":100,"minHeightUnit":"%","align":"center"} -->
<div class="wp-block-cover aligncenter" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/black.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"inherit":false,"contentSize":"70%"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
<h3 class="has-primary-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Black is the new black.', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Gumbo beet greens corn soko endive gumbo gourd. ', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. ', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Dandelion cucumber earthnut pea peanut soko zucchini.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var(--wp--preset--spacing--40)","bottom":"var:preset|spacing|20","left":"var(--wp--preset--spacing--40)"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><strong><?php echo esc_html_x( 'VIEW OUR ACCESSORIES', 'demo-contents', 'yith-wonder' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"center","layout":{"inherit":false,"contentSize":"70%"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
<h3 class="has-primary-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Jeans &amp; Denim collection', 'demo-contents', 'yith-wonder' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Gumbo beet greens corn soko endive gumbo gourd. ', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. ', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
<p style="line-height:2"><?php echo esc_html_x( 'Dandelion cucumber earthnut pea peanut soko zucchini.', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var(--wp--preset--spacing--40)","bottom":"var:preset|spacing|20","left":"var(--wp--preset--spacing--40)"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><strong><?php echo esc_html_x( 'SHOP NOW', 'demo-contents', 'yith-wonder' ); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/denim.jpg","dimRatio":0,"minHeight":100,"minHeightUnit":"%","align":"center"} -->
<div class="wp-block-cover aligncenter" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/denim.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"has-2-columns"} -->
<div class="wp-block-columns has-2-columns"><!-- wp:column {"width":"34%","className":"animate-fade-right","layout":{"inherit":true}} -->
<div class="wp-block-column animate-fade-right" style="flex-basis:34%"><!-- wp:cover {"customOverlayColor":"#f0f0f0","isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f0f0f0"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/glasses.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","textColor":"very-dark-gray"} -->
<p class="has-text-align-center has-very-dark-gray-color has-text-color"><?php echo esc_html_x( 'DISCOVERY THE TREND OF', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":50,"fontStyle":"normal","fontWeight":"800"}},"textColor":"very-dark-gray"} -->
<p class="has-text-align-center has-very-dark-gray-color has-text-color" style="font-size:50px;font-style:normal;font-weight:800"><?php echo esc_html_x( 'GLASSES', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66%","className":"animate-fade-left","layout":{"inherit":true}} -->
<div class="wp-block-column animate-fade-left" style="flex-basis:66%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/Intersection-1@2x.jpg","dimRatio":80,"overlayColor":"primary","minHeight":100,"minHeightUnit":"%"} -->
<div class="wp-block-cover" style="min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/Intersection-1@2x.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--40)"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":50,"fontStyle":"normal","fontWeight":"700","lineHeight":1.2}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-size:50px;font-style:normal;font-weight:700;line-height:1.2"><?php echo wp_kses_post( _x( 'SAVE 20% IN<br>MAN CLOTHING', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":18}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-size:18px"><?php echo esc_html_x( 'Enjoy a special -20% discount on man category', 'demo-contents', 'yith-wonder' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.jpg","dimRatio":80,"overlayColor":"primary","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:0px;padding-left:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:media-text {"align":"","mediaPosition":"right","mediaType":"image"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/home-1/martharamos.jpg" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="font-style:normal;font-weight:700"><?php echo wp_kses_post( _x( '“ Here I can find original items, low prices without to lose quality or sustainability.<br>Love it! “', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( _x( 'Martha Ramos <br>Customer from 2007', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:html -->
<div style="margin-bottom:-100px"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"150px"} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
