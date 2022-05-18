<?php
/**
 * This adds functionalities like custom logo, custom title
 *
 * @return void
 */
function designfly_add_theme_supports()
{
	add_theme_support('custom-logo');
}

add_action( 'after_setup_theme', 'designfly_add_theme_supports' );

/**
 * This registers dynamic menu locations
 *
 * @return void
 */
function designfly_register_menus()
{
	$locations = array(
		'primary' => 'desktop primary area',
		'footer'  => 'footer menu area'
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
	$version = wp_get_theme()->get('Version');

	wp_enqueue_style( 'themeassignment-css', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
	wp_enqueue_style( 'themeassignment-customcss', get_template_directory_uri() . '/custom-style.css', array(), $version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'designfly_register_style' );

// class Assignment_Menu_Walker extends Walker_Nav_Menu
// {

// 	function start_el(&$output, $item, $depth = 0, $args = \null, $id = 0)
// 	{
// 		$indent = str_repeat("\t", $depth);
// 		$output .= "\n$indent <li class=\"li_class\">";
// 		sprintf("\n$indent <li class=\"li_class\">");
// 	}

// 	function end_el(&$output, $item, $depth = 0, $args = \null)
// 	{
// 		$output .= "</li>";
// 	}
// }




