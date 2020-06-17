<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lagoslegacy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="wrapper">
		<header class="pb white drk full stick">
			<div class="header-bar">
				<div class="logo">
					<a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
				</div>
				<div class="mobile-menu-btn">
					<a href="#" title="" class="open-menu"><i class="fa fa-bars"></i></a>
				</div>
				
				<nav>
					<ul>
						<li><a class="active" href="#" title="">Home</a></li>
						<li>
							<a href="#" title="">The Project</a>
							<ul>
								<li><a href="#">Your dream</a></li>
								<li><a href="#">Location</a></li>
								<li><a href="#">Features</a></li>
								<li><a href="#">Amenities</a></li>

							</ul>
						</li>
						<li><a href="#" title="">Feature</a></li>
						<li><a href="#" title="">Gallery</a></li>
						<li><a href="#" title="">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="responsive-mobile-menu">
			<a href="#" title="" class="close-menu"><i class="ion-close"></i></a>
		<ul>
						<li><a class="active" href="#" title="">Home</a></li>
						<li>
							<a href="#" title="">The Project</a>
							<ul>
								<li><a href="#">Your dream</a></li>
								<li><a href="#">Location</a></li>
								<li><a href="#">Features</a></li>
								<li><a href="#">Amenities</a></li>

							</ul>
						</li>
						<li><a href="#" title="">Feature</a></li>
						<li><a href="#" title="">Gallery</a></li>
						<li><a href="#" title="">Contact</a></li>
					</ul>
		</div>