<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package JustMauri
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">

	<nav id="site-navigation" class="main-navigation navbar navbar-inverse navbar-fixed-top" role="navigation">
		<?php if ( dynamic_sidebar('In_Menu') ) : else : endif; ?>

		<div class="navbar-header">
		<!--Covers the collapsable list for mobiles-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      		<span class="sr-only">Toggle Navigation</span>
      			<span class="icon-bar"></span>
			    <span class="icon-bar"></span>  <!--icon-bar are the lines on the button. We want three-->
			    <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		     
		</div>
	
		<?php 
			$navMenuAttr= array  (
				'theme_location' => 'primary',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'menu_class' => 'nav navbar-nav navbar-right'
			);

		wp_nav_menu( $navMenuAttr ); ?>

			
	</nav><!-- #site-navigation -->

	
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
