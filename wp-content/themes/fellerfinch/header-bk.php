<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/ie.css" />
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a name="home" data-magellan-destination="home"></a>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<section class="hide-for-small hide-for-medium dark-bg">
			<section class="row large-collapse">
				<section class="columns large-12 medium-6">
						<h1 class="site-title">
							<a data-magellan-arrival="home" href="#home" rel="home"><img src="<?php bloginfo('stylesheet_directory');?>/img/feller-finch2.png" alt="<?php bloginfo( 'name' ); ?>"></a>
						</h1>	
						<nav id="primary-navigation" class="columns medium-5 site-navigation primary-navigation" role="navigation">
							<?php //wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
							<div data-magellan-expedition="fixed">
								<ul class="sub-nav nav-menu">
									<li class="menu-item" data-magellan-arrival="history"><a href="#history">history</a></li>
									<li class="menu-item" data-magellan-arrival="services"><a href="#services">services</a></li>
									<li class="menu-item" data-magellan-arrival="portfolio"><a href="#portfolio">portfolio</a></li>
									<li class="menu-item" data-magellan-arrival="our-team"><a href="#our-team">our team</a></li>
									<li class="menu-item" data-magellan-arrival="contact"><a href="#contact">contact</a></li>
								</ul>
							</div>
						</nav>
						<nav id="social-area" class="columns medium-5 medium-offset-2 site-navigation">
							<div class="floater">
								<a href="mailto:info@fellerfinch.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/email.png" alt="Feller Finch Email"></a>
								<a id="phone" href="tel:5555555555"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone.png" alt="Phone"></a>
								<div class="vertical-line"></div>
								<a href="" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/facebook.png" alt="Feller Finch on Facebook"></a>
								<div class="vertical-line"></div>
								<a href="" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/twitter.png" alt="Twitter"></a>
								<div class="vertical-line"></div>
							</div>
						</nav>
				</section>
			</section>
		</section>
			
		<section class="columns medium-12 show-for-small-up hide-for-large">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory');?>/img/feller-finch.png" alt="<?php bloginfo( 'name' ); ?>"></a>
			</h1>	
			
			<nav id="social-area" class="site-navigation hide-for-small">
				<a href="mailto:info@fellerfinch.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/email.png" alt="Feller Finch Email"></a>
				<a id="phone" href="tel:5555555555"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone.png" alt="Phone"></a>
				<div class="vertical-line"></div>
				<a href="" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/facebook.png" alt="Feller Finch on Facebook"></a>
				<div class="vertical-line"></div>
				<a href="" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/twitter.png" alt="Twitter"></a>
				<div class="vertical-line"></div>
			</nav>
			
			<div id="toggle-menu"></div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</section>
			
		</section>
	</header><!-- #masthead -->