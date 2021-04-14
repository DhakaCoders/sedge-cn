<?php get_header(); ?>

  <?php if(is_cbv_wc()):?>
    <section class="wc-page-con-wrap">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<article class="default-page-con">
            <?php if( is_cart() ): ?>
              <div class="page-heading"><h1><?php echo get_the_title(); ?></h1></div>
            <?php endif; ?>
    					<?php the_content(); ?>
    				</article>
    			</div>
    		</div>
    	</div>
    </section>
  <?php else:?>
  <section class="innerpage-con-wrap">
    <article class="default-page-con">
      <div class="block-955">
        <?php the_content(); ?>
      </div>
    </article>
  </section>
  <?php endif; ?>
<?php 
  if(is_show_footer_form()){
    get_template_part('templates/footer', 'top-form');
  }
?>
<?php get_footer(); ?>