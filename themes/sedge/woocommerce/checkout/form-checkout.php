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
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="checkout-page-title clearfix">
	<div class="checkoutpt-left">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="checkoutpt-right">
		<div class="checkout-page-bar-crtl">
			<div class="progressbar-crtl">
				<div class="n-checkout-progress-wrap">
				  <div class="checkout-progress-cntlr">
				    <div class="checkout-progress">
				      <div class="checkout-progress-bar">
				        <span class="ckour-pro-bar-active ckour-pro-bar-1"></span>
				        <span class="ckour-pro-bar-active ckour-pro-bar-2 active"></span>
				        <span class="ckour-pro-bar-active ckour-pro-bar-3"></span>
				      </div>
				      <div class="chckout-prgrs-col chckout-prgrs-col-1 ">
				        <strong class="chckout-prgrs-number"></strong> 
				        <h6 class="chckout-prgrs-title">Winkelmandje</h6>
				      </div>

				      <div class="chckout-prgrs-col chckout-prgrs-col-2 active">
				        <strong class="chckout-prgrs-number"></strong> 
				        <h6 class="chckout-prgrs-title">Klantgegevens en <br>Betaling</h6>
				      </div>

				      <div class="chckout-prgrs-col chckout-prgrs-col-3">
				        <strong class="chckout-prgrs-number"></strong> 
				        <h6 class="chckout-prgrs-title">Bevestiging</h6>
				      </div>

				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php 
	if ( $checkout->get_checkout_fields() ) :
	?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			
					<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
					
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
						<div class="payment-method-crtl">
							<div id="order_review" class="woocommerce-checkout-review-order">
							<div class="shipping-methods">
									<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
										<h4><?php esc_html_e( 'Bezorgmethode', 'woocommerce' ); ?></h4>
										<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

										<?php wc_cart_totals_shipping_html(); ?>

										<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

									<?php endif; ?>
							</div>
							    <h3>2.<?php esc_html_e( 'Betaalmethode', 'woocommerce' ); ?></h3>
								<?php do_action( 'woocommerce_checkout_order_review' ); ?>
							</div>
							<div class="woocommerce-additional-fields extra-info">	
								<h3>4.<?php esc_html_e( 'Extra Info', 'woocommerce' ); ?></h3>
								<div class="woocommerce-additional-fields__field-wrapper">
									<p class="form-row notes thwcfd-field-wrapper thwcfd-field-textarea" id="order_comments_field" >
										<label for="order_comments"><?php esc_html_e( 'Extra Info', 'woocommerce' ); ?></label>
										<span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="" rows="2" cols="5"></textarea></span></p>	
								</div>
							</div>
							<div class="custom-checkout-btn">
								<button type="submit" class="button alt" name="woocommerce_checkout_place_order" value="BESTELLING AFRONDEN" data-value="BESTELLING AFRONDEN"><span><?php esc_html_e( 'BESTELLING AFRONDEN', 'woocommerce' ); ?></span></button>
							</div>
						</div>
						<!-- end payment method -->
					<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>

			<div class="col-2">
				
				<div class="custom-checkout-order-review">
					<h3 class="order-review-title"><?php esc_html_e( 'Overzicht', 'woocommerce' ); ?></h3>
					<?php 
						wc_get_template_part('checkout/review-order');
						wc_get_template_part('checkout/cbv-form-coupon');
					?>
					<div class="checkout-terms">
						<?php wc_get_template_part( 'checkout/terms' ); ?>
					</div>
					<button type="submit" class="button alt" name="woocommerce_checkout_place_order" value="BESTELLING AFRONDEN" data-value="BESTELLING AFRONDEN"><span><?php esc_html_e( 'BESTELLING AFRONDEN', 'woocommerce' ); ?></span></button>
				</div>
				<div class="checkout html-text show-xs">
					<span><?php esc_html_e( 'Koop veilig & vertrouwd', 'woocommerce' ); ?></span>
				</div>
				<div class="cart-pay-logo-wrap">
					<div class="cart-logo-crtl">
						<ul class="reset-list">
							<li><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-img-01.png"></li>
			                <li><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-img-02.png"></li>
			                <li><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-img-03.png"></li>
			                <li><img src="<?php echo THEME_URI; ?>/assets/images/ftr-btm-img-04.png"></li>
			            </ul>
					</div>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
