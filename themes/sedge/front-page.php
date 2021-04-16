<?php get_header(); ?>

<?php  
  $hbanner = get_field('home_banner', HOMEID);
  if($hbanner):
    $bannerposter = !empty($hbanner['afbeelding'])? cbv_get_image_src( $hbanner['afbeelding'], 'hmbanner' ): '';
?>
<section class="hm-banner">
  <div class="hm-banner-bg inline-bg" style="background: url('<?php echo $bannerposter; ?>');">
    <img src="<?php echo $bannerposter; ?>" alt="">
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
              <?php if( !empty($introsec['titel']) ): ?>
              <div class="straw-des">
                <?php echo wpautop( $introsec['titel'] ); ?>          
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
              <?php  echo cbv_get_image_tag($introsec['afbeelding'], 'full'); ?>
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
  $homeproduct = get_field('homeproduct', HOMEID);
  if($homeproduct): 
?>
<section class="home-product-sec">
  <div class="prdt-bnr">
    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-bnr-bg.jpg" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-cntrl">
          <div class="prdt-catg">
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/cocktail-img.jpg" alt=""></a>
              </div>
              <div class="prdt-fea-cont">  
                <a href="#"><h5 class="fl-h5 prdt-itm-titl">cocktail</h5></a>
                <span>15cm<br> height</span>
              </div>  
            </div>
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/long-drink-img.jpg" alt=""></a>
              </div>
              <div class="prdt-fea-cont">
                <a href="#"><h5 class="fl-h5 prdt-itm-titl">long<br> drink</h5></a>
                <span>20cm<br> height</span>
              </div>  
            </div>
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <a href="3"><img src="<?php echo THEME_URI; ?>/assets/images/soda-bottle.jpg" alt=""></a>
              </div>  
              <div class="prdt-fea-cont">
                <a href="#"><h5 class="fl-h5 prdt-itm-titl">soda<br> bottle</h5></a>
                <span>25cm<br> height</span>
              </div>  
            </div>
          </div>  
          <div class="prdt-catg-des-cntrl">
            <div class="prdt-catg-des-bg">
              <div class="prdt-des-logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/sedge.svg" alt=""></a>
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