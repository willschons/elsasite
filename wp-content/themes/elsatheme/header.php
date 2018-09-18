<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elsatheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/noscript.css" /></noscript>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">Twenty <span>by HTML5 UP</span></a></h1>
					<nav id="nav">
						<ul>
						
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="">Left Sidebar</a></li>
							</li>
									<li><a href="contact.html">Contact</a></li>
									
								</ul>
							</li>
							
						</ul>
					</nav>
				</header>