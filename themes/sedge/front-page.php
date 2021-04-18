<?php get_header(); ?>

<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
    $bannerposter = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'], 'hmbanner' ): '';
?>
<section class="hm-banner">
  <div class="hm-banner-bg inline-bg" style="background: url('<?php echo $bannerposter; ?>');">
    <img src="<?php echo $bannerposter; ?>" alt="home-banner">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-banner-cntlr">
          <?php 
            if( !empty($hbanner['titel']) ) printf( '<h1 class="hm-banner-title fl-h2">%s</h1>', $hbanner['titel'] );
          ?>
          <?php 
              $hbknop = $hbanner['knop'];
              if( is_array( $hbknop ) &&  !empty( $hbknop['url'] ) ):
          ?>
          <div class="hm-banner-btn">
            <?php  printf('<a class="fl-red-btn" href="%s" target="%s">%s</a>', $hbknop['url'], $hbknop['target'], $hbknop['title']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php  
  $introsec = get_field('introsec', HOMEID);
  if($introsec): 
?>
<section class="straw-intro">
  <div class="straw-intro-bg inline-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="straw-into-cntrl">
            <div class="straw-cont">
              <?php if( !empty($introsec['beschrijving']) ): ?>
              <div class="straw-des">
                <?php echo wpautop( $introsec['beschrijving'] ); ?>          
              </div>
              <?php endif; ?>

              <?php 
                  $introbknop = $introsec['knop'];
                  if( is_array( $introbknop ) &&  !empty( $introbknop['url'] ) ):
              ?>
              <div class="more-btn">
                <?php  printf('<a class="fl-transparent-btn straw-intro-btn" href="%s" target="%s">%s</a>', $introbknop['url'], $introbknop['target'], $introbknop['title']); ?>
              </div>
              <?php endif; ?>
            </div>  
            <?php if(!empty($introsec['afbeelding'])): ?>
            <div class="straw-img-box">
              <?php  echo cbv_get_image_tag($introsec['afbeelding'], 'hm_intro'); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>



<?php  
  $showhide_products = get_field('showhide_products', HOMEID);
  $homeproduct = get_field('homeproduct', HOMEID);
  if($showhide_products): 
?>
<section class="home-product-sec">
  <div class="prdt-bnr">
    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-bnr-bg.jpg" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-cntrl">
          <?php 
          $products = $homeproduct['products'];
          if( $products ):
          ?>
          <div class="prdt-catg">
            <?php 
              foreach( $products as $product ){
              $gridtag = !empty($product['afbeelding'])? cbv_get_image_tag( $product['afbeelding'], 'hmproduct' ):'';
              $proLink = !empty($product['knop'])? $product['knop']:'#'; 
            ?>
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <a href="<?php echo $proLink; ?>">
                  <?php echo $gridtag; ?>
                </a>
              </div>
              <div class="prdt-fea-cont">  
                <h5 class="fl-h5 prdt-itm-titl"><a href="<?php echo $proLink; ?>"><?php if( !empty($product['titel']) ) printf('%s', $product['titel']); ?></a></h5>
                <?php if( !empty($product['height']) ) printf('<span>%s<br> height</span>', $product['height']); ?>
              </div>  
            </div>
            <?php } ?>
          </div>  
          <?php endif;?>
          <div class="prdt-catg-des-cntrl">
            <div class="prdt-catg-des-bg">
              <div class="prdt-des-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/sedge.svg" alt=""></a>
              </div>
              <div class="prdt-des">
                <?php
                  if( !empty($homeproduct['beschrijving']) ) echo wpautop( $homeproduct['beschrijving'] );
                ?>
                <div class="notice">
                  <?php echo wpautop( $homeproduct['merk_op'] ); ?> 
                </div> 

                <?php 
                    $hpro_des_knop = $homeproduct['knop'];
                    if( is_array( $hpro_des_knop ) &&  !empty( $hpro_des_knop['url'] ) ):
                ?>
                <div class="find-more">
                  <?php  printf('<a class="fl-blue-btn find-more-btn" href="%s" target="%s">%s</a>', $hpro_des_knop['url'], $hpro_des_knop['target'], $hpro_des_knop['title']); ?>
                </div>
                <?php endif; ?>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_template_part('templates/footer', 'top-form'); ?>

<?php get_footer(); ?>