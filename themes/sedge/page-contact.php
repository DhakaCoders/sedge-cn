<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
?>
<?php  
  $intro = get_field('formsec', $thisID);
  $page_title = !empty($intro['titel']) ? $intro['titel'] : get_the_title();
?>

<div class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr clearfix">
          <h1 class="fl-blue-btn"><?php echo $page_title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="contact-form-sec-wrp">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
          <div class="contact-form-lft">
            <div class="contact-form-wrp clearfix">
              <div class="page-entry-header">
                <?php 
                  if( !empty($intro['subtitel']) ) printf( '<h2 class="fl-h2">%s</h2>', $intro['subtitel'] );
                  if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                ?>

                <?php if( !empty($intro['beschrijving']) ): ?>
                <div class="input-type-radio clearfix">
                  <input type="radio" id="bedrijf" name="condition" value="bedrijf" checked>
                  <label for="bedrijf">
                    Bedrijf
                    <span class="checkmark"></span>
                  </label>
                  <input type="radio" id="particulier" name="condition" value="particulier">
                  <label for="particulier">
                    Particulier
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="wpforms-container">
                <?php if(!empty($intro['shortcode'])) echo do_shortcode( $intro['shortcode'] ); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php 
            $address = get_field('address', 'options');
            $gmurl = get_field('url', 'options');
            $telefoon = get_field('telefoon', 'options');
            $email = get_field('emailadres', 'options');
            $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
          ?>
          <div class="contact-form-rgt">
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
                <h6 class="fl-h6 contact-form-info-title"><?php _e( 'Contact gegevens', THEME_NAME ); ?></h6>
                <ul class="reset-list clearfix">
                  <?php if( !empty($address) ) : ?>
                  <li>
                    <a href="<?php echo  $gmaplink; ?>" target="_blank">
                      <i><svg class="map-marker-icon-svg" width="24" height="29" viewBox="0 0 24 29" fill="#78797B">
                        <use xlink:href="#map-marker-icon-svg"></use> </svg>
                      </i>
                      <?php echo $address; ?>
                    </a>
                  </li>
                  <?php endif; if( !empty($email) ) : ?>
                  <li>
                    <a href="mailto:<?php echo $email; ?>">
                    <i><svg class="phone-call-icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="#78797B">
                      <use xlink:href="#phone-call-icon-svg"></use> </svg>
                    </i>
                    <?php echo $email; ?>
                   </a>
                  </li>
                  <?php endif; if( !empty($telefoon) ) : ?>
                  <li>
                    <span>
                      <a href="tel:<?php echo phone_preg($telefoon); ?>">
                      <i><svg class="email-icon-svg" width="32" height="32" viewBox="0 0 32 32" fill="#78797B">
                        <use xlink:href="#email-icon-svg"></use> </svg>
                      </i>
                      <?php echo $telefoon; ?>
                    </a>
                  </span>
                  </li>
                  <?php endif; ?>
                </ul>
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