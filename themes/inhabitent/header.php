<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header light-header" role="banner">
				<div class="header-container">
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg'; ?>" class="logo" alt="Inhabitent Logo" />
							<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent.svg'; ?>" class="dark-logo" alt="Inhabitent Logo" />
						</a>

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
					
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>



							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<button class="search-submit">
									<span class="icon-search" aria-hidden="true">
										<i class="fa fa-search nav-search-icon"></i>
									</span>
									<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
								</button>

								<label>
									<input type="search" class="search-field-nav" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
								</label>
							</form>

						

					</nav><!-- #site-navigation -->
				</div>

				
			</header><!-- #masthead -->

			<div class="offset-placeholder"></div> 

			<div id="content" class="site-content">
