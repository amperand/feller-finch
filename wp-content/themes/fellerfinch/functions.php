<?php
function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('stylesheet_directory').'/img/custom-login-logo.png) !important;width:130px;height:55px;background-size:130px 55px;padding-left:122px; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');


function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');


// load scripts and styles
function wpb_adding_scripts() {	
	wp_register_script('flex',get_stylesheet_directory_uri().'/js/flexslider/jquery.flexslider-min.js', array('jquery'),'1.0',true);
	wp_register_script('flex1',get_stylesheet_directory_uri().'/js/flexslider/shCore.js', array('jquery'),'1.0',true);
	wp_register_script('flex2',get_stylesheet_directory_uri().'/js/flexslider/shBrushXml.js', array('jquery'),'1.0',true);
	wp_register_script('flex3',get_stylesheet_directory_uri().'/js/flexslider/shBrushJScript.js', array('jquery'),'1.0',true);
	wp_register_script('foundation',get_stylesheet_directory_uri().'/js/foundation/foundation.js', array('jquery'),'1.0',true);
	wp_register_script('magellan',get_stylesheet_directory_uri().'/js/foundation/foundation.magellan.js', array('jquery'),'1.0',true);
	wp_register_script('equalizer',get_stylesheet_directory_uri().'/js/foundation/foundation.equalizer.js', array('jquery'),'1.0',true);
	wp_register_script('modal',get_stylesheet_directory_uri().'/js/foundation/foundation.reveal.js', array('jquery'),'1.0',true);
	wp_register_script('actions',get_stylesheet_directory_uri().'/js/actions.js', array('jquery'),'1.0',true);
	
	wp_enqueue_script(array('flex','flex1','flex2','flex3','foundation','magellan','equalizer','modal','actions'));
	
    wp_register_style('fonts',get_stylesheet_directory_uri().'/fonts/stylesheet.css');
    wp_register_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
    wp_register_style('foundation',get_stylesheet_directory_uri().'/css/foundation.min.css');
    wp_register_style('style',get_stylesheet_directory_uri().'/css/style.css');
    wp_register_style('flexslider',get_stylesheet_directory_uri().'/css/flexslider.css');

    wp_enqueue_style(array('fonts','normalize','foundation','style','flexslider'));
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

$text_domain = 'feller';
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Page Menu' ),
      'sitemap-menu' => __( 'SiteMap Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_image_size( 'team', 180, 184, true );
add_image_size( 'portfolio', 1014, 451, true );
add_image_size( 'slideshow', 2214, 588, true );
?>