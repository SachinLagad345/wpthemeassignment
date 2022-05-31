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
/** Class for custom walker
 */
class Assignment_Menu_Walker extends Walker_Nav_menu {


	/** Gives each list element style
	 *
	 * @param string $output contains string in which HTML would be added.
	 * @param object $item contains menu item data object.
	 * @param int    $depth contains current depth of HTML elements.
	 * @param array  $args contains optional arguments.
	 * @param int    $id contains id of current menu.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$object      = $item->object;
		$type        = $item->type;
		$title       = $item->title;
		$description = $item->description;
		$permalink   = $item->url;

		$output .= "<li class='myclass " . implode( ' ', $item->classes ) . "'>";

		// Add SPAN if no Permalink.
		if ( $permalink && '#' !== $permalink ) {
			$output .= '<a href="' . $permalink . '">';
		} else {
			$output .= '<span>';
		}

		$output .= $title;

		if ( '' !== $description && 0 === $depth ) {
			$output .= '<small class="description">' . $description . '</small>';
		}

		if ( $permalink && '#' !== $permalink ) {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}
