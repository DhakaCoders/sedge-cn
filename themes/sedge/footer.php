
<?php get_template_part('templates/footer', 'top'); ?>

<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $gmurl = get_field('url', 'options');
  $telefoon = get_field('telefoon', 'options');
  $email = get_field('emailadres', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
  $smedias = get_field('social_media', 'options');
  $ftgalerij = get_field('ft_galerij', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-inr clearfix">
            <div class="ftr-logo-ctlr">
              <div class="ftr-logo">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-logo.png"></a>
              </div>
              <?php if(!empty($smedias)):  ?>
              <div class="xs-ftr-social-media show-sm">
                <div class="ftr-social-media">
                  <ul class="reset-list">
                    <?php foreach($smedias as $smedia): ?>
                    <li>
                      <a href="<?php echo $smedia['url']; ?>">
                        <?php echo $smedia['icon']; ?><span><?php echo $smedia['title']; ?></span>
                      </a>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="ftr-menu ftr-col-1">
              <h6 class="ftr-menu-title hide-sm"><?php _e( 'Navigatie', THEME_NAME ); ?></h6>
              <?php 
                $fmenuOptions1 = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions1 );
              ?> 
            </div>
            <div class="ftr-menu ftr-col-2 hide-sm">
              <h6 class="ftr-menu-title"><?php _e( 'Klantenservice', THEME_NAME ); ?></h6>
              <?php 
                $fmenuOptions2 = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions2 );
              ?> 
            </div>
            <div class="ftr-menu ftr-col-3 hide-sm">
              <h6 class="ftr-menu-title"><?php _e( 'Contact gegevens', THEME_NAME ); ?></h6>
              <?php 
                if( !empty($address) ) printf('<div class="ftr-location"><a href="%s" target="_blank">%s</a></div>', $gmaplink, $address);
                if( !empty($email) ) printf('<div class="ftr-email"><a href="mailto:%s">%s</a></div>', $email, $email); 
                if( !empty($telefoon) ) printf('<div class="ftr-phone"><a href="tel:%s">%s</a></div>', phone_preg($telefoon),  $telefoon);  
              ?>

              <?php if(!empty($smedias)):  ?>
              <div class="ftr-social-media">
                <ul class="reset-list">
                  <?php foreach($smedias as $smedia): ?>
                  <li>
                    <a href="<?php echo $smedia['url']; ?>">
                      <?php echo $smedia['icon']; ?><span><?php echo $smedia['title']; ?></span>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <?php if( $ftgalerij ): ?>
  <div class="ftr-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-middle-inr hide-sm">
            <ul class="reset-list">
              <?php foreach( $ftgalerij as $ftgalID ): ?>
              <li><?php echo cbv_get_image_tag($ftgalID); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-inr">

            <div class="ftr-btm-mdle">
              <div class="ftr-btm-mdle-top">
                <span>Beoordeling door klanten</span>
              </div>
              <div class="ftr-btm-mdle-btm">
                <span><strong>4.2</strong> van 5  -  <a href="#">3083 beoordelingen</a></span>
              </div>
            </div>
            <?php if( $ftgalerij ): ?>
            <div class="ftr-middle-inr xs-btm-img show-sm">
              <ul class="reset-list">
              <?php foreach( $ftgalerij as $ftgalID ): ?>
                <li><?php echo cbv_get_image_tag($ftgalID); ?></li>
              <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
            <div class="ftr-copywrite">
              <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?> 
            </div>
            
            <div class="ftr-designby">
              <span>Grapics by Bas Vaerewyck - Website laten maken door<a href="https://www.conversal.be/"> Conversal</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>