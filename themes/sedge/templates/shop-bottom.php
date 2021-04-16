  <?php 
  $btm_desc = '';
  if(is_shop()):
    $thisID = woocommerce_get_page_id('shop');
    $titel = get_field('titel', $thisID); 
    $btm_desc = get_field('beschrijving', $thisID); 
  ?>
  <?php 
  elseif(is_product_category()): 
    $term = get_queried_object();
    $titel = get_field('bottom_titel', $term); 
    $btm_desc = get_field('beschrijving', $term); 
  endif;
  if( !empty($btm_desc) || !empty($titel) ):
?>
<section class="fl-overview-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-overview-cont-cntrl">
          <div class="overview-hdr">
            <?php if( !empty($titel) ) printf('<h6 class="fl-h6 overview-title">%s</h6>', $titel); ?>
          </div>
          <div class="overview-des">
            <?php if( !empty($btm_desc) ) echo wpautop( $btm_desc ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>