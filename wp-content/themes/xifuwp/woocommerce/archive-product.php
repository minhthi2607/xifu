<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//  remove_action( 'woocommerce_before_main_content', 'woocomwoocommerce_breadcrumb', 20 );
do_action('woocommerce_before_main_content');
?>
<div class="section-banner" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/banner-service-pricing-01.jpg')">
	<div class="container">
		<div class="section-heading">
			<div class="title-section-bigger light-blue">
				<?php
				if (is_shop()) {
					if (is_search()) {
						woocommerce_page_title();
					} else {
						echo tr_options_field('theme_options.shop_title');
					}
				} else {
				?>
					<?php woocommerce_page_title(); ?>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

<div class="section section-service-prices">
	<div class="container">
		<div class="our-affordable-form">
			<div class="our-affordable-title">
				<div class="title-section">
					<?php
					if (!empty(tr_options_field('theme_options.sub_title'))) :
					?>
						<?= tr_options_field('theme_options.sub_title') ?>
					<?php endif; ?>
				</div>
				<div class="mt-10 description">
					<?php
					if (!empty(tr_options_field('theme_options.shop_description'))) {
					?>
						<?= tr_options_field('theme_options.shop_description') ?>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="our-affordable-categories mt-60">
			<div class="row">
				<div class="col-sm-3">
					<div class="categories-form">
						<div class="categories-list mt-25">
							<div class="categories-item">
								<?php echo do_shortcode('[yith_wcan_filters slug="draft-preset"]') ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<?php
						if (woocommerce_product_loop()) {
							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked woocommerce_output_all_notices - 10  ghi chú
							 * @hooked woocommerce_result_count - 20 đếm sản phẩm
							 * @hooked woocommerce_catalog_ordering - 30 phân loại sản phẩm
							 */
							do_action('woocommerce_before_shop_loop');

							woocommerce_product_loop_start();  // bắt đàu vòng lặp sản phẩm

							if (wc_get_loop_prop('total')) {
								while (have_posts()) {
									the_post();
									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action('woocommerce_shop_loop');

									wc_get_template_part('content', 'product');
								}
							}

							woocommerce_product_loop_end(); // kết thúc vòng lặp

							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10 phân trang chuyển sang file pagination  trong folder loop 
							 * 										để custom lại hoặc thay đổi icon và custom lại bằng css
							 */

							do_action('woocommerce_after_shop_loop');
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10 không có sản phẩm nào t
							 */
							do_action('woocommerce_no_products_found');
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action('woocommerce_sidebar');

get_footer('shop');
