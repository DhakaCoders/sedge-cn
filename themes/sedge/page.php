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
        <?php while ( have_rows('inhoud') ) : the_row();  ?>
        <?php 
        if( get_row_layout() == 'introductietekst' ){ 
        $title = get_sub_field('titel');
        $afbeelding = get_sub_field('afbeelding');
        ?>
        <div class="block-955">
        <div class="dfp-promo-module clearfix">
          <?php 
            if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title fl-h1">%s</strong></div>', $title); 
            if( !empty($afbeelding) ){
              echo '<div class="dfp-plate-one-img-bx">'. cbv_get_image_tag($afbeelding).'</div>';
            }
          ?>
        </div>
        </div>
        <?php 
        }elseif( get_row_layout() == 'teksteditor' ){ 
        $beschrijving = get_sub_field('fc_teksteditor');
        ?>
        <div class="block-955">
        <div class="dfp-text-module clearfix">
        <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
        </div>
        </div>
        <?php }elseif( get_row_layout() == 'galerij' ){ 
        $galleries = get_sub_field('fc_afbeeldingen');
        $lightbox = get_sub_field('lightbox');
        $kolom = get_sub_field('kolom');
        if( $galleries ): 
        ?>
        <div class="block-955">
        <div class="gallery-wrap clearfix">
        <div class="gallery gallery-columns-<?php echo $kolom; ?>">
        <?php foreach( $galleries as $image ): ?>
        <figure class="gallery-item">
          <div class="gallery-icon portrait">
            <?php 
              if( $lightbox ){
                echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
                echo "</a>";
              }else{
                echo '<div class="gallery-icon-img inline-bg" style="background: url('.cbv_get_image_src( $image, 'dfpageg1' ).');"></div>';
              }
            ?>
          </div>
        </figure>
        <?php endforeach; ?>
        </div>
        </div>
        </div>
        <?php endif; ?>
        <?php }elseif( get_row_layout() == 'poster' ){     
        $poster = get_sub_field('afbeeldingen');
        $video_url = get_sub_field('fc_videourl');
        $postersrc = !empty($poster)? cbv_get_image_src($poster, 'dft_poster'): '';
        ?> 
        <div class="block-955">
        <div class="ac-fancy-module" >
        <div class="fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
        <?php if( $video_url ): ?>
        <a class="overlay-link" data-fancybox href="<?php echo $video_url; ?>"></a>
        <div class="fancy-border"></div>
        <span class="ms-video-play-cntlr">
          <i><img src="<?php echo THEME_URI; ?>/assets/images/play-icon.svg" alt=""></i>
        </span>
        <?php endif; ?>
        </div>
        </div>

        <?php }elseif( get_row_layout() == 'cta' ){ 
        $fc_titel = get_sub_field('fc_titel');
        $fc_tekst = get_sub_field('fc_tekst');
        $fc_knop = get_sub_field('fc_knop');
        ?>
        <div class="block-955">
        <div class="dfp-cta-module clearfix">
        <div class="cta-ctlr">
          <?php 
             if( !empty($fc_titel) ) printf('<h4 class="cta-title fl-h4">%s</h4>', $fc_titel);
            if( !empty($fc_tekst) ) echo wpautop( $fc_tekst );

            if( is_array( $fc_knop ) &&  !empty( $fc_knop['url'] ) ){
              printf('<div class="cta-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $fc_knop['url'], $fc_knop['target'], $fc_knop['title']); 
            }
          ?>
        </div>
        </div>
        </div>
        <?php }elseif( get_row_layout() == 'products' ){
        $productIDS = get_sub_field('fc_products');
        if( !empty($productIDS) ){
        $count = count($productIDS);
        $pIDS = ( $count > 1 )? $productIDS: $productIDS;
        $pQuery = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page'=> $count,
        'post__in' => $pIDS,
        'orderby' => 'date',
        'order'=> 'asc',

        ));

        }else{
        $pQuery = new WP_Query(array());
        }
        if( $pQuery->have_posts() ):
        ?>
        <div class="block-1440">
        <div class="fl-product-module">
        <div class="fl-products-cntlr">
          <ul class="products">
        <?php 
          while($pQuery->have_posts()): $pQuery->the_post(); 
          global $product, $woocommerce, $post;
              switch ( $product->get_type() ) {
              case "gift-card" :
                  $label  = __('selecteer bedrag', 'woocommerce');
              break;
              default :
                  $label  = __('IN WINKELWAGEN', 'woocommerce');
              break;
              }
          $seller_flash = get_field('seller_flash', $product->get_id());
          $gridtag = cbv_get_image_tag( get_post_thumbnail_id($product->get_id()), 'pgrid' );
        ?>
          <li>
            <?php 
            $seller_flash = get_field('seller_flash', $product->get_id());
            $gridtag = cbv_get_image_tag( get_post_thumbnail_id($product->get_id()), 'pgrid' );
            echo '<div class="fl-product-grd mHc">';
              echo '<div class="fl-product-grd-inr">';
                wc_get_template_part('loop/sale-flash');
                echo '<div class="fl-pro-grd-img-cntlr mHc1">';
                  echo '<a href="'.get_permalink( $product->get_id() ).'" class="overlay-link"></a>';
                  echo $gridtag;
                echo '</div>';
                echo '<div class="fl-pro-grd-des mHc2">';
                  echo '<h4 class="fl-h5 fl-pro-grd-title mHc3"><a href="'.get_permalink( $product->get_id() ).'">'.get_the_title().'</a></h4>';
                  echo '<div class="product-lenth">';
                  echo '<p>(15 cm)</p>';
                  echo '</div>';
                  echo '<div class="fl-pro-grd-price">';
                    echo $product->get_price_html();
                  echo '</div>';
                echo '</div>  ';
                echo '<div class="fl-pro-grd-btn">';
                  echo '<a class="fl-blue-btn" href="'.get_permalink( $product->get_id() ).'">
                    <i>
                      <svg class="lock-price" width="14" height="17" viewBox="0 0 14 17" fill="#fff">
                      <use xlink:href="#lock-price"></use> 
                      </svg>
                    </i>
                    <span>'.$label.'</span>';
                  echo '</a>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
            ?>
          </li>
        <?php endwhile; ?>
        </ul>
        </div>
        </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
        <?php }elseif( get_row_layout() == 'table' ){
        $fc_table = get_sub_field('fc_tafel');
        $fc_titel = !empty(get_sub_field('fc_titel'))?get_sub_field('fc_titel'):'';
        echo '<div class="block-955">';
        cbv_table($fc_table, $fc_titel);
        echo '</div>';
        ?>
        <?php }elseif( get_row_layout() == 'afbeelding' ){ 
            $afbeelding1 = get_sub_field('fc_afbeelding1');
            $afbeelding2 = get_sub_field('fc_afbeelding2');
            $afbeelding3 = get_sub_field('fc_afbeelding3');
            $afbeelding4 = get_sub_field('fc_afbeelding4');
            $afbeelding5 = get_sub_field('fc_afbeelding5');
        ?>
        <div class="block-955">
          <div class="dfp-img-module clearfix">
            <?php if( !empty($afbeelding1) ): ?>
            <div class="dfp-single-img-ctlr mHc">
              <div class="dfp-single-img">
                <?php echo cbv_get_image_tag($afbeelding1, 'about_gallery'); ?>
              </div>
            </div>
            <?php endif; ?>
              
            <div class="dfp-small-img mHc">
              <?php if( !empty($afbeelding2) ): ?>
              <div class="dfp-small-img-top">
                <?php echo cbv_get_image_tag($afbeelding2, 'about_gallery'); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($afbeelding3) ): ?>
              <div class="dfp-small-img-btm">
                <?php echo cbv_get_image_tag($afbeelding3, 'about_gallery'); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="gallery-wrap glry-col-2 clearfix">
            <div class="gallery gallery-columns-2">
              <?php if( !empty($afbeelding4) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding4, 'about_gallery'); ?>');"></div>
                  <!-- <img src="assets/images/dfp-img-08.jpg"> -->
                </div>
              </figure>
              <?php endif; ?>
              <?php if( !empty($afbeelding5) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding5, 'about_gallery'); ?>');"></div>
                  <!-- <img src="assets/images/dfp-img-09.jpg"> -->
                </div>
              </figure>
              <?php endif; ?>
            </div>
          </div>
        <?php }elseif( get_row_layout() == 'gap' ){
        $fc_gap = get_sub_field('fc_gap');
        ?>
        <div class="block-955">
        <div style="height:<?php echo $fc_gap; ?>px"></div>
        </div>
        <?php }elseif( get_row_layout() == 'horizontal_line' ){ ?>
        <div class="block-955">
        <hr>
        </div>
        <?php } ?>
        <?php endwhile; ?>
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