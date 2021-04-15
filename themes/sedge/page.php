<?php get_header(); ?>
<?php if( is_cbv_title() ): ?>
<div class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr clearfix">
          <?php if( is_cart() ){ ?>
          <h1 class="fl-blue-btn"><?php echo get_the_title(); ?></h1>
          <?php } ?>
          <?php if( is_account_page() && is_user_logged_in() ){ ?>
            <?php if( is_wc_endpoint_url( 'orders' ) ){ ?>
              <h1 class="fl-blue-btn">BESTELLINGEN</h1>
            <?php }elseif( is_wc_endpoint_url( 'edit-account' ) ){ ?>
              <h1 class="fl-blue-btn">Account Details</h1>
            <?php }else{ ?>
              <h1 class="fl-blue-btn">DASHBOARD</h1>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
  <?php if(is_cbv_wc()):?>
    <section class="wc-page-con-wrap">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<article class="default-page-con">
    					<?php the_content(); ?>
    				</article>
    			</div>
    		</div>
    	</div>
    </section>
  <?php else:?>
  <section class="innerpage-con-wrap">
    <article class="default-page-con">
      <?php if(have_rows('inhoud')):  ?>
      <div class="block-955">
      </div>
      <?php endif; ?>
    </article>
  </section>
  <?php endif; ?>
<?php 
  if(is_show_footer_form()){
    get_template_part('templates/footer', 'top-form');
  }
?>
<?php get_footer(); ?>