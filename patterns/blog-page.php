<?php
/**
 * Title: Blog page
 * Slug: wonder/blog-page
 * Categories: wonder-pages
 * Block Types: core/post-content
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","theme":"wonder","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"overlayColor":"primary","minHeight":100,"minHeightUnit":"%","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"70%","right":"50px","bottom":"0px","left":"50px"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:70%;padding-right:50px;padding-bottom:0px;padding-left:50px;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"backgroundColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-background-color has-background"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.3},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="line-height:1"><!-- wp:image {"width":25,"height":25,"linkDestination":"none","className":"size-large"} -->
<figure class="wp-block-image is-resized size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/icons/post-author.svg" alt="" width="25" height="25"/></figure>
<!-- /wp:image -->

<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} /-->

<!-- wp:image {"width":25,"height":25,"linkDestination":"none","className":"size-large"} -->
<figure class="wp-block-image is-resized size-large"><img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/icons/post-date.svg" alt="" width="25" height="25"/></figure>
<!-- /wp:image -->

<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-excerpt {"moreText":"READ MORE →","fontSize":"small"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"wonder","tagName":"footer"} /-->
