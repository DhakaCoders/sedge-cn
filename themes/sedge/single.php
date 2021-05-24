<?php get_header(); ?>
  <section class="innerpage-con-wrap">
    <article class="default-page-con">
        <div class="block-1440">
          <div class="page-entry-hdr blog-single-entry-hdr clearfix">
          <?php $blog_page_title = get_the_title( get_option('page_for_posts', true) ); ?>
            <h1 class="fl-blue-btn"><?php echo $blog_page_title; ?></h1>
          </div>
          <div class="bs-dfp-promo-module clearfix">
            <div class="bs-dfp-promo-module-hdr">
              <span class="bs-dfp-promo-module-date"><?php echo get_the_date('d M Y'); ?></span>
              <?php 
                if(have_rows('inhoud')): 
                  while ( have_rows('inhoud') ) : the_row();
                  if( get_row_layout() == 'introductietekst' ){
                      $page_title = get_sub_field('titel');
                  }
                  endwhile;
                  $pagetitle = !empty($page_title)? $page_title:get_the_title();
                endif;
              ?>
              <strong class="bs-dfp-promo-module-title fl-h2"><?php echo $pagetitle; ?></strong>
            </div>
          </div>
        </div>
      <?php if(have_rows('inhoud')):  ?>
        <?php while ( have_rows('inhoud') ) : the_row();  ?>
        <?php 
        if( get_row_layout() == 'introductietekst' ){ 
        $afbeelding = get_sub_field('afbeelding');
        ?>
        <div class="block-1440">
        <div class="dfp-promo-module clearfix">
          <?php 
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
        <?php 
        }elseif( get_row_layout() == 'blockquote' ){ 
        $blockquote = get_sub_field('fc_teksteditor');
        ?>
        <div class="block-955">
        <div class="dft-blockquote">
          <blockquote>
            <?php if( !empty( $blockquote ) ) echo wpautop($blockquote); ?>
          </blockquote>
        </div>
        </div>
        <?php 
        }elseif( get_row_layout() == 'product_overzicht' ){ 
        $fc_titlel = get_sub_field('fc_titlel');
        $height = get_sub_field('height');
        $afbeeldingen = get_sub_field('fc_afbeeldingen');
        ?>
        <div class="block-955">
        <div class="dfp-prdt-item-module">
          <div class="prdt-item">
            <?php if( !empty($afbeeldingen) ): ?>
            <div class="prdt-fea-img">
              <?php echo cbv_get_image_tag($afbeeldingen); ?>
            </div>
            <?php endif; ?>
            <div class="prdt-fea-cont">  
              <?php
                if( !empty($fc_titlel) ) printf('<h5 class="fl-h5 prdt-itm-titl">%s</h5>', $fc_titlel); 
                if( !empty($height) ) printf('<span>%s height</span>', $height); 
              ?>
            </div>  
          </div>
        </div>

        </div>
        <?php 
        }elseif( get_row_layout() == 'tekst_tekst' ){ 
        $tekst_1 = get_sub_field('tekst_1');
        $tekst_2 = get_sub_field('tekst_2');
        ?>
        <div class="block-955">
        <div class="dfp-des-module clearfix">
          <?php if( !empty( $tekst_1 ) ): ?>
          <div class="dfp-des-lft">
            <?php echo wpautop($tekst_1); ?>
          </div>
          <?php endif; ?>
          <?php if( !empty( $tekst_2 ) ): ?>
          <div class="dfp-des-rgt">
            <?php if( !empty( $tekst_2 ) ) echo wpautop($tekst_2); ?>
          </div>
          <?php endif; ?>
        </div>
        </div>
      <?php 
      }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
      $fc_afbeelding = get_sub_field('fc_afbeelding');
      $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
      $fc_tekst = get_sub_field('fc_tekst');
      $positie_afbeelding = get_sub_field('positie_afbeelding');
      $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
      ?>
      <div class="block-955">
      <div class="fl-dft-overflow-controller">
        <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
          <div class="fl-dft-lftimg-rgtdes-lft mHc" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
          <div class="fl-dft-lftimg-rgtdes-rgt mHc">
            <?php echo wpautop($fc_tekst); ?>
          </div>
        </div>
      </div>
      </div>
        <?php }elseif( get_row_layout() == 'galerij' ){ 
        $galleries = get_sub_field('fc_afbeeldingen');
        $lightbox = get_sub_field('lightbox');
        $kolom = get_sub_field('kolom');
        $gallerysize = ( $kolom <= 2 )? 'dfpgallery_1':'dfpgallery_2';
        $gallery_icon_height = ( $kolom <= 2 )? '':' height_284';
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
                echo '<div class="gallery-icon-img inline-bg'.$gallery_icon_height.'" style="background: url('.cbv_get_image_src( $image, $gallerysize ).');"></div>';
                echo "</a>";
              }else{
                echo '<div class="gallery-icon-img inline-bg'.$gallery_icon_height.'" style="background: url('.cbv_get_image_src( $image, $gallerysize ).');"></div>';
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

          $label  = __('IN WINKELWAGEN', 'woocommerce');

          $seller_flash = get_field('seller_flash', $product->get_id());
          $gridtag = cbv_get_image_tag( get_post_thumbnail_id($product->get_id()), 'product_thumb' );
        ?>
          <li>
            <?php 
            $seller_flash = get_field('seller_flash', $product->get_id());
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
                <?php echo cbv_get_image_tag($afbeelding1); ?>
              </div>
            </div>
            <?php endif; ?>
              
            <div class="dfp-small-img mHc">
              <?php if( !empty($afbeelding2) ): ?>
              <div class="dfp-small-img-top">
                <?php echo cbv_get_image_tag($afbeelding2); ?>
              </div>
              <?php endif; ?>
              <?php if( !empty($afbeelding3) ): ?>
              <div class="dfp-small-img-btm">
                <?php echo cbv_get_image_tag($afbeelding3); ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="gallery-wrap glry-col-2 clearfix">
            <div class="gallery gallery-columns-2">
              <?php if( !empty($afbeelding4) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding4); ?>');"></div>
                  <!-- <img src="assets/images/dfp-img-08.jpg"> -->
                </div>
              </figure>
              <?php endif; ?>
              <?php if( !empty($afbeelding5) ): ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <div class="gallery-icon-img inline-bg" style="background: url('<?php echo cbv_get_image_src($afbeelding5); ?>');"></div>
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
  
  
  
<?php 
  $terms = get_the_terms( get_the_ID(), 'category' );
  if( !empty($terms) ){
    $term_ids = array();
    foreach( $terms as $term ){
      $term_ids[] = $term->term_id;
    }
    $query = new WP_Query(array( 
        'post_type'=> 'post',
        'post_status' => 'publish',
        'posts_per_page' => 2,
        'orderby' => 'rand',
        'tax_query' => array(
             array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $term_ids
            )
        ) 
      ) 
    );
  }
  if($query->have_posts()){
   
?>



  
  
<section class="related-articles-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="related-articles-inr">
          <h3 class="related-articles-title fl-h3"><?php _e( 'Related Articles', THEME_NAME ); ?></h3>
          <div class="blog-grid-cntlr">
            <div class="blog-grid-wrap bsBlogItemSlider">
            <?php 
                while($query->have_posts()): $query->the_post();
                $re_gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'dftnieuws' );
                if( empty($re_gridurl) ){
                  $re_gridurl = THEME_URI.'/assets/images/post-df-img.jpg';
                }
            ?> 
              <div class="blog-grid-item-wrap">
                <div class="blog-grid-item-cntlr">
                  <div class="blog-item">
                    <div class="blog-item-img-cntlr">
                      <div class="blog-item-img inline-bg" style="background: url('<?php echo $re_gridurl; ?>');">
                        <?php the_post_thumbnail('full'); ?>
                      </div>
                    </div>
                    <div class="blog-item-desc-cntlr mHc">
                      <span class="blog-item-desc-date"><?php echo get_the_date('d M Y'); ?></span>
                      <h5 class="blog-item-desc-title mHc1 fl-h5">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h5>
                      <div class="blog-item-desc mHc2">
                        <?php the_excerpt(); ?>
                      </div>
                      <div class="blog-item-desc-btn">
                        <a class="fl-transparent-btn" href="<?php the_permalink(); ?>"><?php _e( 'READ MORE', THEME_NAME ); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } wp_reset_postdata();?>
  
<?php 
  if(is_show_footer_form()){
    get_template_part('templates/footer', 'top-form');
  }
?>
<?php get_footer(); ?>