<?php

add_filter( 'show_admin_bar', '__return_false' ); 

/* CARBON FIELDS */
require get_stylesheet_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields(){
    require_once __DIR__.'/inc/post-meta.php';
	require_once __DIR__.'/inc/theme-options.php';
}
add_action('wp_enqueue_scripts', function(){
   //wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array('jquery'), null, true );
   //wp_enqueue_style ('swiper-styles', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    //wp_enqueue_script ('swiper-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js',array('jquery'), null, true);

   wp_enqueue_script ('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js',array('jquery'), null, true);
   //wp_enqueue_script ('slider-script', get_stylesheet_directory_uri() . '/assets/js/slider.js', array('jquery'), null, true);
    wp_enqueue_style ('ln-main-style', get_stylesheet_directory_uri() . '/assets/main-style.css');
    wp_enqueue_style ('ln-style', get_stylesheet_directory_uri() . '/assets/style.css');
    wp_enqueue_style ('ln-fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css');
});

	// размер миниатюры поста по умолчанию
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'sticky-thumb', 990, 600, true );
    add_image_size( 'thumb', 350, 350, true );
    add_image_size( 'instal-thumb', 290, 290, true );
    add_image_size( 'thumb204', 204, 204, true );
	// set_post_thumbnail_size();
	add_post_type_support( 'page', array('excerpt') );
	
	// add_image_size( 'costume-thumb', 340, 340, true );

register_nav_menus( array(
    'head_menu' => 'header-menu',
    'footer'    => 'footer-menu',
));

// function as_theme_setup() {
// 	load_theme_textdomain( 'as-theme', get_template_directory() . '/languages' );
// 	add_theme_support( 'automatic-feed-links' );
// 	add_theme_support( 'title-tag' );
// 	add_theme_support( 'post-thumbnails' );
// 	register_nav_menus(
// 		array(
// 			'menu-1' => esc_html__( 'Primary', 'as-theme' ),
// 		)
// 	);
// 	add_theme_support(
// 		'html5',
// 		array(
// 			'search-form',
// 			'comment-form',
// 			'comment-list',
// 			'gallery',
// 			'caption',
// 			'style',
// 			'script',
// 		)
// 	);
// 	add_theme_support(
// 		'custom-background',
// 		apply_filters(
// 			'as_theme_custom_background_args',
// 			array(
// 				'default-color' => 'ffffff',
// 				'default-image' => '',
// 			)
// 		)
// 	);
// 	add_theme_support( 'customize-selective-refresh-widgets' );

// 	add_theme_support(
// 		'custom-logo',
// 		array(
// 			'height'      => 270,
// 			'width'       => 170,
// 			'flex-width'  => true,
// 			'flex-height' => true,
// 		)
// 	);
// }
// add_action( 'after_setup_theme', 'as_theme_setup' );