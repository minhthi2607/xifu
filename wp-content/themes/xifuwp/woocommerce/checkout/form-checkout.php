<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" 
action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<div class="section section-checkout">
            <div class="container">
                <div class="section-checkout-form">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="checkout-content">                            
								<div class="content-title">
									<div class="title-section-smaller light-blue">
										CHECKOUT
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="checkout-content mt-40 form-block form-block-checkout">
								<?php if ($checkout->get_checkout_fields()) : ?>
									<?php do_action('woocommerce_checkout_before_customer_details'); ?>
									<!--form billing-->
									<div class="checkout-content-fields mt-30">
										<?php do_action('woocommerce_checkout_billing'); ?>
									</div>
									<!--form shipping-->
									<div class="checkout-content-fields mt-30">
										<?php do_action('woocommerce_checkout_shipping'); ?>
									</div>
									
									<?php do_action('woocommerce_checkout_after_customer_details'); ?>

								<?php endif; ?>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="checkout-form-summary mt-40">
								<?php do_action('woocommerce_checkout_before_order_review_heading'); ?>
								<?php do_action('woocommerce_checkout_before_order_review'); ?>
								<div class="d-flex justify-content-between align-items-center">
									<div class="title-section-20 fw-bold">
										Summary
									</div>
									<div class="text-underline light-blue">
										<a href="<?= wc_get_page_permalink('cart') ?>">Edit Cart</a>
									</div>
								</div>
								<div class="order-summary mt-10 description-bigger">
									<div id="order_review" class="woocommerce-checkout-review-order">
										<?php do_action('woocommerce_checkout_order_review'); ?>
										
									</div>
								</div>                           
							</div>
							<div class="order-payment mt-20">
								<div class="name-item-smaller font-weight-bold text-uppercase">
								PAYMENT METHOD
								</div>
								<div class="payment-methods mt-45">							
									<?php woocommerce_checkout_payment() ?>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </div>
    </div>
</form>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
