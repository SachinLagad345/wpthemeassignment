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

<!doctype html>
<html lang="en-US">

<head>
	<title><?php echo esc_attr( get_the_title() ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<?php
	wp_head();
	?>
</head>

<body>

	<div class="container-wrapper box__shadow">
		<div class="container">
			<header id="header-one" class="headerclass">
				<div class="img-logo-class">
					<?php
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
					?>
				</div>

				<div class="hamburger-icon">
					<i class="fa fa-bars" onclick="showMenu()"></i>
				</div>

				<!-- Header right menu group -->
				<div class="header-menugroup">
					<?php
					wp_nav_menu(
						array(
							'container'      => '',
							'theme_location' => 'primary',
							'items_wrap'     => '<ul id="urlclass_id" class="urlclass">%3$s</ul>',
							'wallker'        => new Assignment_Menu_Walker(),
						)
					);
					// removed 'walker' => new Assignment_Menu_Walker() arg.
					?>

					<form class="header__search-form" action="<?php echo esc_url( get_site_url() ); ?>" method="get" role="search">

						<input class="urlclass_form__search" type="search" name="s" id="s" required autocomplete="off">
						<button type="submit" id="searchsubmit" style="padding:0; background-color: transparent; border: none; position:relative;">
							<img class="cursor-pointer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-search.png" alt="search icon">
						</button>

					</form>

				</div>
				<!-- //header menu group -->

			</header>
		</div>
		<!-- //container -->
	</div>
	<!-- //container-wrapper -->
