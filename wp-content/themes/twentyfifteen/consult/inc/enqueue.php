<?php

function consult_css_js(){
	wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900" rel="stylesheet');
	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), 1.0, 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), 1.0, 'all');
	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), 1.0, 'all');
	wp_enqueue_style('text-animation', get_template_directory_uri().'/assets/css/text-animation.css', array(), 1.0, 'all');
	wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), 1.0, 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), 1.0, 'all');
	wp_enqueue_style('carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), 1.0, 'all');
	wp_enqueue_style('layers', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), 1.0, 'all');
	wp_enqueue_style('settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), 1.0, 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), 1.0, 'all');
	wp_enqueue_style('plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), 1.0, 'all');
	wp_enqueue_style('icons', get_template_directory_uri().'/assets/css/icons.css', array(), 1.0, 'all');
	wp_enqueue_style('menu-css', get_template_directory_uri().'/assets/css/menu-css.css', array(), 1.0, 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', array(), 1.0, 'all');
	wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), 1.0, 'all');
	wp_enqueue_style('custom', get_stylesheet_uri());


	wp_enqueue_script('js_modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
	wp_enqueue_script('js_gmaps', get_template_directory_uri().'/assets/js/gmaps.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_pkgd', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_counterup', get_template_directory_uri().'/assets/js/counterup.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_lettering', get_template_directory_uri().'/assets/js/jquery.lettering.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_textillate', get_template_directory_uri().'/assets/js/jquery.textillate.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_mixitup', get_template_directory_uri().'/assets/js/mixitup.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_chart', get_template_directory_uri().'/assets/js/chart.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_chart-active', get_template_directory_uri().'/assets/js/chart-active.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_themepunch', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_revolution', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_extension', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_kenburn', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_layeranimation', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_migration', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_navigation', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_parallax', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_slideanims', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_slideanims', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('js_custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), 1.0, true);

}
add_action('wp_enqueue_scripts','consult_css_js');