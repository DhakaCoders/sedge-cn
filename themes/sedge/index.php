<?php get_header(); ?>


<section class="blog-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="blog-inr">
          <div class="page-entry-hdr blog-single-entry-hdr clearfix">
            <h1 class="fl-blue-btn"><?php single_post_title(); ?></h1>
          </div>
          <div class="blog-grid-cntlr">
            <ul class="reset-list">
              <?php while( have_posts()): the_post(); ?>
              <li>
                <div class="blog-item">
                  <?php 
                    if ( has_post_thumbnail() ) {
                        $attach_id = get_post_thumbnail_id(get_the_ID());
                  ?>
                  <div class="blog-item-img-cntlr">
                    <div class="blog-item-img inline-bg" style="background: url(<?php echo cbv_get_image_src($attach_id); ?>);">
                      <?php the_post_thumbnail('full'); ?>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="blog-item-desc-cntlr mHc">
                    <span class="blog-item-desc-date"> <?php echo get_the_date('d M Y'); ?></span>
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
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
              
            </ul>
          </div>
          
        <?php if( $wp_query->max_num_pages > 1 ): ?>
          <div class="fl-pagi-cntlr">
            <?php
              global $wp_query;
              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __(''),
                'next_text' => __(''),
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query->max_num_pages
              ) );
            ?>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('templates/footer', 'top-form'); ?>
<?php get_footer(); ?>