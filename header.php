<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_archive()) {?> 
	<header class="header-proj">
<?php }else { ?> <header class="header scroll-block"> <?php } ?>

	<div class="container">
		<div class="header__inner">
			<?php global $build_opt; ?>
			<div class="header__content">
				<div class="header__content-top">	
					<a class="header__content-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php echo esc_attr($build_opt['build_logo']); ?>
					</a>
					<!-- Nav -->
					<?php wp_nav_menu( array(
						'theme_location'=> 'menu-header',
						'menu_id' => 'primary-menu',
						'menu_class' => 'menu',
						'items_wrap' => '<ul class="menu__list"><li class> %3$s </ul>',
						'add_li_class'  => 'scroll-button',
						'container' => 'nav'        
      		) ); ?>
					<div class="burger">
						<div class="burger-line">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>

				<?php if(is_front_page()) { ?> 
				<div class="header__content-inner">
					<div class="header__content-info">
						<?php if( $build_opt['utp-title'] ) {  ?>
							<h1 class="header__content-title">
								<?php echo esc_attr($build_opt['utp-title']); ?>
							</h1>
						<?php } ?>
						<?php if( $build_opt['utp-text'] ) {  ?>
							<p class="header__content-text">
								<?php echo esc_attr($build_opt['utp-text']); ?>
							</p>
						<?php } ?>
						<?php if( $build_opt['utp-button'] ) {  ?>
							<button class="header__content-btn scroll-button"><?php echo esc_attr($build_opt['utp-button']); ?></button>
						<?php } ?>

						<div class="header__content-bottom socials">
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
				</div>
				<?php } else if(is_archive()) { } else { ?>
					<div class="header-project__content-inner header-project__content-inner--project">
						<div class="header-project__content-left">
							<div class="header-project__content-centre">
								<h1 class="header-project__content-title">
									Вілла «SunRise»
								</h1>
								<h4 class="header-project__subtitle">Односімейна двоповерхова вілла</h4>
								<p class="header-project__content-text project-text">
									2019 р. Вілла «SunRise» — комфортна та дуже багатофункціональна. Вона є прикладом реалізації
									будівництва оригінального проекту будівельної компанії Build.
								</p>
								<p class="header-project__content-text project-text">
									Цей каркасний будинок підійде як для тимчасового (гостяного) проживання, так і для постійного (за
									певної конфігурації). Ергономічність планування житлового простору дозволяє комфортно та ефективно
									використовувати усі переваги даного будинку.
								</p>
								<p class="header-project__content-text project-text">
									Усередині вілли оснащений ідеальний для життя мікроклімат з постійними показниками температури та
									вологості. Стіни забезпечені гарною звукоізоляцією та теплоізоляцією. Її легко опалювати і зберігати
									постійну температуру в зимовий період. Будова дуже вологостійка, це збереже житло від вогкості.
								</p>
								<button class="header__content-btn project-btn scroll-button">Детальніше</button>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php 
				$args = array(
					'post_type' => 'houses',
					'posts_per_page' => '-1',
				);
				$home_houses = new WP_Query($args); ?>
				<?php if(is_front_page()) { ?> 
					<div class="header__slider">
						<div class="sliderbig">
							<?php while ($home_houses->have_posts()) : $home_houses->the_post(); ?>
								<div class="sliderbig__item">
									<div class="sliderbig__item-thumb">
										<?php echo get_the_post_thumbnail(get_the_ID()); ?>
									</div>
									<div class="slide__content">
										<h3 class="slide__content-title"><?php the_title(); ?></h3>
										<ul class="slide__content-list">
										<?php if (get_post_meta(get_the_ID(), 'build_storey', true)) { ?>
												<li class="slide__content-item"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_storey', true)); ?></li>
											<?php } ?>
											<?php if (get_post_meta(get_the_ID(), 'build_attic', true)) { ?>
												<li class="slide__content-item"><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_attic', true)); ?></li>
											<?php } ?>
										</ul>
										<?php if (get_post_meta(get_the_ID(), 'build_space', true)) { ?>
											<p class="slide__content-description">Площа будинку: <span><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_space', true)); ?> м2</span></p>
										<?php } ?>
										<?php if (get_post_meta(get_the_ID(), 'build_year', true)) { ?>
											<p class="slide__content-description">Введений в експлуатацію: <span><?php echo esc_attr(get_post_meta(get_the_ID(), 'build_year', true)); ?></span></p>
										<?php } ?>
										<p class="slide__content-text"></p>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>

						<div class="slider">
						<?php while ($home_houses->have_posts()) : $home_houses->the_post(); ?>
							<div class="slider__item">
								<?php echo get_the_post_thumbnail(get_the_ID()); ?>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				<?php  }  else if(is_archive()) { }	else {   ?> 
					

					<div class="header__slider">
						<div class="sliderbig">
							<?php while ($home_houses->have_posts()) : $home_houses->the_post(); ?>
								<div class="sliderbig__item">
									<div class="sliderbig__item-thumb">
										<?php echo get_the_post_thumbnail(get_the_ID()); ?>
									</div>  
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="slider">
							<?php while ($home_houses->have_posts()) : $home_houses->the_post(); ?>
								<div class="slider__item">
									<?php echo get_the_post_thumbnail(get_the_ID()); ?>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
				<?php  } ?>
			</div>
		</div>
	</div>
</header>

	<main id="content" class="main">


<?php wp_body_open(); ?>
