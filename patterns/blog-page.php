<?php
/**
 * Title: Blog page
 * Slug: yith-wonder/blog-page
 * Categories: yith-wonder-pages
 * Block Types: core/post-content
 *
 * @package yith-wonder
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","theme":"yith-wonder","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"layout":{"contentSize":"900px"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"4rem"}},"textColor":"primary"} -->
		<h1 class="has-text-align-center has-primary-color has-text-color" style="font-size:4rem"><?php esc_html_e( 'Our news', 'yith-wonder' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size"></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"80px"} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-query alignfull">
		<!-- wp:post-template -->
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"overlayColor":"primary","minHeight":100,"minHeightUnit":"%","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"70%","right":"50px","bottom":"0px","left":"50px"}}}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:70%;padding-right:50px;padding-bottom:0px;padding-left:50px;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"backgroundColor":"base","layout":{"inherit":true}} -->
				<div class="wp-block-group has-base-background-color has-background" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.3},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

					<!-- wp:spacer {"height":"20px"} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:post-excerpt {"moreText":"<?php echo esc_attr_e( 'READ MORE →', 'yith-wonder' ); ?>","textColor":"contrast","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

			<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

			<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"yith-wonder","tagName":"footer"} /-->
