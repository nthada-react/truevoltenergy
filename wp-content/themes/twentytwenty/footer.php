<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
global $wp;
$current_url = home_url(add_query_arg([], $wp->request));
$get_started_url = $GLOBALS['current_site_url'] . '/get-started';

if ($current_url === $get_started_url) :
?>

<?php else : ?>
<!--Footer Section-->
			<footer class="wow fadeInUp">
				<div class="footerMenu">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<ul>
							<li>
								<div class="logo">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-logo.png" alt="" /></a>
								</div>
							</li>
							<li>
								<a href="#">1800-222-2222</a>
							</li>
							<li>
								<a href="#">operations@truevoltenergy.com</a>
							</li>
							<li>
								244, Madison Avenue,<br/>
								#1195 New York, NY-10016<br/>
								United States
							</li>
						</ul>
						<div class="footer-follows">
							<h5>Follow Us on</h5>
							<div class="socialLink">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/facebook-icon.svg" alt="" /></a>
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram-icon.svg" alt="" /></a>
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/youtube-icon.svg" alt="" /></a>
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tweet-icon.svg" alt="" /></a>
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/linkedin-icon.svg" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<ul>
							<li><h4>Company</h4></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Free Energy Club</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul>
							<li><h4>Resources</h4></li>
							<li><a href="#">Lowest Rate Guarantee</a></li>
							<li><a href="#">Energy Usage Calculator</a></li>
							<li><a href="#">Savings Calculator</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Energy 101</a></li>
							<li><a href="#">Average Electricity Bills in Every State</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footerCopyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="copyText">
							Copyright © 2025 TrueVolt ENERGY. All rights reserved. 
						</div>
					</div>
					<div class="col-md-6">
						<div class="footerLink">
							<a href="#">Privacy Policy</a>
							<a href="#">Terms & Conditions</a>
							<a href="#">About Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</footer>
		<!--Footer Section-->

<?php endif; ?>
			

		<?php wp_footer(); ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
					<!-- Include Odometer JS -->
					<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"></script>
					<!---====== Bootstrap Min Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

					<!---====== GSAP Custom Cursor Animation Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/gsap.min.js"></script>

					<!---====== Wow Animation Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.js"></script>

					<!---====== swiper Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>

					<!---====== FancyBox Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.fancybox.min.js"></script>


					<!---====== Custom Js =====-->
					<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
	</body>
</html>
