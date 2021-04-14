<?php 
$slides = get_field('slides', 'options');
if( !empty($slides) ):
?>
<section class="ftr-top-sec">
  <div class="ftrTopSlider clearfix">
    <?php foreach( $slides as $slide ): ?>
    <div class="ftr-slider-grd-item">
      <?php echo cbv_get_image_tag($slide); ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>