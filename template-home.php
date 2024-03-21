<?php
/**
 * Template name: Homepage Template
 */
get_header(); ?>
<!--  -->
<section class="about scroll-block" id="about">
	<div class="container">
		<?php if (get_post_meta(get_the_ID(), 'build_about_title_main', true)) { ?>
			<h1 class="about__title section-title"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_about_title_main', true)); ?></h1>
		<?php } ?>
		<div class="about__content">
			<div class="about__content-box">
				<?php if(get_post_meta(get_the_ID(), 'build_about-photo1', true)){ ?>
					<img class="about__content-img" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'build_about-photo1', true)); ?>" alt="image">
				<?php } ?>
				<div class="about__content-info">
					<?php if(get_post_meta(get_the_ID(), 'build_about_subtitle1', true)){ ?>
						<h3 class="about__content-title"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_about_subtitle1', true)); ?></h3>
					<?php } ?>
					<?php if(get_post_meta(get_the_ID(), 'build_about_text1', true)){ 
							$content = get_post_meta(get_the_ID(), 'build_about_text1', true);
    					echo wpautop($content);
					 } ?>
				</div>
			</div>
			<div class="about__content-box">
				<?php if(get_post_meta(get_the_ID(), 'build_about_decor', true)){ ?>
					<img class="about__content-decor" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'build_about_decor', true)); ?>" alt="decor">
				<?php } ?>
				<div class="about__content-info">
					<?php if(get_post_meta(get_the_ID(), 'build_about_subtitle2', true)){ ?>
						<h3 class="about__content-title"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_about_subtitle2', true)); ?></h3>
					<?php } ?>
					<?php if(get_post_meta(get_the_ID(), 'build_about_text2', true)){ 
						$content = get_post_meta(get_the_ID(), 'build_about_text2', true);
    				echo wpautop($content);
					} ?>
					<?php if(get_post_meta(get_the_ID(), 'build_about_button', true)){ ?>
						<button class="about__content-btn scroll-button"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_about_button', true)); ?></button>
					<?php } ?>
				</div>
					
				<?php if(get_post_meta(get_the_ID(), 'build_about-photo2', true)){ ?>
					<img class="about__content-img" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'build_about-photo2', true)); ?>" alt="image">
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<section class="projects" id="projects">
	<div class="container">
		<?php if (get_post_meta(get_the_ID(), 'build_projects_title', true)) { ?>
			<h2 class="projects__title section-title"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_projects_title', true)); ?></h2>
		<?php } ?>
	</div>
	<div class="big-container">
		<div class="projects__slider projects-slider">
			<?php 
				$args = array(
					'post_type' => 'houses',
					'posts_per_page' => '-1',
				);
				$houses_posts = new WP_Query($args);
				while ( $houses_posts -> have_posts() ) : $houses_posts -> the_post();
			?>

				<div class="projects-slider__item">
					<div class="projects-slider__item-inner">
						<div class="projects_slider-img">
							<?php echo get_the_post_thumbnail(get_the_ID()); ?>
						</div>
						<div class="projects-slider__content">
							<h3 class="projects-slider__content-title"><?php the_title(); ?></h3>
							<ul class="projects-slider__content-list">
								<?php if (get_post_meta(get_the_ID(), 'build_storey', true)) { ?>
									<li class="projects-slider__content-item"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_storey', true)); ?></li>
								<?php } ?>
								<?php if (get_post_meta(get_the_ID(), 'build_attic', true)) { ?>
									<li class="projects-slider__content-item"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_attic', true)); ?></li>
								<?php } ?>
							</ul>
							<?php if (get_post_meta(get_the_ID(), 'build_space', true)) { ?>
								<p class="projects-slider__content-description">Площа будинку: <span><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_space', true)); ?> м2</span></p>
							<?php } ?>
							<?php if (get_post_meta(get_the_ID(), 'build_year', true)) { ?>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_year', true)); ?></span></p>
							<?php } ?>
							<p class="projects-slider__content-text"></p>
							<?php if (get_post_meta(get_the_ID(), 'build_projects_button', true)) { ?>
								<a class="projects-slider__btn" href="<?php the_permalink(); ?>"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_projects_button', true)); ?></a>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php  endwhile; wp_reset_postdata(); ?> 
		</div>
	</div>
</section>


<section class="how scroll-block" id="how">
	<div class="big-container">
		<div class="container">
			<h2 class="section-title how__title">Як ми працюємо?</h2>
			<div class="how__box">
    <?php
    $args = array(
        'post_type' => 'steps',
        'posts_per_page' => -1,
        // Add any other necessary query parameters here
    );
    $steps_posts = new WP_Query($args);
    $posts_array = array();
    $i = 0; // Initialize the counter
    while ($steps_posts->have_posts()) {
        $steps_posts->the_post();
        $posts_array[] = get_the_ID(); // Store post IDs in an array
    }
    wp_reset_postdata();
    $posts_array = array_reverse($posts_array); // Reverse the array
    foreach ($posts_array as $post_id) {
        $post = get_post($post_id);
        setup_postdata($post);
        $i++; // Increment the counter
        ?>
        <div class="how__item">
          <h4 class="how__item-title"><?php the_title(); ?></h4>
          <?php the_content(); ?>
        </div>
        <?php if ($i == 4) { ?>
          <div class="how__item item-promo">
            <p class="how__item-promo">
              Зроби свої 6 кроків назустріч будинку мрії!
            </p>
          </div>
        <?php } ?>
    <?php }
    	wp_reset_postdata();
    ?>
		</div>

		</div>
		<div class="decoration"></div>
	</div>
</section>


		<section class="contacts scroll-block" id="contacts">
			<div class="container">
				<h2 class="contacts__tiltle section-title">Зв'яжіться з нами</h2>
				<div class="contacts__inner">
					<div class="contacts__form">
						<form class="form">
						<?php echo do_shortcode(get_post_meta(get_the_Id(), 'build_contact_form_shortcode', true)); ?>	
						</form>
					</div>
					<div class="contacts__info">
						<div class="contacts__info-content">
							<?php if(get_post_meta(get_the_ID(), 'build_contact_phone1', true)) {?> 
								<a class="contacts__info-phone" href="tel:<?php echo esc_attr(str_replace([' ', '-', '+'], '', (get_post_meta(get_the_ID(), 'build_contact_phone1', true)))); ?>"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_contact_phone1', true));?></a>
							<?php } ?>
							<?php if(get_post_meta(get_the_ID(), 'build_contact_phone2', true)) {?> 
								<a class="contacts__info-phone" href="tel:<?php echo esc_attr(str_replace([' ', '-', '+'], '', (get_post_meta(get_the_ID(), 'build_contact_phone2', true)))); ?>"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_contact_phone2', true));?></a>
							<?php } ?>
							<?php if(get_post_meta(get_the_ID(), 'build_email', true)) {?> 
								<a class="contacts__info-mail" href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'build_email', true));?>"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_email', true));?></a>
							<?php } ?>
							<div class="contacts__info-socials socials">
							<?php global $build_opt; ?>
							<?php if( $build_opt['inst'] ) {  ?>
								<a class="socials__link" target="_blank" href="<?php echo esc_attr($build_opt['inst']); ?>">
									<img class="socials__link-img" src="<?php echo get_template_directory_uri() ?>/layouts/images/Instagram.svg" alt="icon">
								</a>
							<?php } ?>
							<?php if( $build_opt['teleg'] ) {  ?>
								<a class="socials__link" target="_blank" href="<?php echo esc_attr($build_opt['teleg']); ?>">
									<img class="socials__link-img" src="<?php echo get_template_directory_uri() ?>/layouts/images/telegram.svg" alt="icon">
								</a>
							<?php } ?>
							<?php if( $build_opt['fb'] ) {  ?>
								<a class="socials__link" target="_blank" href="<?php echo esc_attr($build_opt['fb']); ?>">
									<img class="socials__link-img" src="<?php echo get_template_directory_uri() ?>/layouts/images/facebook.svg" alt="icon">
								</a>
							<?php } ?>
							</div>
						</div>
						<?php if(get_post_meta(get_the_ID(), 'build_contact_img', true)){ ?>
						<img class="contacts__img" src="<?php echo esc_url(get_post_meta(get_the_ID(), 'build_contact_img', true)); ?>" alt="image">
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer();