<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'register') {
    ?>
    <?php
    if ('yes' === get_option('woocommerce_enable_myaccount_registration')) {
        ?>
<div class="section section-register section-banner-login">
    <div class="container">
        <div class="sign-in">
            <div class="row">
                <div class="col-sm-5">           
                        <div class="register-info">
                            <div class="register-title">
                                <div class="title-section-smaller yellow">
                                    REGISTER NOW
                                    </div>
                                    <div class="description mt-20">
                                            Are you a member?
                                        <a class="text-capitalize yellow"
                                        href="<?= wc_get_page_permalink('myaccount') ?>">
                                            <span class="text-underline">Loign Now</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="login-content mt-40">
                                    <form class="border-0 form-block mt-60 woocommerce-form woocommerce-form-register register p-0" method="post">
                                        <?php do_action('woocommerce_register_form_start'); ?>

                                        <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">                                                    
                                                        <input type="text"
                                                            class="woocommerce-Input woocommerce-Input--text input-text form-control"
                                                            name="username"
                                                            placeholder="Username"
                                                            id="reg_username" autocomplete="username"
                                                            value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="email"
                                                        class="form-control woocommerce-Input woocommerce-Input--text input-text"
                                                        name="email"
                                                        placeholder="E-mail"
                                                        id="reg_email" autocomplete="email"
                                                        value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>

                                                </div>
                                            </div>
                                        </div>

                                        <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">                                                  
                                                        <input type="password"
                                                            class="form-control woocommerce-Input woocommerce-Input--text input-text"
                                                            name="password"
                                                            placeholder="Password"
                                                            id="reg_password" autocomplete="new-password"/>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php else : ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p><?php esc_html_e('A password will be sent to your email address.', 'woocommerce'); ?></p>
                                                </div>
                                            </div>

                                        <?php endif; ?>
                                        
                                        <div class="row mt-20">
                                            <div class="col-sm-12">
                                                <?php do_action('woocommerce_register_form'); ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                                                <div class="mt-20 right">
                                                    <div class="group-btn right">
                                                        <button type="submit"
                                                            class="btn w-130 fw-b700 woocommerce-Button woocommerce-button woocommerce-form-register__submit"
                                                            name="register"
                                                            value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Login Now', 'woocommerce'); ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php do_action('woocommerce_register_form_end'); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    }
    ?>
    <?php
} else {
    ?>
    <div class="section section-login section-banner-login">
        <div class="container">
            <div class="sign-in">
                <div class="row">
                    <div class="col-sm-5">
                            <form class="form-block"
                                  method="post">
                                <?php do_action('woocommerce_login_form_start'); ?>
								<div class="sign-in-info">
									<div class="signin-title">
										<div class="title-section-smaller yellow">
											SIGN IN
										</div>
									</div>
									<div class="mt-20">
                                        Not a member yet?
										 <span class="yellow">
											<a  href="?action=register">Register now</a>	
										</span>
                                    </div>
								</div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">                                        
                                            <input type="text"
											placeholder="Email or Username"
                                                   class="form-control woocommerce-Input woocommerce-Input--text input-text"
                                                   name="username" id="username" autocomplete="username"
                                                   value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                              <input class="form-control woocommerce-Input woocommerce-Input--text input-text"
                                                   type="password" name="password" id="password"
												   placeholder="Password"
                                                   autocomplete="current-password"/>
                                        </div>
                                    </div>
                                </div>
                                <?php do_action('woocommerce_login_form'); ?>									
                                <div class="signin-checkbox mt-25">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Keep me logged in', 'woocommerce'); ?></span>
                                    </label>
                                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

                                </div>						
									<div class="mt-20 right">
										<div class="group-btn right">
                                            <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                            <button type="submit" class="btn w-130 fw-b700"
                                                    name="login"
                                                    value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Login Now', 'woocommerce'); ?></button>
                                        </div>
                                    </div>  
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="group-action mt-30 text-center">                                               
                                                    <a class="text-capitalize"
                                                        href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>                                           
                                            </div>
                                        </div>
                                    </div>
                                <?php do_action('woocommerce_login_form_end'); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<div class="banner-login-02">			
             <img src= "<?= get_template_directory_uri() ?>/assets/images/banner-login-02.jpg')" alt="">
            </div>
        </div>		
    </div>
    <?php
}
?>

<?php do_action('woocommerce_after_customer_login_form'); ?>
