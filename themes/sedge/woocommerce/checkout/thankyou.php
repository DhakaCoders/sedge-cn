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

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :
		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>
		<div class="checkout-page-title thankyou-page clearfix">
			<div class="checkoutpt-left">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="checkoutpt-right">
				<div class="progressbar-crtl">
			        <div class="n-checkout-progress-wrap">
			          <div class="checkout-progress-cntlr">
			            <div class="checkout-progress">
			              <div class="checkout-progress-bar">
			                <span class="ckour-pro-bar-active ckour-pro-bar-1"></span>
			                <span class="ckour-pro-bar-active ckour-pro-bar-2"></span>
			                <span class="ckour-pro-bar-active ckour-pro-bar-3 active"></span>
			              </div>
			              <div class="chckout-prgrs-col chckout-prgrs-col-1 ">
			                <strong class="chckout-prgrs-number">1</strong> 
			                <h6 class="chckout-prgrs-title">Winkelmandje</h6>
			              </div>

			              <div class="chckout-prgrs-col chckout-prgrs-col-2">
			                <strong class="chckout-prgrs-number">2</strong> 
			                <h6 class="chckout-prgrs-title">Klantgegevens <br>
			                en Betaling</h6>
			              </div>

			              <div class="chckout-prgrs-col chckout-prgrs-col-3 active">
			                <strong class="chckout-prgrs-number">3</strong> 
			                <h6 class="chckout-prgrs-title">Bevestiging</h6>
			              </div>

			            </div>
			          </div>
			        </div>
				</div>
			</div>
		</div>
			<section class="thank-you-section">
			  <div class="container">
			    <div class="row">
			      <div class="col-md-12">
			        <div class="thank-you-sec-cntlr">
			          <div class="thnk-you-des">
			            <i><img src="<?php echo THEME_URI; ?>/assets/images/thankyou.svg" alt="logo"></i>
			            <h1 class="fl-h2 thank-you-des-title">Dank u, <span><?php echo $order->get_billing_first_name(); ?></span></h1>
			            <h2>Je bestelling is voltooid</h2>
			            <a href="#">#<?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
			            
			            <p>We maken uw bestelling klaar voor verzending.</p>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</section>
			<section class="order-products">
				<div class="orders-crtl">
					<div class="order-head">
						<span><h2><?php esc_html_e( 'PRODUCTEN', 'woocommerce' ); ?></h2></span>
						<span><?php esc_html_e( 'Hoeveelheid', 'woocommerce' ); ?></span>
					</div>
					<div class="order-body">
						<div class="body-list">
							<div class="image-title">
							<i><img src="<?php echo THEME_URI; ?>/assets/images/order-product.png" alt=""></i>
								<div class="title-meta">
									<h2>Cocktail rietjes (15 cm)</h2>
									<dl>
										<dt>Diameter:</dt>
										<dd>Standaard 5 - 7 mm</dd>
										<dt>Aantal stuks:</dt>
										<dd>49</dd>
									</dl>
								</div>
							</div>
							<div class="quantity">
								1
							</div>
						</div>
						<div class="body-list">
							<div class="image-title">
							<i><img src="<?php echo THEME_URI; ?>/assets/images/order-product.png" alt=""></i>
								<div class="title-meta">
									<h2>Cocktail rietjes (15 cm)</h2>
									<dl>
										<dt>Diameter:</dt>
										<dd>Standaard 5 - 7 mm</dd>
										<dt>Aantal stuks:</dt>
										<dd>49</dd>
									</dl>
								</div>
							</div>
							<div class="quantity">
								1
							</div>
						</div>
					</div>
					<div class="service-contact">
						<h2>Service & contact</h2>
						<div class="service-lists">
							<div class="service-list">
								<div class="icon">
									<i><img src=""></i>
								</div>
								<div class="service-text">
									<h3>Vind alles in je account</h3>
									<p><a href="">Volg je bestelling</a>, <a href="">betaal facturen</a> of retourneer een artikel.</p>
								</div>
							</div>
							<div class="service-list">
								<div class="icon">
									<i><img src=""></i>
								</div>
								<div class="service-text">
									<h3>Heb je ons nodig?</h3>
									<p>We helpen je graag. <a href="">Onze klantenservice</a> is dag en nacht open.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="service-bottom">
						<ul class="">
							<li><a href="">Snel regelen in je account</a></li>
							<li><a href="">Heb je ons nodig?</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
					<a class="order-home-btn" href=""><span>Home</span></a>
				</div>
				<div class="shipping-order-total">
					<div class="shipping-crtl">
						<h2><?php esc_html_e( 'BESTELDETAILS', 'woocommerce' ); ?></h2>
						<div class="address">
							<ul class="reset-list">
								<li><?php echo $order->get_billing_first_name().' '.$order->get_billing_last_name(); ?></li>
								<li>Boekhoutstraat 121<br/>1790 Affligem - België</li>
								<li>053 222 333</li>
								<li>mathias@conversal.be</li>
							</ul>
						</div>
					</div>
					<div class="order-total">
						<h2><?php esc_html_e( 'OVERZICHT', 'woocommerce' ); ?></h2>
						<div class="order-details">
							<ul class="reset-list">
								<li>
									<span class="details-title">Subtotaal</span>
									<span class="amount">€99,00</span>
								</li>
								<li>
									<span class="details-title">BTW</span>
									<span class="amount">€99,00</span>
								</li>
								<li>
									<span class="details-title">Verzending</span>
									<span class="amount">€99,00</span>
								</li>
							</ul>
							<hr/>
							<ul class="reset-list">
								<li>
									<span class="details-title">Totaal</span>
									<span class="total-amount">€99,00</span>
								</li>
							</ul>
						</div>
					</div>
			          <div class="thnk-y-social-des">
			            <div class="thnk-you-social-des-cntlr" >
			              <h5 class="fl-h5 thnk-you-social-des-title"><?php esc_html_e( 'Lorem ipsum dolor', 'woocommerce' ); ?></h5>
			              <p>Convallis ac ut tincidunt adipiscing.</p>
			               <?php 
							$smedias = get_field('social_media', 'options');
			                if(!empty($smedias)):  
			               ?>
			              <div class="thnkY-social-link">
			                <ul class="reset-list">
			                  <?php foreach($smedias as $smedia): ?>
				                  <li>
				                    <a target="_blank" href="<?php echo $smedia['url']; ?>">
				                        <?php echo $smedia['icon']; ?>
				                    </a>
				                  </li>
				                <?php endforeach; ?>
			                </ul>
			              </div>
			          	  <?php endif; ?>
			            </div>
			          </div>
				</div>
			</section>
		<?php endif; ?>

	<?php else : ?>

	<?php endif; ?>

</div>
