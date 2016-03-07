<?php /** @package WordPress @subpackage Default_Theme  **/
header("Access-Control-Allow-Origin: *");  
?>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/ie.css" />
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <div id="wrap">
	<header id="masthead" class="site-header" role="banner">
		
		<section class="hide-for-small hide-for-medium dark-bg">
			<section class="row large-collapse">
				<section class="columns large-12 medium-6">
						<h1 class="site-title">
							<a href="<?= site_url();?>" rel="home"><img src="<?php bloginfo('stylesheet_directory');?>/img/feller-finch2.png" width="163" height="152" alt="<?php bloginfo( 'name' ); ?>"></a>
						</h1>	
						<nav id="primary-navigation" class="columns medium-5 site-navigation primary-navigation" role="navigation">
							<div data-magellan-expedition="fixed" id="magellan-stuff">
								<ul class="sub-nav nav-menu">
									<li class="menu-item"><a href="<?= site_url();?>/#history">history</a></li>
									<li class="menu-item"><a href="<?= site_url();?>/#services">services</a></li>
									<li class="menu-item"><a href="<?= site_url();?>/#portfolio">portfolio</a></li>
									<li class="menu-item"><a href="<?= site_url();?>/#team">our team</a></li>
									<li class="menu-item"><a href="<?= site_url();?>/#contact">contact</a></li>
								</ul>
							</div>
						</nav>
						<nav id="social-area" class="columns medium-5 medium-offset-2 site-navigation">
							<div class="floater">
								<a href="mailto:info@fellerfinch.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/email.png" alt="Feller Finch Email" width="143" height="18"></a>
								<div id="phone-holder">
									<a id="phone" href="tel:4198933680"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone.png" alt="Phone" width="107" height="21"></a>
									<a id="phonetn" href="tel:6157326229"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone-tn.png" alt="Phone" width="107" height="21"></a>
								</div>
								<div class="vertical-line"></div>
								<a href="https://www.facebook.com/pages/Feller-Finch-and-Associates-Inc/103923077504" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/facebook.png" alt="Feller Finch on Facebook" width="11" height="28"></a>
								<div class="vertical-line"></div>
								<a href="https://www.linkedin.com/company/feller-finch-&-associates-inc." target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/linkedin.png" alt="LinkedIn" width="17" height="16"></a>
								<div class="vertical-line"></div>
							</div>
						</nav>
				</section>
			</section>
		</section><!-- end hide of small, hide for medium -->
		
		<!-- show for small up, hide for large-up -->
		<section class="columns medium-12 show-for-small-up hide-for-large-up">
			<h1 class="site-title"><!-- banner title -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory');?>/img/feller-finch2.png" alt="<?php bloginfo( 'name' ); ?>" width="163" height="52"></a>
			</h1>	
			
			<nav id="social-area" class="site-navigation hide-for-small">
				<a href="mailto:info@fellerfinch.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/email.png" alt="Feller Finch Email"></a>
				<div id="phone-holder">
					<a id="phone" href="tel:4198933680"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone.png" alt="Phone" width="107" height="21"></a>
					<a id="phonetn" href="tel:6157326229"><img src="<?php bloginfo('stylesheet_directory');?>/img/phone-tn.png" alt="Phone" width="107" height="21"></a>
								</div>
				<div class="vertical-line"></div>
				<a href="https://www.facebook.com/pages/Feller-Finch-and-Associates-Inc/103923077504" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/facebook.png" alt="Feller Finch on Facebook"></a>
				<div class="vertical-line"></div>
				<a href="https://www.linkedin.com/company/feller-finch-&-associates-inc." target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/linkedin.png" alt="LinkedIn" width="17" height="16"></a>
								<div class="vertical-line"></div>
			</nav>
			
			<div id="toggle-menu"><img src="<?php bloginfo('stylesheet_directory');?>/img/menu.png" alt="Menu" width="28" height="21"></div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<div data-magellan-expedition>
					<ul class="nav-menu">
						<li class="menu-item"><a href="<?=site_url();?><?site_url();?>#history">history</a></li>
						<li class="menu-item"><a href="<?=site_url();?><?site_url();?>#services">services</a></li>
						<li class="menu-item"><a href="<?=site_url();?><?site_url();?>#portfolio">portfolio</a></li>
						<li class="menu-item"><a href="<?=site_url();?><?site_url();?>#team">our team</a></li>
						<li class="menu-item"><a href="<?=site_url();?><?site_url();?>#contact">contact</a></li>
					</ul>
				</div>
			</nav>
		</section><!-- show for all but large -->
			
	</header><!-- #masthead -->