<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>TrueVolt Energy</title>

			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" media="screen" />
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.css" media="screen" />
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css" media="screen" />
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jquery.fancybox.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" media="screen" />
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style-get-start.css" media="screen" />
			<!-- Include Odometer CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.min.css">

	</head>
<?php $GLOBALS[ 'current_site_url' ] = site_url(); ?>



	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

<?php
global $wp;
$current_url = home_url(add_query_arg([], $wp->request));
$get_started_url = $GLOBALS['current_site_url'] . '/get-started';

if ($current_url === $get_started_url) :
?>

<!-- 👉 GET STARTED PAGE HEADER -->
<header>
	<div class="container">
		<div class="navbar">
			<div class="goBack">
				<a href="<?php echo $GLOBALS['current_site_url']; ?>" class="btn">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-left-white.svg" alt="" /> &nbsp; Back
				</a>
			</div>
			<div class="logo">
				<a href="<?php echo $GLOBALS['current_site_url']; ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/true-volt-logo.svg" alt="" />
				</a>
			</div>
			<nav class="navigation">
				<ul class="button-menu">
					<li>
						<a href="#" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone-icon.svg" alt="" /></a>
					</li>
					<li>
						<a href="#" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login-icon.svg" alt="" /> &nbsp; Log In</a>
					</li>
					<li>
						<a href="#" class="btn btn-getStrated"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/acount-icon.svg" alt="" /> &nbsp; Create Account</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<?php else : ?>

<!-- 👉 DEFAULT HEADER FOR OTHER PAGES -->
<header>
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/true-volt-logo.svg" alt="" /></a>
			</div>
			<nav class="navigation">
				<ul class="list-menu" role="list">
					<li><a href="<?php echo $GLOBALS['current_site_url']; ?>/" class="gotosubmenu">Residential</a></li>
					<li><a href="<?php echo $GLOBALS['current_site_url']; ?>/" class="gotosubmenu">Commercial</a></li>
					<li><a href="<?php echo $GLOBALS['current_site_url']; ?>/" class="gotosubmenu">Electricity Rates</a></li>
				</ul>
				<ul class="button-menu">
					<li>
						<a href="<?php echo $GLOBALS['current_site_url']; ?>/" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone-icon.svg" alt="" /></a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS['current_site_url']; ?>/" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login-icon.svg" alt="" /> &nbsp; Log In</a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS['current_site_url']; ?>/get-started" class="btn btn-getStrated">Get Started</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<?php endif; ?>


		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
