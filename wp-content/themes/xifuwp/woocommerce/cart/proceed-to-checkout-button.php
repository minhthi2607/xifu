<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
 <div class="mt-30 text-center">
	<div class="group-btn">
		<div class="btn w-270 fw-bold">
			<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">
				<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
			</a>
		</div>
	</div>
	<div class="group-btn mt-20">
		<div class="btn w-270 btn-white">
			<a href="<?= wc_get_page_permalink('shop') ?>">Continute Shopping</a>
		</div>
	</div>
</div>

