 <?php 
 
 register_nav_menus(array(
    'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',
 )); 
 
/*
* Featured image support
*/
add_theme_support( 'post-thumbnails', array('post','page','slider-items') );
set_post_thumbnail_size(350, 200, true);

// if want to use custom size
add_image_size('custom-image', 370, 250, true);
add_image_size('slider-items', 1920, 1080, true);
 