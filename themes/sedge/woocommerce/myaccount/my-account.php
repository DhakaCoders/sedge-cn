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
<?php $thankyou = get_field('orderthankyou', 'options'); ?>
<div class="deshboard-inner">
	<div class="service-contact">
		<?php if( !empty($thankyou['sec_titel']) ) printf('<h2>%s</h2>', $thankyou['sec_titel']); ?>
		<?php if($thankyou['blok_1'] && $thankyou['blok_2']): ?>
		<div class="service-lists">
			<?php if( $blok1 = $thankyou['blok_1'] ): ?>
			<div class="service-list">
				<div class="icon">
					<i><img src="<?php echo THEME_URI; ?>/assets/images/wc-ser-icon.svg" alt=""></i>
				</div>
				<div class="service-text">
                  <?php 
                  	if( !empty($blok1['titel']) ) printf('<h3>%s</h3>', $blok1['titel']); 
                  	if( !empty($blok1['beschrijving']) ) echo wpautop($blok1['beschrijving']); 
                  ?>
				</div>
			</div>
			<?php endif; ?>
		    <?php if( $blok2 = $thankyou['blok_2'] ): ?>
			<div class="service-list">
				<div class="icon">
					<i><img src="<?php echo THEME_URI; ?>/assets/images/wc-con-icon.svg" alt=""></i>
				</div>
				<div class="service-text">
					<?php 
                      	if( !empty($blok2['titel']) ) printf('<h3>%s</h3>', $blok2['titel']); 
                      	if( !empty($blok2['beschrijving']) ) echo wpautop($blok2['beschrijving']); 
                    ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="myaccount-btm-form">
	<?php get_template_part('templates/footer', 'top-form'); ?>
</div>