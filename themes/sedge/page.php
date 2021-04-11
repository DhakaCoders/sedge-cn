<?php get_header(); ?>
<section class="innerpage-con-wrap">
  <?php if(is_account_page()):?>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<article class="default-page-con">
  					<?php the_content(); ?>
  				</article>
  			</div>
  		</div>
  	</div>
  <?php else:?>
  <article class="default-page-con">
    <div class="block-955">
      <?php the_content(); ?>
    </div>
  </article>
  <?php endif; ?>
</section>
<?php get_footer(); ?>