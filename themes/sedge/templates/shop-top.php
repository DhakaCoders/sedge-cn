<div class="page-banner-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-entry-hdr clearfix">
          <?php 
          if(is_shop()):
            $thisID = woocommerce_get_page_id('shop');
            $titel = get_field('titel', $thisID);
            if( !empty($titel) )
              printf('<h1 class="fl-blue-btn">%s</h1>', $titel);
            else 
              printf('<h1 class="fl-blue-btn">%s</h1>', get_the_title($thisID));
          ?>
          <?php 
          elseif(is_product_category()): 
            $term = get_queried_object();
            if( !empty($term->name) ) printf('<h1 class="fl-blue-btn">%s</h1>', $term->name);
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>