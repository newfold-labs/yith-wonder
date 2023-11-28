<?php
/**
 * My Account pattern. This will be registered only if WooCommerce is enabled.
 *
 * @package yith-wonder
 * @since 1.0.0
 */

if ( class_exists( 'woocommerce' ) ) :
	/**
	 * Title: My-Account icon
	 * Slug: yith-wonder/my-account-icon
	 * Categories: yith-wonder-utilities
	 * Block Types: core/image
	 * Description: This pattern will ad a shortcut icon for the WooCommerce my-account area of your website. It will be registered only if WooCommerce is enabled.
	 */

	?>
	<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"yith-wonder-my-account-login-icon"} -->
	<figure class="wp-block-image size-full yith-wonder-my-account-login-icon"><a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/post-author.svg" alt=""></a></figure>
	<!-- /wp:image -->

	<?php

endif;