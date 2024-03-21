<footer class="footer">
		<div class="container">
			<div class="footer__inner">
			<?php global $build_opt; ?>
				<a class="footer__logo logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo esc_attr($build_opt['build_logo']); ?>
				</a>
				<?php if( $build_opt['copyrights'] ) {  ?>
					<p class="footer__copy">© <?php echo esc_attr($build_opt['copyrights']); ?></p>
				<?php } ?>
					<!-- Nav -->
					<?php wp_nav_menu( array(
							'theme_location'=> 'menu-footer',
							'menu_id' => 'footer-menu',
							'menu_class' => 'footer__menu',
							'items_wrap' => '<ul class="footer__list"><li class> %3$s </ul>',
							'container' => 'nav'        
      			) ); ?>
				<button class="footer__arrow scroll-button">
					<img class="footer__arrow-img" src="<?php echo get_template_directory_uri() ?>/layouts/images/up-arrow.svg" alt="arrow icon">
				</button>
				<div class="footer__phones">
				<?php if( $build_opt['phone1'] ) {  ?>
					<a class="footer__phones-link" href="tel:<?php echo esc_attr(str_replace([' ', '-', '+'], '', $build_opt['phone1'])); ?>"><?php echo esc_attr($build_opt['phone1']); ?></a>
					<?php } ?>
					<?php if( $build_opt['phone2'] ) {  ?>
					<a class="footer__phones-link" href="tel:<?php echo esc_attr(str_replace([' ', '-', '+'], '', $build_opt['phone2'])); ?>"><?php echo esc_attr($build_opt['phone2']); ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
