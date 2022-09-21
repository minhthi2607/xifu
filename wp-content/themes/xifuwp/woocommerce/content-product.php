<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-sm-3 col-6">
        <div class="service-info text-center">	 
			<div class="service-info-image">
				 <a href="<?= get_permalink() ?>">  <!--link chuyển sang chi tiết sản phẩm	 -->
					<?php
					/**
					 * Hook: woocommerce_before_shop_loop_item_title.
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10 giá giảm
					 * @hooked woocommerce_template_loop_product_thumbnail - 10 //  lấy ảnh
					 */
					do_action( 'woocommerce_before_shop_loop_item_title' );
					?>
				</a>
			</div>			
			<div class="fw-bold mt-15">
				<a href="<?= get_permalink() ?>">	
					<?php  
					/**
					 * Hook: woocommerce_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_product_title - 10
					 */
					do_action( 'woocommerce_shop_loop_item_title' );
					?>				
				</a>
			</div>		
			<div class="light-blue mt-15 fw-bold">
				<?php
					/**
					 * Hook: woocommerce_after_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_rating - 5 đánh giá 
					 * @hooked woocommerce_template_loop_price - 10 gia sản phẩm
					 */
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
			</div>
			
			<div class="button-add-quantity mt-10">
                <?php
                /**
                 * Hook: woocommerce_after_shop_loop_item.
				 * 			
                 * @hooked woocommerce_template_loop_product_link_close - 5
				 * 
                 * @hooked woocommerce_template_loop_add_to_cart - 10 
                 */
				
                do_action( 'woocommerce_after_shop_loop_item' );
                ?>
            </div>

				
		</div>
	</div>
