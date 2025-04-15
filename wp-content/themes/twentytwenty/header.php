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
			<!-- Include Odometer CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.min.css">

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

	<header>
				<div class="container">
				<div class="navbar">
					<div class="logo">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/true-volt-logo.svg" alt="" /></a>
					</div>
					<nav class="navigation">
						<ul class="list-menu" role="list">
							<li><a href="javascript:void(0)" class="gotosubmenu">Residential</a>
							</li>
							<li><a href="javascript:void(0)" class="gotosubmenu">Commercial</a>
							</li>
							<li><a href="javascript:void(0)" class="gotosubmenu">Electricity Rates</a>
							</li>
						</ul>
						<ul class="button-menu">
							<li>
								<a href="#" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/phone-icon.svg" alt="" /></a>
							</li>
							<li>
								<a href="#" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login-icon.svg" alt="" /> &nbsp; Log In</a>
							</li>
							<li>
								<a href="#" class="btn btn-getStrated">Get Started</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			</header>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
