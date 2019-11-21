<?php

//adds featured images
add_theme_support('post-thumbnails');

//Add Custom Menu
function custom_menus(){
	register_nav_menus ( array(
		'header-menu' => __('Header Menu'),
		'footer-menu' => __('Footer Menu'),
	));

}

add_action ('init', 'custom_menus');


//Adds widget area
function widgets(){
	//Header widget
	register_sidebar( array(
		'name'          =>('Right Header'),
		'id'            => 'right-header',
		'description'   => 'right widget area in the header',
		'before_widget' => '<div class="widget-header widget-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));

	//Hero Image Widget
	register_sidebar( array(
		'name'          =>('Hero Image'),
		'id'            => 'hero-image',
		'description'   => 'Hero Image on Homepage',
		'before_widget' => '<div class="hero-image-widget>"',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Text Block Callout Widget
	register_sidebar( array(
		'name'          =>('Text Block Callout'),
		'id'            => 'text-block-callout',
		'description'   => 'Text Block Callout on Homepage',
		'before_widget' => '<div class="text-block-callout-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Section Header One Widget
	register_sidebar( array(
		'name'          =>('Section Header One'),
		'id'            => 'section-header-one',
		'description'   => 'Section header one on Homepage',
		'before_widget' => '<div class="section-header-one-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Left Featured Page Widget
	register_sidebar( array(
		'name'          =>('Left Featured Page'),
		'id'            => 'left-featured-page',
		'description'   => 'Left Featured Page Block on Homepage',
		'before_widget' => '<div class="left-featured-page-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Middle Featured Page Widget
	register_sidebar( array(
		'name'          =>('Middle Featured Page'),
		'id'            => 'middle-featured-page',
		'description'   => 'Middle Featured Page Block on Homepage',
		'before_widget' => '<div class="middle-featured-page-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Right Featured Page Widget
	register_sidebar( array(
		'name'          =>('Right Featured Page'),
		'id'            => 'right-featured-page',
		'description'   => 'Right Featured Page Block on Homepage',
		'before_widget' => '<div class="right-featured-page-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Section Header Two Widget
	register_sidebar( array(
		'name'          =>('Section Header Two'),
		'id'            => 'section-header-two',
		'description'   => 'Section header two on Homepage',
		'before_widget' => '<div class="section-header-one-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Bottom Home Page Text Widget
	register_sidebar( array(
		'name'          =>('Bottom Home Text Widget'),
		'id'            => 'bottom-home-text-widget',
		'description'   => 'First bottom block of Featured Pages on Homepage',
		'before_widget' => '<div class="bottom-home-text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Second Bottom Home Page Text Widget
	register_sidebar( array(
		'name'          =>('Bottom Home Text Widget 2'),
		'id'            => 'bottom-home-text-widget-2',
		'description'   => 'Second bottom block of Featured Pages on Homepage',
		'before_widget' => '<div class="bottom-home-text-widget-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Interior Page Bottom Callout Widget
	register_sidebar( array(
		'name'          =>('Interior Page Bottom Callout'),
		'id'            => 'interior-bottom-callout-widget',
		'description'   => 'Text Callout at bottom of interior pages',
		'before_widget' => '<div class="interior-bottom-callout-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Left footer widget
	register_sidebar( array(
		'name'          => ('Left Footer'),
		'id'            => 'left-footer',
		'description'   => 'Left widget area in the footer',
		'before_widget' => '<div class="widget-footer widget-left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));
//Center footer widget area
	register_sidebar( array(
		'name'          => ('Center Footer'),
		'id'            => 'center-footer',
		'description'   => 'Center widget area in the footer',
		'before_widget' => '<div class="widget-footer widget-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));
//Right footer widget area
	register_sidebar( array(
		'name'          =>('Right Footer'),
		'id'            => 'right-footer',
		'description'   => 'right widget area in the footer',
		'before_widget' => '<div class="widget-footer widget-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));
}

//custom header
$custom_image_header = array(
	'width'   => 125,
	'height'  => 111,
	'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


add_action('widgets_init', 'widgets');

//Custom Post Type - Biographies
function create_post_type(){
	register_post_type('bios',
		array(
			'labels'            => array(
				'name'          => __('Biographies'),
				'singular_name' => __('Biography')
			),
			'public'               => true,
			'has_archive'          => true,
			'show_in_menu'         => true,
			'show_in_nav_menus'    => true,
			'show_in_admin_bar'    => true,
			'menu_position'        => 5,
			'can_export'           => true,
			'menu_icon'            => 'dashicons-groups',
			'supports'             => array('title', 'editor', 'thumbnail'),
		)

	);
}

add_action('init', 'create_post_type');


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


?>
