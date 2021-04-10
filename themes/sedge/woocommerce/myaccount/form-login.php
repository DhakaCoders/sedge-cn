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
<?php 
if( isset($_GET['action']) && $_GET['action']=='registration'):
	global $woocommerce; global $data_reg;
	$setedEmail = isset( $_POST["reg_email"])? $_POST["reg_email"]:'';
    $countries_obj   = new WC_Countries();
    $countries   = $countries_obj->__get('countries');
?>
<div class="register-nextstep woocommerce-billing-fields" id="form_next">
	<div class="register-top-title">
		<h1><?php esc_html_e( 'Nieuw bij Sedge', 'woocommerce' ); ?></h1>
	</div>
	<?php if($data_reg): ?>
	<div class="register-field-error">
		<div class="contact-er-msg">
          <span>
            <i><svg class="error-msg-icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="#ffffff">
            <use xlink:href="#error-msg-icon-svg"></use> </svg></i>
            Oh snap! Het formulier lijkt niet correct!</span>
        </div>
	</div>
	<?php endif; ?>
	<div class="register-title">
		<h2><?php esc_html_e( 'Contactpersoon', 'woocommerce' ); ?></h2>
	</div>
	<div class="reg-heading">
		<h3><?php esc_html_e( 'Persoonlijke gegevens', 'woocommerce' ); ?></h3>
	</div>
	<form id="regiter_action_form" action="" method="post">
		<input type="hidden" name="action" value="ajax_register_save">
		<div class="type-order-format">
			<p class="form-row form-row-wide" id="billing_order_type_field">
				<label for="billing_order_type"><?php esc_html_e( 'Type bestelling', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<span><input type="radio" checked id="private" name="billing_order_type" value="Particulier">&nbsp;<?php esc_html_e( 'Particulier', 'woocommerce' ); ?></span>
					<span><input type="radio" id="for_business" name="billing_order_type" value="Zakelijk">&nbsp;<?php esc_html_e( 'Zakelijk', 'woocommerce' ); ?></span>
				</span>
			</p>
			<p class="form-row form-row-wide" id="billing_salutation_field">
				<label for="billing_salutation"><?php esc_html_e( 'Aanhef', 'woocommerce' ); ?>*</label>
				<span class="woocommerce-input-wrapper">
					<span><input type="radio" name="billing_salutation" value="Mevrouw">&nbsp;<?php esc_html_e( 'Mevrouw', 'woocommerce' ); ?></span>
					<span><input type="radio" checked name="billing_salutation" value="De heer">&nbsp;<?php esc_html_e( 'De heer', 'woocommerce' ); ?></span>
				</span>
			</p>
		</div>
		<div class="woocommerce-billing-fields__field-wrapper">
			<div id="extra_fields">
			</div>
			<p class="form-row form-row-first" id="billing_first_name_field">
				<label for="billing_first_name" class=""><?php esc_html_e( 'Naam', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="Voornaam" value="<?php echo isset($_POST['billing_first_name'])? $_POST['billing_first_name']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-last" id="billing_last_name_field">
				<label for="billing_first_name" class="">&nbsp;</label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Naam" value="<?php echo isset($_POST['billing_last_name'])? $_POST['billing_last_name']:'';?>" required>
				</span>
			</p>
			<?php 
				woocommerce_form_field('billing_country', array(
			    'type'       => 'select',
			    'class'      => array( 'country_to_state country_select' ),
			    'label'      => __('Land', 'woocommerce'),
			    'placeholder'    => __('Selecteer Land', 'woocommerce'),
			    'options'    => $countries
			    )
			    );
			?>
			<p class="form-row form-row-wide billing_postcode" id="billing_postcode_field">
				<label for="billing_postcode" class=""><?php esc_html_e( 'Postcode', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Bijv. 9300" value="<?php echo isset($_POST['billing_postcode'])? $_POST['billing_postcode']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-wide billing_city" id="billing_city_field">
				<label for="billing_city" class=""><?php esc_html_e( 'Gemeente', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Bijv. Aalst" value="<?php echo isset($_POST['billing_city'])? $_POST['billing_city']:'';?>" required>
				</span>
			</p>

			<p class="form-row form-row-wide billing_address_1" id="billing_address_1_field">
				<label for="billing_address_1" class=""><?php esc_html_e( 'Straatnaam', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Bijv. Stationstraat" value="<?php echo isset($_POST['billing_address_1'])? $_POST['billing_address_1']:'';?>" required>
				</span>
			</p>
			<p class="form-row form-row-wide billing_house" id="billing_house_field">
				<label for="billing_house" class=""><?php esc_html_e( 'Huisnummer en bus', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_house" id="billing_house" placeholder="Bijv. 113-C" value="<?php echo isset($_POST['billing_house'])? $_POST['billing_house']:'';?>" autocomplete="house-number">
				</span>
			</p>
			<p class="form-row form-row-wide billing_address_2" id="billing_address_2_field">
				<label for="billing_address_2" class=""><?php esc_html_e( 'Extra adresregel', 'woocommerce' ); ?></label>
				<span class="woocommerce-input-wrapper">
					<input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="" value="<?php echo isset($_POST['billing_address_2'])? $_POST['billing_address_2']:'';?>" autocomplete="address-line2">
				</span>
			</p>
			<div class="billing-address-wrap">
				<h3>Factuuradres</h3>
				<p class="same-as-shipping-address">
					<input type="checkbox" name="is_shipping_address" value="1">&nbsp;Hetzelfde als bezorgadres
				</p>
				<p class="form-row form-row-wide" id="billing_email_2_field">
					<label for="billing_email_2" class=""><?php esc_html_e( 'E-mailadres', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="email" class="input-text " name="billing_email_2" id="billing_email_2" placeholder="" value="<?php echo isset($_POST['billing_email_2'])? $_POST['billing_email_2']:$setedEmail;?>" required>
					</span>
				</p>
				<p class="form-row form-row-wide billing_gsm_number" id="billing_address_1_field">
					<label for="billing_gsm_number" class=""><?php esc_html_e( 'GSM nummer', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="text" class="input-text " name="billing_gsm_number" id="billing_gsm_number" placeholder="Bijv. 0493 20 36 20" value="<?php echo isset($_POST['billing_gsm_number'])? $_POST['billing_gsm_number']:'';?>" autocomplete="gsm-number">
					</span>
				</p>
				<p class="form-row form-row-wide billing_phone" id="billing_phone_field">
					<label for="billing_phone" class=""><?php esc_html_e( 'Telefoon', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="Bijv. 09 224 61 11" value="<?php echo isset($_POST['billing_phone'])? $_POST['billing_phone']:'';?>" autocomplete="tel" required>
					</span>
				</p>
			</div>
			<div class="clearfix"></div>
			<div class="login-info">
				<p><input type="checkbox" name="create_account" value="1" checked>&nbsp;<?php esc_html_e( 'Account aanmaken', 'woocommerce' ); ?></p>
				<h3><?php esc_html_e( 'Inloggegevens', 'woocommerce' ); ?></h3>
				<p>Het e-mailadres en wachtwoord zijn nodig om toegang te krijgen tot de gegevens. Ook zullen we je via dit e-mailadres op de hoogte houden van de status van bestellingen.</p>
				<p class="form-row form-row-wide" id="billing_email_field">
					<label for="billing_email" class=""><?php esc_html_e( 'E-mailadres', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="Bijv. jan@domein.be" value="<?php echo isset($_POST['billing_email'])? $_POST['billing_email']:'';?>" autocomplete="email username" required>
					</span>
					
					<?php if( isset($data_reg) && array_key_exists('exists_email', $data_reg) ){printf('<span class="error-valid error-confirm_password">%s</span>', $data_reg['exists_email'] );}?>
				</p>
				<p class="form-row form-row-wide password" id="password_field">
					<label for="re_password" class=""><?php esc_html_e( 'Wachtwoord', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="password" class="input-text " name="password" id="re_password" placeholder="Minimaal 8 karakters"  autocomplete="password" required>
					</span>
					<span class="error-valid error-rel_password"></span>
				</p>
				<p class="form-row form-row-wide confirm_password" id="confirm_password_field">
					<label for="confirm_password" class=""><?php esc_html_e( 'Wachtwoord bevestigen', 'woocommerce' ); ?></label>
					<span class="woocommerce-input-wrapper">
						<input type="password" class="input-text " name="confirm_password" id="confirm_password" placeholder="Minimaal 8 karakters" autocomplete="confirm-password" required>
					</span>
					<span class="error-valid error-confirm_password"></span>
				</p>
			</div>
			<div class="register-btn">
				<div class="reg-btn-crtl">
					<p>
						<button type="submit" name="user-register" id="register_action_btn" value="<?php esc_attr_e( 'Doorgaan', 'woocommerce' ); ?>"><?php esc_html_e( 'Doorgaan', 'woocommerce' ); ?></button>
						<input type="hidden" name="user_register_nonce" value="<?php echo wp_create_nonce('user-register-nonce'); ?>"/>
					</p>
					<p class="form-row html-text">
						<span><?php esc_html_e( 'Koop veilig & vertrouwd', 'woocommerce' ); ?></span>
					</p>
				</div>
			</div>
		</div>
	</form>
<!-- 	<div class="register-pay-logo-wrap">
		<h3 class="payment-title">Veilig betalen kan bij ons met</h3>
		<div class="payment-logo-crtl">
			<ul class="reset-list">
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-01.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-02.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-03.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-04.svg"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/payment-logo-05.svg"></li>
            </ul>
		</div>
	</div> -->
</div>
<?php else: ?>
<div class="login-register-wrap" id="login_register">
	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	<div class="u-columns col2-set" id="customer_login">

		<div class="u-column1 col-1">

	<?php endif; ?>

			<h2><?php esc_html_e( 'Inloggen', 'woocommerce' ); ?></h2>
			<div><p>Welkom terug!</p></div>
			<form class="woocommerce-form woocommerce-form-login login" method="post">

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="username"><?php esc_html_e( 'E-mailadres', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="E-mailadres" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="password"><?php esc_html_e( 'Wachtwoord', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="Wachtwoord" autocomplete="current-password" />
				</p>

				<?php do_action( 'woocommerce_login_form' ); ?>
				<p class="woocommerce-LostPassword lost_password">
					<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Wachtwoord vergeten?', 'woocommerce' ); ?></a>
				</p>
				<p class="form-row">
					<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
					</label>
					<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
				</p>
			
				<?php do_action( 'woocommerce_login_form_end' ); ?>

			</form>

	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

		</div>

		<div class="u-column2 col-2">

			<h2><?php esc_html_e( 'Nieuw bij Sedge?', 'woocommerce' ); ?></h2>
			<div class="signup-notification">
				<p>Vul hier je e-mailadres in als je nog niet beschikt over een account. Indien gewenst, kan je in de volgende stap een account aanmaken.</p>
			</div>
			<form method="post" action="?action=registration" class="woocommerce-form woocommerce-form-register register" id="mail_checker">
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email"><?php esc_html_e( 'E-mailadres', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="reg_email" id="reg_email" autocomplete="email" placeholder="E-mailadres" required/>
				</p>
				<p class="woocommerce-form-row form-row">
					<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" id="register_next" name="register" value="<?php esc_attr_e( 'Maak een account aan', 'woocommerce' ); ?>"><?php esc_html_e( 'Maak een account aan', 'woocommerce' ); ?></button>
				</p>
			</form>

		</div>

	</div>
<!-- 	<div class="login-btm-wrap">
		<h2 class="login-btm-title">DOLOR SIT AMET</h2>
		<div class="login-info-crtl">
			<div class="login-info-inr loginInfoSlider">
				<div class="loginInfoSlideItem">
					<div class="loginInfoItem">
						<i></i>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="loginInfoSlideItem">
					<div class="loginInfoItem">
						<i></i>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="loginInfoSlideItem">
					<div class="loginInfoItem">
						<i></i>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>
<?php endif; ?>
<?php endif; ?>


<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
