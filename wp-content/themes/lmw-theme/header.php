<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lmw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<header id="masthead" class="colophon site-header">

			<div class="bar">
			</div>
			
			<nav class="nav-container">
				<div class="nav-item-1">
					<a href="<?php echo site_url(); ?>" class="top-logo">
						<span class="title"><?php bloginfo('name'); ?></span>
					</a>
				</div>

				<div class="nav-item-2">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
