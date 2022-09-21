<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <div class="section section-standard-page" style="padding: 50px 0">
        <div class="container">
            <div class="shop">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <div class="shop-title text-center">
                                <div class="title-section font-weight-medium">
                                    Your cart is currently empty.
                                </div>
                                <div class="mt-30">
                                    <div class="return-to-shop group-btn">
                                        <a class="btn w-180 wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
                                            <?php
                                            /**
                                             * Filter "Return To Shop" text.
                                             *
                                             * @since 4.6.0
                                             * @param string $default_text Default text.
                                             */
                                            echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to shop', 'woocommerce' ) ) );
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
