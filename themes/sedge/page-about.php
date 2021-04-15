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


<!-- sabbir start -->
<section class="product-menual-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="prdt-menual-hdr">
          <h1 class="fl-h1 prdt-menual-titl">FROM RAW MATERIAL,<br> THROUGH MANUAL PROCESSING,<br> TO FINAL PRODUCT</h1>
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
          <div class="prdt-mnl-process mHc">
            <ul class="clearfix reset-list">
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-1.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">Handpicking <br>raw material</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-2.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">cutting stems <br>at specifc lenghts</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-3.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">Thorough cleaning <br>inside and outside</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-4.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">desinfecting <br>with salt water</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-5.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">Cold oven baking</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-6.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">Natural recovery</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-7.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">anti bacterial treatment<br>with UV-light</h6>
                  </div>
                </div>
              </li>
              <li>
                <div class="pmp-des">
                  <div class="pmp-des-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/prdt-mnl-des-img-8.jpg" alt="">
                  </div>
                  <div class="pmp-des-tlt">
                    <h6 class="fl-h6 pmp-title">quality  control</h6>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="grid-gallary">
  <div class="grid-gallary-cntrl"> 
    <div class="grd-galry-lft mHc">
      <div class="lft-grd-galry">
        <div class="grd-galry-img1 inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/grid-glary-img-1.jpg');">
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

<section class="traditions-sec about-tradition-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="traditions-sec-cntrl">
          <div class="trad-des mHc">
            <h2 class="fl-h2 trad-titl">TRADITIONS</h2>
            <p>For hundreds of years grey sedge is used for making all sorts off daily utilities.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque non nulla in lacus, a, nisl risus pulvinar id. Quis praesent at purus, id justo, enim tortor porttitor sit. Erat quam in nisi, amet. Augue adipiscing vel turpis aliquet sem sit nulla. Et ac sed feugiat leo enim placerat nunc.</p>
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

<!-- sabbir end -->


<section class="ftr-top-contact-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-top-contact-sec-inr clearfix">
          <div class="ftr-top-contact-lft">
            <div class="ftr-top-contact-lft-inr">
              <h6 class="ftr-top-cnt-lft-title">BLIJF OP DE HOOGTE VAN ACTIES EN PROMOTIES SCHRIJF JE IN OP ONZE NIEUWSBRIEF</h6>
            </div>
          </div>
          <div class="ftr-top-contact-rgt">
            <div class="ftr-top-contact-rgt-inr">
              <div class="wpforms-container">
                <form class="wpforms-form">
                  <div class="wpforms-field-container">  
                    <div class="wpforms-field firstNameField">
                      <input type="text" name="name" placeholder="Voornaam" required>
                    </div>
                    <div class="wpforms-field lastNameField">
                      <input type="text" name="name" placeholder="Naam" required>
                    </div>
                    <div class="wpforms-field mailField">
                      <input type="email" name="email" placeholder="mathias2.conversalbe" required>
                    </div>
                    <div class="wpforms-field wpforms-field-html html-field">
                      <p>Wij respecteren uw <a href="#">privacy.</a> Jouw gegevens worden altijd vertrouwelijk behandeld.</p>
                    </div>
                  </div><!-- end of .wpforms-field-container-->
                  <div class="wpforms-submit-container">
                    <button type="submit" name="submit" class="wpforms-submit fl-blue-btn">VERZENDEN</button>
                  </div>

                </form>
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