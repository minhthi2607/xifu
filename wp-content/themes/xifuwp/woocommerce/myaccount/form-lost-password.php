<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<div class="section section-forgot-password section-banner-login">
	<div class="container">
		<div class="sign-in">
			<div class="row">
				<div class="col-sm-5">
					<div class="forgot-password-info">
						<div class="forgot-password-title">
							<div class="title-section-smaller yellow">
								FORGOT YOUR PASSWORD
							</div>
							<div class="description mt-20">
								<p class="mb-3"><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Enter your username or email address and we will send you a link to reset your password..', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>
							</div>
						</div>
						
					    <form method="post" action="?reset-link-sent=true" class="border-0 form-block woocommerce-ResetPassword lost_reset_password p-0">
							<div class="signin-content mt-30">							
								<input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="text" name="user_login" id="user_login" autocomplete="username" placeholder="Email or Username" />
							</div>

							<div class="clear"></div>

							<?php do_action( 'woocommerce_lostpassword_form' ); ?>
							<div class="form-back-forgot">
								<div class="row">
									<div class="col-sm-12">
										<div class="group-action mt-30">
											<div class="mt-20">
												<a class="text-capitalize text-underline" href="<?= get_site_url() . '/my-account' ?>">Back</a>
											</div>
										</div>
									</div>
								</div>

								<div class="mt-20 right">
									<div class="group-btn right">
										<input type="hidden" name="wc_reset_password" value="true" />
										<button type="submit" class="btn w-130 fw-b700" value="<?php esc_attr_e( 'Forgot Password', 'woocommerce' ); ?>"><?php esc_html_e( 'Forgot Password', 'woocommerce' ); ?></button>
									</div>
								</div>
							</div>

							<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

						</form>
					</div>
				</div>
			</div>
			<div class="banner-login-02">			
                <img src= "<?= get_template_directory_uri() ?>/assets/images/banner-login-02.jpg')" alt="">
            </div>
		</div>
	</div>
</div>

<?php
do_action( 'woocommerce_after_lost_password_form' );
