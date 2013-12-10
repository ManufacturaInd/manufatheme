<!doctype html>
<html class="no-js" lang="en">
  <head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <title><?php wp_title( '|', true, 'right' ); ?></title>
	  
  	<link rel="profile" href="http://gmpg.org/xfn/11">
	  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	  <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header row" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title large-12 columns"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description large-12 columns"><?php bloginfo( 'description' ); ?></h2>
			</a>
      <p class="large-12 columns">We're moving things about. Mi casa es su casa, but things might be messy.</p>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
