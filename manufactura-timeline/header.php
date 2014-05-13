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
	  <div id="lang-menu" class="row">
			<?php echo qtrans_generateLanguageSelectCode('text'); ?>
    </div>
		<header id="masthead" class="site-header row collapse" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="large-1 columns" src="<?php bloginfo('template_directory')?>/images/manufacturaindependente.svg" data-nosvg="<?php bloginfo('template_directory')?>/images/manufacturaindependente.png" alt="<?php bloginfo( 'name' ); ?>" />
			</a>
			<hgroup class="large-6 columns"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h3 class="site-title"><?php bloginfo( 'name' ); ?></h3>
				<h6 class="site-description"><?php bloginfo( 'description' ); ?></h6>
			</a></hgroup>

			<div id="menu" class="large-5 columns">
				<p>
					<?php if(qtrans_getLanguage() == "en") : ?>
						We're a design studio focused on free and open source software, libre culture and critical engagement with design tools. Read more <a href="<?php echo get_page_link(2); ?>">about us</a>. Check our <a href="<?php echo get_category_link(19); ?>">portfolio</a> and <a href="<?php echo get_category_link(17); ?>">workshops</a>.
					<?php endif ?>
					<?php if(qtrans_getLanguage() == "pt") : ?>
						Somos um est&uacute;dio concentrado nas &aacute;reas do software livre, cultura livre e abordagens cr&iacute;ticas &aacute;s ferramentas de design. L&ecirc; mais <a href="<?php echo get_page_link(2); ?>">sobre n&oacute;s</a>. V&ecirc; o nosso <a href="<?php echo get_category_link(19); ?>">trabalho</a> e <a href="<?php echo get_category_link(17); ?>">workshops</a>.
					<?php endif ?>
				</p>
			</div><!-- #menu -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
			<p class="notice row collapse"><em  class="large-11 large-offset-1 columns">We're moving things about. Mi casa es su casa, but things might be messy.</em></p>
