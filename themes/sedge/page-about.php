<?php 
/*Template Name: About*/
get_header();
$thisID = get_the_ID();

$abanner = get_field('about_banner', $thisID);
$page_title = !empty($abanner['titel']) ? $abanner['titel'] : get_the_title();

if($abanner):
$about_bannerposter = !empty($abanner['afbeelding'])? cbv_get_image_src( $abanner['afbeelding'], 'about_banner' ): '';
?>
<section class="about-grey-sd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-grey-sd-wrp">
          <div class="about-grey-sd-inr inline-bg" style="background: url('<?php echo $about_bannerposter; ?>');">
            <div class="about-grey-sd-dsc-tp">
              <h1 class="about-grey-sd-title fl-h1"><?php echo $page_title; ?></h1>
            </div>
            <div class="about-grey-sd-dsc-box">
              <span>
                <?php if( !empty($abanner['beschrijving']) ) echo $abanner['beschrijving']; ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $showhideintro = get_field('showhideintro', $thisID);
  $intro = get_field('intro_sec', $thisID);
  if( $showhideintro ):
  $intro_img = !empty($intro['afbeelding'])? cbv_get_image_src( $intro['afbeelding'],'about_intro' ):'';
?>
<section class="about-img-text-sec-wrp">
   <div class="about-img-text-bg"></div>
     <div class="about-red-bg"></div>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="about-img-text-wrp">
             <div class="about-img-text-cntlr clearfix">
               <div class="about-img-lft">
                 <div class="about-img inline-bg" style="background: url('<?php echo $intro_img; ?>');"></div>
               </div>
               <div class="about-text-rgt">
                <?php 
                  if( !empty($intro['titel']) ) printf( '<h2 class="about-title-1 fl-h2">%s</h2>', $intro['titel'] );
                  if( !empty($intro['subtitel']) ) printf( '<span>%s</span>', $intro['subtitel'] );
                  if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                ?>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
</section>
<?php endif; ?>


<?php 
  $showhidegalleri = get_field('showhidegalleri', $thisID);
  $galerij = get_field('galerij_sec', $thisID);
  if( $showhidegalleri ):
  if( $galerij ):
?>
<section class="about-msnry-grd-items-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-msnry-grd-items clearfix">
          <div class="about-gallery-cntlr">
            <?php if( !empty($galerij['afbeelding_1']) ):?>
            <div class="about-msnry-grd-item aboutgi1">
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo cbv_get_image_src( $galerij['afbeelding_1'],'about_gallery1' ); ?>);">
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php if( !empty($galerij['afbeelding_2']) ):?>
            <div class="about-msnry-grd-item aboutgi2">
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo cbv_get_image_src( $galerij['afbeelding_2'],'about_gallery2' ); ?>);">
                </div>
              </div>
            </div>
            <?php endif; ?>
            <div class="about-msnry-grd-item aboutgi3">
              <?php if( !empty($galerij['afbeelding_3']) ):?>
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo cbv_get_image_src( $galerij['afbeelding_3'],'about_gallery3' ); ?>);">
                </div>
              </div>
              <?php endif; ?>
              <?php if( !empty($galerij['afbeelding_4']) ):?>
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo cbv_get_image_src( $galerij['afbeelding_4'],'about_gallery3' ); ?>);">
                </div>
              </div>
              <?php endif; ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $showhidehand = get_field('showhidehand', $thisID);
  $handleiding = get_field('handleiding_sec', $thisID);
  if( $showhidehand ):
  if( $handleiding ):
    $afb = $handleiding['afbeelding'];
?>
<section class="product-menual-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-menual-hdr">
          <?php 
            if( !empty($handleiding['titel']) ) printf( '<h2 class="fl-h1 prdt-menual-titl">%s</h2>', $handleiding['titel'] );
          ?>
        </div>
        <div class="prdt-mnl-cntrl">
          <div class="pmi-galry mHc">
            <div class="galry-img3">
              <?php if( !empty($afb['afbeelding_1']) ):?>
              <div class="glry-img-lft mHc1" >
                <div class="lft-glry-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_1']); ?>');">                  
                </div>
              </div>
              <?php endif; ?>
              <div class="glry-img-rgt mHc1">
                <?php if( !empty($afb['afbeelding_2']) ):?>
                <div class="rgt-img1">
                  <div class="rgt-glry-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_2']); ?>');">                  
                  </div>
                </div>  
                <?php endif; ?>
                <?php if( !empty($afb['afbeelding_3']) ):?>
                <div class="rgt-img2">
                  <div class="rgt-glry-img2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_3']); ?>');">                  
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if( !empty($afb['afbeelding_4']) ):?>
            <div class="galry-img1">
              <div class="glry-img1-1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_4']); ?>');">                
              </div>            
            </div>
            <?php endif; ?>
            <div class="res-galry-img2">
              <?php if( !empty($afb['afbeelding_5']) ):?>
              <div class="res-glry-img21">
                <div class="res-glry-img21-1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_5']); ?>');">                  
                </div>                
              </div>
              <?php endif; ?>
              <?php if( !empty($afb['afbeelding_6']) ):?>
              <div class="res-glry-img22">
                <div class="res-glry-img22-1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_6']); ?>');">                  
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="res-galry-img4">
              <div class="res-glry-img4-lft">
                <?php if( !empty($afb['afbeelding_7']) ):?>
                <div class="res-galry-img4-lft-1">
                  <div class="rg-lft-1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_7']); ?>');">                    
                  </div>
                </div>
                <?php endif; ?>
                <?php if( !empty($afb['afbeelding_8']) ):?>
                <div class="res-galry-img4-lft-2">
                  <div class="rg-lft-2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_8']); ?>');">                    
                  </div>
                </div>
                <?php endif; ?>
              </div>
              <div class="res-glry-img4-rgt">
                <?php if( !empty($afb['afbeelding_9']) ):?>
                <div class="res-galry-img4-rgt-1">
                  <div class="rg-rgt-1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_9']); ?>');">                    
                  </div>
                </div>
                <?php endif; ?>
                <?php if( !empty($afb['afbeelding_10']) ):?>
                <div class="res-galry-img4-rgt-2">
                  <div class="rg-rgt-2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $afb['afbeelding_10'] ); ?>');">                    
                  </div>
                </div>
               <?php endif; ?>
              </div>
            </div>
          </div>

          <?php 
            $handleidings = $handleiding['handleiding'];
              if($handleidings):
          ?>
          <div class="prdt-mnl-process mHc">
            <ul class="clearfix reset-list">
              <?php foreach( $handleidings as $handle ): ?>
              <li>
                <div class="pmp-des">
                  <?php if( !empty($handle['afbeelding']) ):  ?>
                  <div class="pmp-des-img">
                    <?php echo cbv_get_image_tag($handle['afbeelding']); ?>
                  </div>

                  <?php endif; ?>
                  <div class="pmp-des-tlt">
                    <?php 
                        if( !empty($handle['titel']) ) printf( '<h6 class="fl-h6 pmp-title">%s</h6>', $handle['titel'] );
                      ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php 
  $showhidegalleri2 = get_field('showhidegalleri2', $thisID);
  $galerij2 = get_field('galerij_sec2', $thisID);
  if( $showhidegalleri2 ):
  if( $galerij2 ):
    
?>
<section class="grid-gallary">

  ?>
  <div class="grid-gallary-cntrl"> 
    <?php if( !empty($galerij2['afbeelding_1']) ):?>
    <div class="grd-galry-lft mHc">
      <div class="lft-grd-galry">
        <div class="grd-galry-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $galerij2['afbeelding_1'] ); ?>');"></div>
      </div>   
    </div>
    <?php endif; ?>
    <div class="grd-galry-rgt mHc">
      <div class="grd-galry-rgt-top">
        <?php if( !empty($galerij2['afbeelding_2']) ):?>
        <div class="ggrt-img-1 mHc1">  
          <div class="ggrt-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $galerij2['afbeelding_2'] ); ?>');"></div>
        </div> 
        <?php endif; ?>
        <?php if( !empty($galerij2['afbeelding_3']) ):?> 
        <div class="ggrt-img-2 mHc1">
          <div class="ggrt-img2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $galerij2['afbeelding_3'] ); ?>');"> 
          </div>
        </div>
        <?php endif; ?>
        <?php if( !empty($galerij2['afbeelding_4']) ):?>
        <div class="ggrt-img-3 mHc1">
          <div class="ggrt-img3 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $galerij2['afbeelding_4'] ); ?>');"> 
          </div>
        </div> 
        <?php endif; ?>
      </div>
      <?php if( !empty($galerij2['afbeelding_5']) ):?>
      <div class="grd-galry-rgt-btm">
        <div class="ggrb-img-1">
          <div class="ggrb-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $galerij2['afbeelding_5'] ); ?>');">          
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>  
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $showhidetradi = get_field('showhidetradi', $thisID);
  $tradities = get_field('tradities_sec', $thisID);
  if( $showhidetradi ):
  if( $tradities ):
    $tradgalerij = $tradities['galerij'];
?>
<section class="traditions-sec about-tradition-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="traditions-sec-cntrl">
          <div class="trad-des mHc">
            <?php 
              if( !empty($tradities['titel']) ) printf( '<h2 class="fl-h2 trad-titl">%s</h2>', $tradities['titel'] );
              if( !empty($tradities['beschrijving']) ) echo wpautop( $tradities['beschrijving'] );
            ?>
          </div>
          <div class="trad-galry mHc">
            <div class="trad-galry-tp">
              <?php if( !empty($tradgalerij['afbeelding_1']) ):?>
              <div class="tgt-lft mHc1">
                <div class="tgt-lft-img-1">
                  <div class="tgt-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $tradgalerij['afbeelding_1'] ); ?>');"></div>
                </div>                
              </div>
              <?php endif; ?>
              <div class="tgt-rgt mHc1">
                <?php if( !empty($tradgalerij['afbeelding_2']) ):?>
                <div class="tgt-rgt-img1">
                  <div class="tgt-img2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $tradgalerij['afbeelding_2'] ); ?>');"></div>
                </div>
                <?php endif; ?>
                <?php if( !empty($tradgalerij['afbeelding_3']) ):?>
                <div class="tgt-rgt-img2">    
                  <div class="tgt-img3 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $tradgalerij['afbeelding_3'] ); ?>');"></div>
                </div>
                <?php endif; ?>
              </div>  
            </div>
            <div class="trad-galry-btm">
              <?php if( !empty($tradgalerij['afbeelding_4']) ):?>
              <div class="tgb-img-1 mHc">
                <div class="tgb-img1 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $tradgalerij['afbeelding_4'] ); ?>');"></div>
              </div>
              <?php endif; ?>
              <?php if( !empty($tradgalerij['afbeelding_5']) ):?>
              <div class="tgb-img-2 mHc">
                <div class="tgb-img2 inline-bg" style="background-image: url('<?php echo cbv_get_image_src( $tradgalerij['afbeelding_5'] ); ?>');">
                </div>
              </div> 
              <?php endif; ?>
            </div>
          </div>
        </div>
    </div>  
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>



<?php  
  $showhide_products = get_field('showhide_products', $thisID);
  $abproduct = get_field('aboutproduct', $thisID);
  if($showhide_products): 
  if($abproduct): 
?>
<section class="product-sec about-prdt-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-cntrl">
          <div class="prdt-catg-des-cntrl">
            <div class="prdt-catg-des-bg">
              <div class="prdt-des-logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/sedge-prdt-logo.png" alt=""></a>
              </div>
              <div class="prdt-des">
                <?php
                  if( !empty($abproduct['beschrijving']) ) echo wpautop( $abproduct['beschrijving'] );
                ?>
              </div>

                <?php 
                    $apro_des_knop = $abproduct['knop'];
                    if( is_array( $apro_des_knop ) &&  !empty( $apro_des_knop['url'] ) ):
                ?>
                <div class="find-more">
                  <?php  printf('<a class="fl-blue-btn find-more-btn" href="%s" target="%s">%s</a>', $apro_des_knop['url'], $apro_des_knop['target'], $apro_des_knop['title']); ?>
                </div>
                <?php endif; ?>
            </div>
          </div>
          <?php 
          $products = $abproduct['products'];
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
                  <?php echo $gridtag; ?>
              </div>
              <div class="prdt-fea-cont">  
                <a href="<?php echo $proLink; ?>"><h5 class="fl-h5 prdt-itm-titl"><?php if( !empty($product['titel']) ) printf('%s', $product['titel']); ?></h5></a>
                <?php if( !empty($product['height']) ) printf('<span>%s<br> height</span>', $product['height']); ?>
              </div>  
            </div>
            <?php } ?>
          </div>
          <?php endif;?>             
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
get_template_part('templates/footer-top-form');
get_footer();
?>