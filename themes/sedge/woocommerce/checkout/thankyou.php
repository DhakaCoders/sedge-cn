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
		<section class="checkout-page-cntlr">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12">
		        <div class="checkout-page-title thankyou-page clearfix">
		          <div class="checkoutpt-left">
		            <h1>Checkout</h1>
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
		                        en Betaling
		                      </h6>
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
		        <div class="thank-you-section">
		          <div class="container">
		            <div class="row">
		              <div class="col-md-12">
		                <div class="thank-you-sec-cntlr">
		                  <div class="thnk-you-des">
		                    <div class="thnk-you-des-left">
		                      <i><img src="<?php echo THEME_URI; ?>/assets/images/thankyou.svg" alt="logo"></i>
		                    </div>
		                    <div class="thnk-you-des-rgt">
		                      <h1 class="fl-h6 thank-you-des-sub-title">Dank u, <span><?php echo $order->get_billing_first_name(); ?>!</span></h1>
		                      <h2 class="fl-h4 thank-you-des-title">Je bestelling is voltooid</h2>
		                      <a href="#">#<?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a>
		                      <p>We maken uw bestelling klaar voor verzending.</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="order-products">
		          <div class="orders-crtl">
		            <div class="orders-product-item">
		              <div class="order-head">
		                <span>
		                  <h2 class="fl-h6 order-title"><?php esc_html_e( 'PRODUCTEN', 'woocommerce' ); ?></h2>
		                </span>
		                <span><?php esc_html_e( 'Hoeveelheid', 'woocommerce' ); ?></span>
		              </div>
		              <?php 
		              	$order = wc_get_order( $order->get_order_number() ); 
		              	$order_items = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
		              ?>
		              <div class="order-body">
		              	<?php 
		              	foreach ($order_items as $item_id => $item) { 
		              		$item_meta_data = $item->get_meta_data();
		              		$formatted_meta_data = $item->get_formatted_meta_data( '_', true );
		              	?>
		                <div class="body-list">
		                  <div class="image-title">
		                    <i><img src="<?php echo THEME_URI; ?>/assets/images/order-product.png" alt=""></i>
		                    <div class="title-meta">
		                      <h2 class="fl-h6 meta-title"><?php echo $item['name']; ?> (15 cm)</h2>
		                      <?php 
		                      //printr($formatted_meta_data); 
								if ($formatted_meta_data) :
									echo '<ul>';
			                        foreach ($formatted_meta_data as $key => $data) :
			                        	echo '<li><strong>'.$data->display_key.':</strong> <span>'.$data->display_value.'</span></li>';
			                    	endforeach;
			                    	echo '</ul>';
			                    endif;
		                      ?>
		                    </div>
		                  </div>
		                  <div class="quantity">
		                    1
		                  </div>
		                </div>
		            	<?php } ?>
		              </div>
		            </div>
		            <div class="deshboard-inner">
		              <div class="service-contact">
		                <h2 class="fl-h6 srv-cont-title">Service &amp; contact</h2>
		                <div class="service-lists">
		                  <div class="service-list">
		                    <div class="icon">
		                      <i><img src="<?php echo THEME_URI; ?>/assets/images/srv-cont.svg"></i>
		                    </div>
		                    <div class="service-text">
		                      <h3 class="srv-txt-title">Vind alles in je account</h3>
		                      <p><a href="">Volg je bestelling</a>, <a href="">betaal facturen</a> of <a href="#">retourneer een artikel.</a></p>
		                    </div>
		                  </div>
		                  <div class="service-list">
		                    <div class="icon">
		                      <i><img src="<?php echo THEME_URI; ?>/assets/images/conversation.svg"></i>
		                    </div>
		                    <div class="service-text">
		                      <h3 class="srv-txt-title">Heb je ons nodig?</h3>
		                      <p>We helpen je graag. <a href="">Onze klantenservice</a> is dag en nacht open.</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		            <div class="service-bottom">
		              <ul class="reset-list">
		                <li><a href="">Snel regelen in je account</a></li>
		                <li><a href="">Heb je ons nodig?</a></li>
		                <li><a href="">Contact</a></li>
		              </ul>
		            </div>
		            <a class="fl-blue-btn order-home-btn" href=""><i><svg class="home-btn-arrow" width="8" height="12" viewBox="0 0 8 12"><use xlink:href="#home-btn-arrow"></use> </svg></i><span>Home</span></a>
		          </div>
		          <div class="shipping-order-total">
		            <div class="shipping-crtl">
		              <h2 class="fl-h6 shipping-order-title">BESTELDETAILS</h2>
		              <div class="address">
		                  <h2 class="fl-h2 address-title">Mathias Herrebaut</h2>
		                  <ul class="reset-list">
		                      <li><a href="#">Boekhoutstraat 121<br />1790 Affligem - België</a></li>
		                      <li><a href="tel:053222333">053 222 333</a></li>
		                      <li><a href="#">mathias@conversal.be</a></li>
		                  </ul>
		              </div>
		            </div>
		            <div class="order-total">
		              <h2 class="fl-h6 order-total-title">OVERZICHT</h2>
		              <div class="order-details">
		                <table class="shop_table woocommerce-checkout-review-order-table">
		                  <tbody>
		                    <tr class="cart_item">
		                      <td class="product-name">COCKTAIL&nbsp;</td>
		                      <td class="product-total">
		                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span>2.99</bdi></span>
		                      </td>
		                    </tr>
		                  </tbody>
		                  <tfoot>
		                    <tr class="cart-subtotal">
		                      <th>Subtotaal</th>
		                      <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span>2.99</bdi></span></td>
		                    </tr>
		                    <tr class="fee">
		                      <th>Verzending</th>
		                      <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span>99.00</bdi></span></td>
		                    </tr>
		                    <tr class="order-total">
		                      <th>Totaal</th>
		                      <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span>101.99</bdi></span></strong> </td>
		                    </tr>
		                  </tfoot>
		                </table>
		              </div>
		            </div>
		            <div class="thnk-y-social-des">
		              <div class="thnk-you-social-des-cntlr">
		                <h5 class="fl-h5 thnk-you-social-des-title">Lorem ipsum dolor</h5>
		                <p>Convallis ac ut tincidunt adipiscing.</p>
		                <div class="thnkY-social-link">
		                  <ul class="reset-list">
		                    <li><a target="_blank" href="">Facebook</a></li>
		                    <li><a target="_blank" href="">Instagram</a></li>
		                  </ul>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
		<?php endif; ?>

	<?php else : ?>

	<?php endif; ?>

</div>
