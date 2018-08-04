<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="https://schema.org/WebSite">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webergpress' ); ?></a>
	<header id="masthead" class="site-header" itemscope itemtype="https://schema.org/WPHeader">
		<div class="container-medium">

			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;
				?>
			</div><!-- .site-branding -->

			<div id="mobile-navigation">
				<button class="menu-toggle button-primary" aria-controls="primary-menu" aria-expanded="false">
					<span class="dashicons dashicons-menu"></span>
				</button>
			</div>
			<nav id="site-navigation" class="main-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header>

