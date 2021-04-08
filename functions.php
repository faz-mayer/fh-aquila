<?php
/**
 * Theme Functions.
 *
 * @package Aquila
 */


if ( ! defined( 'AQUILA_DIR_PATH' ) ) {
	define( 'AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AQUILA_DIR_URI' ) ) {
	define( 'AQUILA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'AQUILA_BUILD_URI' ) ) {
	define( 'AQUILA_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'AQUILA_BUILD_PATH' ) ) {
	define( 'AQUILA_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'AQUILA_BUILD_JS_URI' ) ) {
	define( 'AQUILA_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'AQUILA_BUILD_JS_DIR_PATH' ) ) {
	define( 'AQUILA_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'AQUILA_BUILD_IMG_URI' ) ) {
	define( 'AQUILA_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'AQUILA_BUILD_CSS_URI' ) ) {
	define( 'AQUILA_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'AQUILA_BUILD_CSS_DIR_PATH' ) ) {
	define( 'AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'AQUILA_BUILD_LIB_URI' ) ) {
	define( 'AQUILA_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}


require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance() {
	\AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function frauenhorizonte_post_types() {
  
  // Angebot Post Type
  register_post_type('angebot', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'rewrite' => array('slug' => 'angebote'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'Angebote',
      'add_new_item' => __( 'Add New Angebot', 'aquila' ),
      'edit_item' =>  __('Edit Angebot', 'aquila' ),
      'all_items' =>  __('All Angebote', 'aquila' ),
      'singular_name' =>  __('Angebot', 'aquila' )
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);

// Ueber-uns Post Type
  register_post_type('ueber-uns', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'Über uns',
      'add_new_item' => __( 'Add New Ueber-uns', 'aquila' ),
      'edit_item' =>  __('Edit Ueber-uns', 'aquila' ),
      'all_items' =>  __('All Ueber-uns', 'aquila' ),
      'singular_name' =>  __('Ueber-uns', 'aquila' )
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);

	// Infothek Post Type
  register_post_type('infothek', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'attributes'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'Infothek',
      'add_new_item' => 'Add New Infothek',
      'edit_item' => 'Edit Infothek',
      'all_items' => 'All Infothek',
      'singular_name' => 'Infothek'
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);

	 // Projekte & Kampagnen Post Type
  register_post_type('projekt-kampagne', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'attributes'),
    'rewrite' => array('slug' => 'projekte-kampagnen'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'Projekte & Kampagnen',
      'add_new_item' => __( 'Add New Projekt & Kampagne', 'aquila' ),
      'edit_item' =>  __('Edit Projekt & Kampagne', 'aquila' ),
      'all_items' =>  __('All Projekte & Kampagnen', 'aquila' ),
      'singular_name' =>  __('Projekt & Kampagne', 'aquila' )
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);


	// Spenden & Fördern Post Type
  register_post_type('spenden-foerdern', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'Spenden & Fördern',
      'add_new_item' => __( 'Add New Spenden & Fördern', 'aquila' ),
      'edit_item' =>  __('Edit Spenden & Fördern', 'aquila' ),
      'all_items' =>  __('All Spenden & Fördern', 'aquila' ),
      'singular_name' =>  __('Spenden & Fördern', 'aquila' )
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);

// FAQ Post Type
  register_post_type('faq', 
		[ 
				'show_in_rest' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'has_archive' => true,
    'public' => true,
				'labels' => 
				[
      'name' => 'FAQ',
      'add_new_item' => __( 'Add New FAQ', 'aquila' ),
      'edit_item' =>  __('Edit FAQ', 'aquila' ),
      'all_items' =>  __('All FAQs', 'aquila' ),
      'singular_name' =>  __('FAQ', 'aquila' )
  		],
				'menu_icon' => 'dashicons-awards'
			]
	);

}

add_action('init', 'frauenhorizonte_post_types');

// extend roles e.g. edito

function add_theme_caps(){
$role = get_role( 'editor' );

$role->add_cap( 'edit_theme_options' ); 
}
add_action( 'admin_init', 'add_theme_caps');
