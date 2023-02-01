<?php
/**
 * Title: Banner with title and separator
 * Slug: yith-wonder/banner-with-title-and-separator
 * Categories: yith-wonder-banners
 * Keywords: banners
 * Block Types: core/group, core/columns, core/image, core/cover
 *
 * @package yith-wonder
 * @since 1.3.0
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/slide-01.jpg","dimRatio":0,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/demo-content/jewelry/slide-01.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"150px"} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:heading -->
<h2><?php echo esc_html_x( 'Engagement Rings', 'demo-contents', 'yith-wonder' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary","className":"is-style-yith-wonder-left-aligned-separator"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-yith-wonder-left-aligned-separator" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( _x( 'Lorem ipsum dolor sit amet, consectetur adispising elit.<br>Vestibulum varius, mi ut posuere iaculis, orci risus consequat urna, faucibus laoreet nunc just a quam.', 'demo-contents', 'yith-wonder' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"150px"} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
