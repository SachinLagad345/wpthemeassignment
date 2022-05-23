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
		'primary' => 'desktop primary area',
		'footer'  => 'footer menu area',
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'designfly_register_menus' );

/**
 * This registers stylesheet
 *
 * @return void
 */
function designfly_register_style() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'themeassignment-css', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
	wp_enqueue_style( 'themeassignment-customcss', get_template_directory_uri() . '/custom-style.css', array(), $version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'designfly_register_style' );

// class Assignment_Menu_Walker extends Walker_Nav_Menu
// {

// function start_el(&$output, $item, $depth = 0, $args = \null, $id = 0)
// {
// $indent = str_repeat("\t", $depth);
// $output .= "\n$indent <li class=\"li_class\">";
// sprintf("\n$indent <li class=\"li_class\">");
// }

// function end_el(&$output, $item, $depth = 0, $args = \null)
// {
// $output .= "</li>";
// }
// }

// Register Custom Post Type
function custom_post_type() {
	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'designfly' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'designfly' ),
		'menu_name'             => __( 'Portfolio', 'designfly' ),
		'name_admin_bar'        => __( 'Portfolio', 'designfly' ),
		'archives'              => __( 'Portfolio Archives', 'designfly' ),
		'attributes'            => __( 'Portfolio Attributes', 'designfly' ),
		'parent_item_colon'     => __( 'Parent Item:', 'designfly' ),
		'all_items'             => __( 'All Items', 'designfly' ),
		'add_new_item'          => __( 'Add New Portfolio', 'designfly' ),
		'add_new'               => __( 'Add Portfolio', 'designfly' ),
		'new_item'              => __( 'New Portfolio', 'designfly' ),
		'edit_item'             => __( 'Edit Portfolio', 'designfly' ),
		'update_item'           => __( 'Update Portfolio', 'designfly' ),
		'view_item'             => __( 'View Portfolio', 'designfly' ),
		'view_items'            => __( 'View Portfolio', 'designfly' ),
		'search_items'          => __( 'Search Portfolio', 'designfly' ),
		'not_found'             => __( 'Portfolio Not found', 'designfly' ),
		'not_found_in_trash'    => __( 'Portfolio Not found in Trash', 'designfly' ),
		'featured_image'        => __( 'Portfolio Featured Image', 'designfly' ),
		'set_featured_image'    => __( 'Portfolio Set featured image', 'designfly' ),
		'remove_featured_image' => __( 'Portfolio Remove featured image', 'designfly' ),
		'use_featured_image'    => __( 'Use as featured image for Portfolio', 'designfly' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'designfly' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'designfly' ),
		'items_list'            => __( 'Portfolios list', 'designfly' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'designfly' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'designfly' ),
	);
	$args   = array(
		'label'               => __( 'Portfolio', 'designfly' ),
		'description'         => __( 'This is the custom post type named portfolio', 'designfly' ),
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


function register_widget_areas()
{
	register_sidebar(
		array(
			'before_title' => '',
			'after_title'  => '',
			'before_widget' => '',
			'after_widget' => '',
			'name'		   => 'right-sidebar',
			'id'		   => 'sidebar-1',
			'description'  => 'right sidebar widget area',
		)
	);
}

add_action('widgets_init','register_widget_areas');

// Portfolio Widget
require_once( 'widgets/widgets-portfolio.php' );

// Recent_posts Widget
require_once( 'widgets/widgets-recentposts.php' );

// Monthly_archive Widget
require_once( 'widgets/widgets-monthlyarchive.php' );