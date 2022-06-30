<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
$logo = esc_attr( get_option( 'logo_url' ) );
$fb = esc_attr( get_option('fb_url') );
$insta = esc_attr( get_option('insta_url') );
$twit = esc_attr( get_option('twit_url') );
$pin = esc_attr( get_option('pin_url') );

$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
$salesUrl = esc_attr( get_option( 'sales_url' ) );
$supportUrl = esc_attr( get_option( 'support_url' ) );
$copyright = esc_attr( get_option( 'copyright_url' ) );

?>

	</main>
	
	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="footer-content">
						<div class="footer-logo">
							<a href="<?php bloginfo('home'); ?>" class="footer-logo-link">
								<img src="<?php echo $logo; ?>" alt="">
							</a>
						</div>
						<ul class="footer-social">
							<li>
								<a href="<?php echo $fb; ?>" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
							</li>
							<li>
								<a href="<?php echo $insta; ?>" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
							</li>
							<li>
								<a href="<?php echo $twit; ?>" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
							</li>
							<li>
								<a href="<?php echo $pin; ?>" target="_blank"><i class="fa-brands fa-pinterest-square"></i></a>
							</li>
						</ul>
						<div class="rfd">
							<p>Buy Direct from Nelson</p>
							<a href="tel:<?php echo $salesUrl; ?>"><?php echo $salesUrl; ?></a>
							<div class="rfd-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/rfd-tv.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="footer-menu-wrapper">
						<div class="footer-menu-col">
							<div class="footer-menu-box">
								<h4 class="footer-menu-title">HORSE EQUIPMENT</h4>
								<?php
									wp_nav_menu(array(
										'theme_location' => 'secondary',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="footer-menu-list">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
							<div class="footer-menu-box">
								<h4 class="footer-menu-title">DOG EQUIPMENT</h4>
								<?php
									wp_nav_menu(array(
										'theme_location' => 'third',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="footer-menu-list">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
							<div class="footer-menu-box">
								<h4 class="footer-menu-title">LIVESTOCK EQUIPMENT</h4>
								<?php
									wp_nav_menu(array(
										'theme_location' => 'forth',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="footer-menu-list">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
						</div>
						<div class="footer-menu-col">
							<div class="footer-menu-box">
								<h4 class="footer-menu-title">SERVICE & REPAIR</h4>
								<?php
									wp_nav_menu(array(
										'theme_location' => 'fifth',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="footer-menu-list">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
							<div class="footer-menu-box">
								<h4 class="footer-menu-title">NELSON MANUFACTURING</h4>
								<?php
									wp_nav_menu(array(
										'theme_location' => 'sixth',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="%1$s" class="footer-menu-list">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end of footer -->

	<!-- copyright -->
	<section class="copyright">
		<p><?php echo $copyright; ?></p>
	</section>
	<!-- end of copyright -->
	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mixitup.min.js"></script>
	<?php wp_footer(); ?>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>