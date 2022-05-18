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

<header id="header-one" class="headerclass">
	<div class="img-logo-class">
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		?>
	</div>
	<?php
	wp_nav_menu(
		array(
			'menu'           => 'primary',
			'content'        => 'div',
			'theme_location' => 'primary',
			'items_wrap'     => '<ul class="urlclass">%3$s</ul>',
		)
	);
	// removed 'walker' => new Assignment_Menu_Walker() arg.
	?>

    <form action="<?php echo get_site_url(); ?>" method="get" role="search">

			<input class="urlclass_form__search" type="search" name="s" id="s" required autocomplete="off">
			<button type="submit" id="searchsubmit" style="padding:0; background-color: transparent; border: none; position:relative; top:4px;">
				<img class="cursor-pointer" src="<?php echo get_template_directory_uri(); ?>/assets/images/header-search.png" alt="search icon">
			</button>

	</form>

</header>
