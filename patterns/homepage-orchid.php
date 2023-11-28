<?php
/**
 * Title: Homepage orchid
 * Slug: yith-wonder/homepage-orchid
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 * Description: A corporate homepage template dedicated to company mission and customer care. WooCommerce products block inside. Designed around the Orchide Shades style variation of the theme.
 *
 * @package yith-wonder
 * @since 1.4.0
 */

?>
<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"70vh"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"v-tertiary-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-v-tertiary-primary-gradient-background has-background" style="min-height:70vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:spacer {"height":"5vh"} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/white-wave.svg","dimRatio":0,"focalPoint":{"x":0.5,"y":0},"minHeight":65,"minHeightUnit":"vh","isDark":false,"align":"full","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-contrast-color has-text-color" style="min-height:65vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/white-wave.svg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"huge"} -->
<p class="has-primary-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu. <a href="#">Donec at odio</a> ac erat bibendum pharetra. Mauris elementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"50px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"1rem","bottom":"1rem"}}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:50px;padding-top:1rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--70)">Explore our services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"8px","color":"#ffffff","radius":"50%"}},"className":"is-style-yith-wonder-image-with-shadow"} -->
<figure class="wp-block-image aligncenter size-large has-custom-border is-style-yith-wonder-image-with-shadow"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/business-woman.jpg" alt="" class="has-border-color" style="border-color:#ffffff;border-width:8px;border-radius:50%;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-yith-wonder-dashed-wide-separator"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-yith-wonder-dashed-wide-separator"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Our clients</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:gallery {"columns":6,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"5.06rem"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped">

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/wonder-logo-blue.png" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-yith-wonder-dashed-wide-separator"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-yith-wonder-dashed-wide-separator"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit amet!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Fusce tincidunt varius arcu. Donec at odio ac erat bibendum pharetra. Mauris elementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"align":"center","width":"171px","height":"153px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-01.png" alt="" style="width:171px;height:153px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"align":"center","width":"171px","height":"153px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-02.png" alt="" style="width:171px;height:153px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"align":"center","width":"171px","height":"153px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-03.png" alt="" style="width:171px;height:153px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/background-decoration.png","dimRatio":0,"isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/background-decoration.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"5.06rem"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/woman-with-phone.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"x-large"} -->
<p class="has-primary-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"700px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color" style="font-style:normal;font-weight:600;text-transform:uppercase">All-in-one services</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
<p class="has-normal-font-size" style="line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu. Donec at odio ac erat bibendum pharetra. Mauris elementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"50px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"1rem","bottom":"1rem"}}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:50px;padding-top:1rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--70)">Explore our services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"5.06rem","right":"5.06rem"}}},"gradient":"orchid-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-orchid-3-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:5.06rem;padding-bottom:var(--wp--preset--spacing--80);padding-left:5.06rem"><!-- wp:heading {"textAlign":"center","textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color">Latest from our blog</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"featuredImageAlign":"center","featuredImageSizeSlug":"large","addLinkToFeaturedImage":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:custom|xl-spacing","bottom":"0"}}},"className":"is-style-yith-wonder-latest-posts-boxed","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icons-bg.png","dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:custom|xl-spacing","bottom":"var:custom|xl-spacing"},"blockGap":"var:preset|spacing|70"}},"className":"is-style-yith-wonder-cover-unscaled-background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light is-style-yith-wonder-cover-unscaled-background" style="padding-top:var(--wp--custom--xl-spacing);padding-bottom:var(--wp--custom--xl-spacing)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icons-bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">This week’s deals</h2>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-new {"columns":5,"rows":1,"alignButtons":true} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5.06rem","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"gradient":"orchid-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-orchid-4-gradient-background has-background" style="padding-top:5.06rem;padding-bottom:0"><!-- wp:heading {"textAlign":"center","textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color">Our testimonials</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"5.06rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"0px","style":"none","radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:custom|xl-spacing"}},"backgroundColor":"base","className":"is-style-yith-wonder-group-with-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-yith-wonder-group-with-shadow has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:html -->
<div style="margin-top:-200px"></div>
<!-- /wp:html -->

<!-- wp:image {"align":"center","width":"200px","height":"200px","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-medium is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/testimonials/testimonials-image-3.jpg" alt="" style="object-fit:cover;width:200px;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Fusce tincidunt varius arcu. Donec at odio ac erat bibendum urna, vitae placerat dolor. pharetra. Mauris e lementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">MARTHA RAMOS</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"0px","style":"none","radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:custom|xl-spacing"}},"backgroundColor":"base","className":"is-style-yith-wonder-group-with-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-yith-wonder-group-with-shadow has-base-background-color has-background" style="border-style:none;border-width:0px;border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Fusce tincidunt varius arcu. Donec at odio ac erat bibendum urna, vitae placerat dolor. pharetra. Mauris e lementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">MARTHA RAMOS</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","width":"200px","height":"200px","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"5px"}},"borderColor":"secondary","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-medium is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/testimonials/testimonials-image-3.jpg" alt="" class="has-border-color has-secondary-border-color" style="border-width:5px;object-fit:cover;width:200px;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div style="margin-bottom:-200px"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:html -->
<div style="margin-bottom:-300px"></div>
<!-- /wp:html -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"300px"} -->
<div style="height:300px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/bean-bg.png","dimRatio":0,"isDark":false,"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"className":"is-style-yith-wonder-cover-unscaled-background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light is-style-yith-wonder-cover-unscaled-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/bean-bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"5.06rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Lorem ipsum dolor sit amet, consectetur!</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p>Fusce tincidunt varius arcu. Donec at odio ac erat bibendum pharetra. Mauris elementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor. Fusce tincidunt varius arcu. Donec at odio ac erat bibendum pharetra. Mauris elementum nunc est.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"3.38rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"2.25rem","right":"2.25rem"}}},"backgroundColor":"base","className":"is-style-yith-wonder-group-with-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-yith-wonder-group-with-shadow has-base-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:2.25rem;padding-bottom:var(--wp--preset--spacing--70);padding-left:2.25rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-a.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"2.25rem","right":"2.25rem"}}},"backgroundColor":"base","className":"is-style-yith-wonder-group-with-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-yith-wonder-group-with-shadow has-base-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:2.25rem;padding-bottom:var(--wp--preset--spacing--70);padding-left:2.25rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-b.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"2.25rem","right":"2.25rem"}}},"backgroundColor":"base","className":"is-style-yith-wonder-group-with-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-yith-wonder-group-with-shadow has-base-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--70);padding-right:2.25rem;padding-bottom:var(--wp--preset--spacing--70);padding-left:2.25rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/icon-c.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lorem ipsum dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt varius arcu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:custom|xl-spacing"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Contact us!</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:custom|xl-spacing"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="font-style:normal;font-weight:600;text-transform:uppercase">ALL-IN-ONE SERVICES</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Fusce tincidunt varius arcu. Donec at odio ac erat bibendum pharetra. Mauris elementum nunc est. Mauris at sollicitudin urna, vitae placerat dolor.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"1rem","bottom":"1rem"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="border-radius:100px;padding-top:1rem;padding-right:var(--wp--preset--spacing--70);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--70)">info@theorchid.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:custom|xl-spacing","left":"2.25rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|tertiary","width":"1px"},"top":{},"bottom":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--tertiary);border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="font-style:normal;font-weight:600">U.S.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">9101 International - Orlando - Florida - 32819 (407) 370-4392</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column" style="padding-top:1.5rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:1.5rem;padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="font-style:normal;font-weight:600">Finland</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Aattokatu 16 104 - Nadjaharju - Uusimaa - 18374</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"5.06rem"},"margin":{"top":"var:preset|spacing|40","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}}}} -->
<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:custom|xl-spacing","left":"2.25rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"var:preset|color|tertiary","width":"1px"},"top":{},"bottom":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"1.5rem","right":"1.5rem"}}}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--tertiary);border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:1.5rem"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="font-style:normal;font-weight:600">Italy</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">9101 International - Orlando - Florida - 32819 (407) 370-4392</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column" style="padding-top:1.5rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:1.5rem;padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="font-style:normal;font-weight:600">Japan</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Aattokatu 16 104 - Nadjaharju - Uusimaa - 18374</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/circle-gradient.png","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"isDark":false,"className":"is-style-yith-wonder-cover-unscaled-background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light is-style-yith-wonder-cover-unscaled-background"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/circle-gradient.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/orchid/yellow-phone.png" alt=""/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
