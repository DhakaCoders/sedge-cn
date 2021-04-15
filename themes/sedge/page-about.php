<?php 
/*Template Name: About*/
get_header();
$thisID = get_the_ID();
?>

<?php  
  $abanner = get_field('about_banner', $thisID);
  $page_title = !empty($abanner['titel']) ? $abanner['titel'] : get_the_title();

  if($abanner):
  $about_bannerposter = !empty($abanner['afbeelding'])? cbv_get_image_src( $abanner['afbeelding'], 'full' ): '';
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
                <?php 
                  if( !empty($abanner['beschrijving']) ) echo $abanner['beschrijving'];
                ?>
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
  $intro = get_field('intro_sec', $thisID);
  if( $intro ):
    $intro_banner = !empty($intro['afbeelding'])? cbv_get_image_src( $intro['afbeelding'], 'full' ): '';
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
                 <div class="about-img inline-bg" style="background: url('<?php echo $intro_banner; ?>');"></div>
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



<section class="about-msnry-grd-items-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-msnry-grd-items clearfix">
          <div class="about-gallery-cntlr">
            <div class="about-msnry-grd-item aboutgi1">
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/about-gallery-img-1.png);">
                </div>
              </div>
            </div>
            <div class="about-msnry-grd-item aboutgi2">
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/about-gallery-img-2.png);">
                </div>
              </div>
            </div>
            <div class="about-msnry-grd-item aboutgi3">
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/about-gallery-img-3.png);">
                </div>
              </div>
              <div class="about-msnry-grd-item-ctlr">
                <div class="about-msnry-grd-item-img inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/about-gallery-img-4.png);">
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php 
  $handleiding_sec = get_field('handleiding_sec', $thisID);
  if( $handleiding_sec ):
    
?>
<section class="product-menual-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-menual-hdr">
          <?php 
            if( !empty($handleiding_sec['titel']) ) printf( '<h2 class="fl-h1 prdt-menual-titl">%s</h2>', $handleiding_sec['titel'] );
          ?>
        </div>
        <div class="prdt-mnl-cntrl">
          <div class="pmi-galry mHc">
            <div class="galry-img3">
              <div class="glry-img-lft mHc1" >
                <div class="lft-glry-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/prdt-mnl-img-1.jpg');">                  
                </div>
              </div>
              <div class="glry-img-rgt mHc1">
                <div class="rgt-img1">
                  <div class="rgt-glry-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/prdt-mnl-img-2.jpg');">                  
                  </div>
                </div>  
                <div class="rgt-img2">
                  <div class="rgt-glry-img2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/prdt-mnl-img-3.jpg');">                  
                  </div>
                </div>  
              </div>
            </div>
            <div class="galry-img1">
              <div class="glry-img1-1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/prdt-mnl-img-4.jpg');">                
              </div>            
            </div>
            <div class="res-galry-img2">
              <div class="res-glry-img21">
                <div class="res-glry-img21-1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/res-prdt-mnl-des-img-1.jpg');">                  
                </div>                
              </div>
              <div class="res-glry-img22">
                <div class="res-glry-img22-1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/res-prdt-mnl-des-img-2.jpg');">                  
                </div>
              </div>
            </div>
            <div class="res-galry-img4">
              <div class="res-glry-img4-lft">
                <div class="res-galry-img4-lft-1">
                  <div class="rg-lft-1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/res-grid-glary-img-1.jpg');">                    
                  </div>
                </div>
                <div class="res-galry-img4-lft-2">
                  <div class="rg-lft-2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/res-grid-glary-img-2.jpg');">                    
                  </div>
                </div>
              </div>
              <div class="res-glry-img4-rgt">
                <div class="res-galry-img4-rgt-1">
                  <div class="rg-rgt-1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-1.jpg');">                    
                  </div>
                </div>
                <div class="res-galry-img4-rgt-2">
                  <div class="rg-rgt-2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/res-grid-glary-img-3.jpg');">                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
            $handleidings = $handleiding_sec['handleiding'];
              if($handleidings):
          ?>
          <div class="prdt-mnl-process mHc">
            <ul class="clearfix reset-list">
              <?php foreach( $handleidings as $handleiding ): ?>
              <li>
                <div class="pmp-des">
                  <?php if( !empty($handleiding['afbeelding']) ):  ?>
                  <div class="pmp-des-img">
                    <?php echo cbv_get_image_tag($handleiding['afbeelding']); ?>
                  </div>

                  <?php endif; ?>
                  <div class="pmp-des-tlt">
                    <?php 
                        if( !empty($handleiding['titel']) ) printf( '<h6 class="fl-h6 pmp-title">%s</h6>', $handleiding['titel'] );
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


<?php 
  $galerijs_2 = get_field('galerij_2', $thisID);
  if( $galerijs_2 ):
    
?>
<section class="grid-gallary">
  <?php foreach( $galerijs_2 as $galerij_2 ){
    printr($galerij_2);
  }
  $galerij_2_01 = !empty($galerij_2[295])? cbv_get_image_src( $galerij_2['295'], 'full' ): '';

  ?>
  <div class="grid-gallary-cntrl"> 
    <div class="grd-galry-lft mHc">
      <div class="lft-grd-galry">
        <div class="grd-galry-img1 inline-bg" style="background-image: url('<?php echo $galerij_2_01; ?>');">
        </div>
      </div>   
    </div>
    <div class="grd-galry-rgt mHc">
      <div class="grd-galry-rgt-top">
        <div class="ggrt-img-1 mHc1">  
          <div class="ggrt-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-2.jpg');"></div>
        </div>  
        <div class="ggrt-img-2 mHc1">
          <div class="ggrt-img2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-3.jpg');"> 
          </div>
        </div>
        <div class="ggrt-img-3 mHc1">
          <div class="ggrt-img3 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-4.jpg');"> 
          </div>
        </div>  
      </div>
      <div class="grd-galry-rgt-btm">
        <div class="ggrb-img-1">
          <div class="ggrb-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-5.jpg');">          
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
<?php endif; ?>




<?php 
  $tradities_sec = get_field('tradities_sec', $thisID);
  if( $tradities_sec ):
?>
<section class="traditions-sec about-tradition-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="traditions-sec-cntrl">
          <div class="trad-des mHc">
            <?php 
              if( !empty($tradities_sec['titel']) ) printf( '<h2 class="fl-h2 trad-titl">%s</h2>', $tradities_sec['titel'] );
              if( !empty($tradities_sec['beschrijving']) ) echo wpautop( $tradities_sec['beschrijving'] );
            ?>
          </div>
          <div class="trad-galry mHc">
            <div class="trad-galry-tp">
              <div class="tgt-lft mHc1">
                <div class="tgt-lft-img-1">
                  <div class="tgt-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/trad-galry-img-1.jpg');"></div>
                </div>                
              </div>
              <div class="tgt-rgt mHc1">
                <div class="tgt-rgt-img1">
                  <div class="tgt-img2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/trad-galry-img-2.jpg');"></div>
                </div>
                <div class="tgt-rgt-img2">    
                  <div class="tgt-img3 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/trad-galry-img-3.jpg');"></div>
                </div>
              </div>  
            </div>
            <div class="trad-galry-btm">
              <div class="tgb-img-1 mHc">
                <div class="tgb-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/trad-galry-img-4.jpg');"></div>
              </div>
              <div class="tgb-img-2 mHc">
                <div class="tgb-img2 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/trad-galry-img-5.jpg');">
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
                <p>Sedge wants to contribute to a better future for generations to come.</p>
                <p>Our goal is to play a positive part in the development of a sustainable society and 
                the preservation of traditions. By means of offering 100% natural products and creating more awareness with consumers about ecology and other facets of nature.</p>
                <p>What drives us in the long term is the opportunity to complete the circle and give back to nature and to the people who give us the possibility to do what we love to do.</p>
                <p>As an organization we persuade stable,long lasting relationships between equal partners.</p>
              </div>
              <div class="find-more">
                  <a href="#" class="fl-blue-btn find-more-btn">search our products</a>
                </div> 
            </div>
          </div>
          <div class="prdt-catg">
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/cocktail-img.jpg" alt="">
              </div>
              <div class="prdt-fea-cont">  
                <h5 class="fl-h5 prdt-itm-titl">cocktail</h5>
                <span>15cm<br> height</span>
              </div>  
            </div>
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/long-drink-img.jpg" alt="">
              </div>
              <div class="prdt-fea-cont">
                <h5 class="fl-h5 prdt-itm-titl">long<br> drink</h5>
                <span>20cm<br> height</span>
              </div>  
            </div>
            <div class="prdt-item">
              <div class="prdt-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/soda-bottle.jpg" alt="">
              </div>  
              <div class="prdt-fea-cont">
                <h5 class="fl-h5 prdt-itm-titl">soda<br> bottle</h5>
                <span>25cm<br> height</span>
              </div>  
            </div>
          </div>             
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_template_part('templates/footer-top-form');
get_footer();
?>