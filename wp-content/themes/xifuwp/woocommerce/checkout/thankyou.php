<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;
?>

<div class="woocommerce-order">

    <?php
    if ($order) :

        do_action('woocommerce_before_thankyou', $order->get_id());
        ?>

        <?php if ($order->has_status('failed')) : ?>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>

        <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
            <a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>"
               class="button pay"><?php esc_html_e('Pay', 'woocommerce'); ?></a>
            <?php if (is_user_logged_in()) : ?>
                <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"
                   class="button pay"><?php esc_html_e('My account', 'woocommerce'); ?></a>
            <?php endif; ?>
        </p>

    <?php else : ?>

    <?php endif; ?>
	<div class="section section-thanks-order">
            <div class="container">
                <div class="thanks-form">
                    <div class="row">
                        <div class="col-sm-7">
							<div class="thanks-form-infomation">
                                <div class="title-section-28 light-blue">
									THANK YOU FOR YOUR ORDER
                                </div>
                                <div class="name-item-smallest font-weight-light mt-60">
                                    An order confirmation has been sent to your email address: <?php echo $order->get_billing_email() ?>
                                </div>
                                <div class="item mt-20">
                                    <div class="name-item-bigger fw-bold text-uppercase">
                                        Order Information
                                    </div>
                                    <div class="item-content">
                                        <div class="mt-30">
                                            Order No: <?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                        </div>
                                        <div class="date mt-20">
                                          Order date:   <?php echo wc_format_datetime($order->get_date_created()); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $show_shipping = !wc_ship_to_billing_address_only() && $order->needs_shipping_address();
                                ?>
                                <div class="item mt-20">
                                    <div class="name-item-bigger fw-bold">
                                        BILLING INFORMATION
                                    </div>
                                    <div class="item-content">
                                        <div class="mt-10 description">
                                           Billing Address: <?php echo wp_kses_post($order->get_formatted_billing_address(esc_html__('N/A', 'woocommerce'))); ?>

                                            <?php if ($order->get_billing_phone()) : ?>
                                                <p class="woocommerce-customer-details--phone"><?php echo esc_html($order->get_billing_phone()); ?></p>
                                            <?php endif; ?>

                                            <?php if ($order->get_billing_email()) : ?>
                                                <p class="woocommerce-customer-details--email"><?php echo esc_html($order->get_billing_email()); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
								<div class="item mt-20">
                                    <div class="name-item-bigger fw-bold">
									PICKUP INFORMATION
                                    </div>
                                    <div class="item-content">
                                        <div class="mt-10 description">
                                           Date: <?php echo wc_format_datetime($order->get_date_created());// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><br/>
										   Address: <?php echo wp_kses_post($order->get_formatted_billing_address(esc_html__('N/A', 'woocommerce'))); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($show_shipping) : ?>
                                    <div class="item mt-40">
                                        <div class="description-bigger semi-bold">
                                            SHIPPING INFORMATION
                                        </div>
                                        <div class="item-content">
                                            <div class="mt-30">
                                                <?php echo wp_kses_post($order->get_formatted_shipping_address(esc_html__('N/A', 'woocommerce'))); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-40 group-btn">
                                    <a href="<?= wc_get_page_permalink('shop') ?>" class="btn w-270 btn-white">BACK TO PRODUCTS</a>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-5">
                            <div class="thanks-form-summary">
                                <div class="name-item">
                                     Summary
                                </div>
                                <div class="order-summary mt-10">
                                    <?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
                                    <?php do_action('woocommerce_thankyou', $order->get_id()); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php else : ?>

        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), null); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

    <?php endif; ?>

</div>
