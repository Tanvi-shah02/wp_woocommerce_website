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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="row" id="customer_login">

	<div class="col-md">
        <div class="card h-100">
            <div class="card-body">
<?php endif; ?>

		<h4><?php esc_html_e( 'Login', 'woocommerce' ); ?></h4>
                <hr>

		<form class="woocommerce-form woocommerce-form-login login border-0 p-0 m-0" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
            <div class="form-group">
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" autocomplete="username" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </div>
            <div class="form-group">
                <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" autocomplete="current-password" />
            </div>
			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php /*esc_html_e( 'Username or email address', 'woocommerce' ); */?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php /*echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; */?>" /><?php /*// @codingStandardsIgnoreLine */?>
			</p>-->
			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php /*esc_html_e( 'Password', 'woocommerce' ); */?>&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>-->

			<?php do_action( 'woocommerce_login_form' ); ?>
            <div class="form-group form-check custom-control custom-checkbox">
                
                <input class="woocommerce-form__input woocommerce-form__input-checkbox form-check-input custom-control-input" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                <label class="form-check-label custom-control-label" for="rememberme"><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></label>
                
            </div>
            <div class="d-flex justify-content-between align-items-center">
            <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
            <button type="submit" class="woocommerce-button button1 woocommerce-form-login__submit btn btn-primary" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
			<!--<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php /*esc_html_e( 'Remember me', 'woocommerce' ); */?></span>
				</label>
				<?php /*wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); */?>
				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php /*esc_attr_e( 'Log in', 'woocommerce' ); */?>"><?php /*esc_html_e( 'Log in', 'woocommerce' ); */?></button>
			</p>-->
			<p class="woocommerce-LostPassword lost_password m-0">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>
</div>
            
			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>
            </div>
        </div>

	<div class="col-md">
 <div class="card h-100">
            <div class="card-body">
		<h4><?php esc_html_e( 'Register', 'woocommerce' ); ?></h4>
                <hr>

		<form method="post" class="woocommerce-form woocommerce-form-register register border-0 p-0 m-0" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                <div class="form-group">
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="reg_username" autocomplete="username" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                </div>

			<!--	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php /*esc_html_e( 'Username', 'woocommerce' ); */?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php /*echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; */?>" /><?php /*// @codingStandardsIgnoreLine */?>
				</p>
-->
			<?php endif; ?>
            <div class="form-group">
                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="reg_email" autocomplete="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </div>

			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php /*esc_html_e( 'Email address', 'woocommerce' ); */?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php /*echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; */?>" /><?php /*// @codingStandardsIgnoreLine */?>
			</p>-->

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                <div class="form-group">
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="reg_password" autocomplete="username" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" /><?php // @codingStandardsIgnoreLine ?>
                </div>

				<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php /*esc_html_e( 'Password', 'woocommerce' ); */?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>-->

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-button button1 woocommerce-form-register__submit btn btn-primary" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
            </p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div> </div></div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
