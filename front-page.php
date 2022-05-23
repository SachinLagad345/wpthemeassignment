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
?>

<body>
	<!-- red box container  -->
	<div id="red-box" class="red-box-container">
		<div class="red-box-container_background">'
			<div class="red-box-container_content">
				<h1 class="red-box-container_content__title">Gearing up the ideas</h1>
				<p class="red-box-container_content__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
		</div>
	</div>
	<!-- //red box container  -->

	<?php
	get_template_part( 'template-parts/content', 'feature' );
	?>

	<!-- Gallery -->
	<section class="gallery_section">
		<div class="gallery_container">
			<div class="gallery_header__container">
				<h2 class="gallery_header__header">D'SIGN IS THE SOUL</h2>
				<button onclick="designfly_goto_porfolio()"><span class="gallery_header__button"> view all</span></button>
			</div>
			<hr style="height: 1px; width: 100%; background-color: #62585f;">

			<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>

			<hr style="height: 1px; width: 100%; background-color: #62585f;">
		</div>
	</section>

	<script type="text/javascript">
		const designfly_goto_porfolio = () => window.location.href = '<?php echo esc_url( get_site_url() ); ?>/portfolio';
	</script>
	<!-- //Gallery -->

	<?php
		get_footer();
	?>
