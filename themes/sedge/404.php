<?php get_header(); ?>

<section class="page-404-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-404-dsc-wrp">
          <strong><img src="<?php echo THEME_URI; ?>/assets/images/404.svg"></strong>
          <div class="page-404-btn clearfix">
            <div> <a class="fl-blue-btn" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'HOME', THEME_NAME ); ?></a> </div>
            <div><a class="fl-trnsprnt-btn" href="<?php echo get_permalink(get_option( 'woocommerce_shop_page_id' )); ?>"><?php esc_html_e( 'SHOP', THEME_NAME ); ?></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>