<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>
<div class="myaccount-crtl">
	<div class="account-page-title">
		<?php if( is_wc_endpoint_url( 'orders' ) ){ ?>
			<div class="back-to-dashboard-btn-cntlr"><a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>">Terug naar DASHBOARD</a></div>
		<?php }elseif( is_wc_endpoint_url( 'edit-account' ) ){ ?>
			<div class="back-to-dashboard-btn-cntlr"><a href="<?php echo esc_url( get_permalink(get_option( 'woocommerce_myaccount_page_id' )) );?>">Terug naar DASHBOARD</a></div>
		<?php }else{ 
		    $current_user = wp_get_current_user();
		    $username = !empty($current_user->display_name)? $current_user->display_name : $current_user->user_firstname;
		?>
			<p class="loggedin-text"><?php printf( __( 'Dag, <span>%s</span>', THEME_NAME ), esc_html( $username ) ); ?></p>
			<p>Vanaf uw accountdashboard kunt u uw recente bestellingen bekijken, uw verzend- en factuuradressen beheren en uw wachtwoord en accountgegevens bewerken.</p>
		<?php } ?>

		<div class="woocommerce-account-grds-cntlr clearfix">
			<?php 
			do_action( 'woocommerce_account_navigation' ); ?>

			<div class="woocommerce-MyAccount-content">
				<?php
					/**
					 * My Account content.
					 *
					 * @since 2.6.0
					 */
					do_action( 'woocommerce_account_content' );
				?>
			</div>
		</div>
	</div>
</div>
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
<div class="myaccount-btm-form">
	<?php get_template_part('templates/footer', 'top-form'); ?>
</div>