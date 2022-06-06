<?php
/**
 * Theme Name: WPThemeAssignment
 * Theme URI: https://wordpress.org/themes/wpthemeassignment/
 * Author: Sachin Lagad
 * Author URI: https://sachinlagad.com/
 * Description: This is testing purpose theme development
 * Requires at least: 5.3
 * Tested up to: 5.9
 * Requires PHP: 5.6
 * Version: 1.0
 *
 * @package theme
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpthemeassignment
 * Tags: one-column, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, block-patterns, rtl-language-support, sticky-post, threaded-comments, translation-ready

 * WPThemeAssignment WordPress Theme, (C) 2020 WordPress.org
 * WPThemeAssignment is distributed under the terms of the GNU GPL.
 */

?>

<?php

/**
 * This adds functionalities like custom logo, custom title
 *
 * @return void
 */
function designfly_add_theme_supports() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'designfly_add_theme_supports' );

/**
 * This registers dynamic menu locations
 *
 * @return void
 */
function designfly_register_menus() {
	$locations = array(
		'primary' => __( 'desktop primary area' ),
		'footer'  => 'footer menu area',
	);

	register_nav_menus( $locations );
}

add_action( 'after_setup_theme', 'designfly_register_menus' );

/**
 * This registers stylesheet
 *
 * @return void
 */
function designfly_register_style() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'themeassignment-css', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
	wp_enqueue_style( 'themeassignment-customcss', get_template_directory_uri() . '/custom-style.css', array(), $version, 'all' );
	wp_enqueue_style( 'font-family', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', array(), '1.0' );
	wp_enqueue_style( 'lightboxcss', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), '2.0', 'all' );
	wp_enqueue_style( 'icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
}
add_action( 'wp_enqueue_scripts', 'designfly_register_style' );

/**
 * This registers script files
 *
 * @return void
 */
function designfly_register_script() {
	wp_enqueue_script( 'hamberger', get_template_directory_uri() . '/assets/js/hamberger.js', array(), '1.0', true );
	wp_enqueue_script( 'jquery', 'jquery-3.6.0.min.js', array(), '3.6.0', true );
	wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', array( 'jquery' ), '2.0', true );
}
add_action( 'wp_enqueue_scripts', 'designfly_register_script' );


/**
 * This registers custom post type
 *
 * @return void
 */
function custom_post_type() {
	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'wpthemeassignment' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'wpthemeassignment' ),
		'menu_name'             => __( 'Portfolio', 'wpthemeassignment' ),
		'name_admin_bar'        => __( 'Portfolio', 'wpthemeassignment' ),
		'archives'              => __( 'Portfolio Archives', 'wpthemeassignment' ),
		'attributes'            => __( 'Portfolio Attributes', 'wpthemeassignment' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wpthemeassignment' ),
		'all_items'             => __( 'All Items', 'wpthemeassignment' ),
		'add_new_item'          => __( 'Add New Portfolio', 'wpthemeassignment' ),
		'add_new'               => __( 'Add Portfolio', 'wpthemeassignment' ),
		'new_item'              => __( 'New Portfolio', 'wpthemeassignment' ),
		'edit_item'             => __( 'Edit Portfolio', 'wpthemeassignment' ),
		'update_item'           => __( 'Update Portfolio', 'wpthemeassignment' ),
		'view_item'             => __( 'View Portfolio', 'wpthemeassignment' ),
		'view_items'            => __( 'View Portfolio', 'wpthemeassignment' ),
		'search_items'          => __( 'Search Portfolio', 'wpthemeassignment' ),
		'not_found'             => __( 'Portfolio Not found', 'wpthemeassignment' ),
		'not_found_in_trash'    => __( 'Portfolio Not found in Trash', 'wpthemeassignment' ),
		'featured_image'        => __( 'Portfolio Featured Image', 'wpthemeassignment' ),
		'set_featured_image'    => __( 'Portfolio Set featured image', 'wpthemeassignment' ),
		'remove_featured_image' => __( 'Portfolio Remove featured image', 'wpthemeassignment' ),
		'use_featured_image'    => __( 'Use as featured image for Portfolio', 'wpthemeassignment' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'wpthemeassignment' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wpthemeassignment' ),
		'items_list'            => __( 'Portfolios list', 'wpthemeassignment' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'wpthemeassignment' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'wpthemeassignment' ),
	);
	$args   = array(
		'label'               => __( 'Portfolio', 'wpthemeassignment' ),
		'description'         => __( 'This is the custom post type named portfolio', 'wpthemeassignment' ),
		'labels'              => $labels,
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			'comments',
			'excerpt',
		),
		'taxonomies'          => array(
			'category',
			'post_tag',
		),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_post_type', 0 );


/**
 * This registers widget areas
 *
 * @return void
 */
function register_widget_areas() {
	register_sidebar(
		array(
			'before_title'  => '',
			'after_title'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'name'          => 'right-sidebar',
			'id'            => 'sidebar-1',
			'description'   => 'right sidebar widget area',
		)
	);

	register_sidebar(
		array(
			'before_title'  => '',
			'after_title'   => '',
			'before_widget' => '',
			'after_widget'  => '',
			'name'          => 'top-sidebar',
			'id'            => 'sidebar-2',
			'description'   => 'Top sidebar widget area',
			'class'         => 'top__sidebar',
			'id'            => 'sidebar-2',
		)
	);
}

add_action( 'widgets_init', 'register_widget_areas' );

/**
 * This changes page menu class
 *
 * @param string $menu It returns content inside nav menu.
 *
 * @return $menu
 */
function change_page_menu_classes( $menu ) {
	global $post;
	if ( get_post_type( $post ) === 'portfolio' ) {
		$menu = str_replace( 'current_page_item', '', $menu ); // remove all current_page_parent classes.
		$menu = str_replace( 'menu-item-299', 'menu-item-299 current_page_item', $menu ); // add the current_page_parent class to the page you want.
	}
	return $menu;
}
add_filter( 'nav_menu_css_class', 'change_page_menu_classes', 10, 2 );

// Portfolio Widget.
require_once 'widgets/widgets-portfolio.php';

// Recent_posts Widget.
require_once 'widgets/widgets-recentposts.php';

// Monthly_archive Widget.
require_once 'widgets/widgets-monthlyarchive.php';

// Custom comments.
require_once 'better-comments.php';

require_once 'class-assignment-menu-walker.php';
