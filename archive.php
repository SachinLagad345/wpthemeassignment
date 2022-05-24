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
get_header();
get_template_part( 'template-parts/content', 'feature' );
?>
<!-- Gallery -->
<section class="gallery_section">
	<div class="gallery_container">
		<div class="gallery_header__container">
			<h2 class="gallery_header__header">D'SIGN IS THE SOUL</h2>
			<div class="gallery_header__button-group">
				<a href="#"><span class="gallery_header__group-btn"> view all</span></a>
			</div>
		</div>
		<hr style="height: 1px; width: 100%; background-color: #62585f;">

		<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
	</div>
</section>
<!-- //Gallery -->

<?php
get_footer();
?>
