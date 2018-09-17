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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


		<header id="header" class="alt">
					<h1 id="logo"><a href="index.html">Projeto <span>ELSA</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Welcome</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>


									<li><a href="contact.html">Contact</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button primary">Login</a></li>
						</ul>
					</nav>
				</header><!-- #masthead -->


