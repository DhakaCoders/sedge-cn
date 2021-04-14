<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>
<div class="deshboard-inner">
	<div class="service-contact">
		<h2>Service & contact</h2>
		<div class="service-lists">
			<div class="service-list">
				<div class="icon">
					<i><img src="<?php echo THEME_URI; ?>/assets/images/wc-ser-icon.svg" alt=""></i>
				</div>
				<div class="service-text">
					<h3>Vind alles in je account</h3>
					<p><a href="">Volg je bestelling</a>, <a href="">betaal facturen</a> of retourneer een artikel.</p>
				</div>
			</div>
			<div class="service-list">
				<div class="icon">
					<i><img src="<?php echo THEME_URI; ?>/assets/images/wc-con-icon.svg" alt=""></i>
				</div>
				<div class="service-text">
					<h3>Heb je ons nodig?</h3>
					<p>We helpen je graag. <a href="">Onze klantenservice</a> is dag en nacht open.</p>
				</div>
			</div>
		</div>

	</div>
</div>