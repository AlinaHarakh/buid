<?php get_header(); ?>
<section class="proj">
  <div class="container">
    <div class="proj__inner">
      <?php if( $build_opt['archive_title'] ) {  ?>
        <h1 class="proj__title"><?php echo esc_attr($build_opt['archive_title']); ?></h1>
      <?php } ?>
    </div>
  </div>
</section>
<section class="all">
  <div class="container">
    <?php
      $posts_per_page = 3;
				if(isset($build_opt['houses_count'])) {
					$posts_per_page = $build_opt['houses_count'];
				}

      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $houses = new WP_Query(array('post_type'=>'houses', 'posts_per_page' => $posts_per_page, 'paged' => $paged));
    ?> 
    <div class="all__inner">
      <?php if ( $houses->have_posts() ) : while ( $houses->have_posts() ) : $houses->the_post();  ?>
        <div class="all__item">
          <div class="all__item-img">
              <?php echo get_the_post_thumbnail(get_the_ID(), 'houses_archive'); ?>
          </div>
          <div class="all__item-info">
            <h4 class="all__item-title"><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
            <?php if (get_post_meta(get_the_ID(), 'build_projects_button', true)) { ?>
              <a class="all__item-link" href="<?php the_permalink(); ?>"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_projects_button', true)); ?></a>
            <?php } ?>
          </div>          
        </div>
					<?php endwhile; ?>
			</div>
				<div class="pagination">
					<?php 
						$total_houses = $houses->found_posts;
						$total_pages = ceil($total_houses / $posts_per_page);
						$settings = array(
							'prev_next' => false,
							'total'     => $total_pages,
							'current'   => $paged
						);
						echo paginate_links( $settings );
					?>
		</div>
		<?php endif; ?>
  </div>
</section>
</main>
<?php get_footer(); ?>