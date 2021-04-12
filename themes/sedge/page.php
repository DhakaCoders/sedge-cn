<?php get_header(); ?>

  <?php if(is_account_page() || is_checkout()):?>
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
      <div class="block-955">
        <?php if( is_cart() ): ?>
        	<div class="page-heading"><h1><?php echo get_the_title(); ?></h1></div>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
    </article>
  </section>
  <?php endif; ?>

<?php get_footer(); ?>