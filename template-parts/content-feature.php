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
<!-- Features -->
<section class="features" style="background-image: url('<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/features-repeatable-bg.png');">
	<div class="container-wrapper">
		<div class="container">
			<div class="feature_content">
				<div class="feature_content__column">
					<img class="feature__icon" src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/feature-icons-1.png" alt="">
					<div class="feature_content__text">
						<h2 class="feature_content__heading"><?php esc_html_e( 'Advertising', 'wpthemeassignment' ); ?></h2>
						<p class="feature_content__description"><?php esc_html_e( 'Neque porro quisquam est, dolorem ipsum quia dolor amet...', 'wpthemeassignment' ); ?></p>
					</div>
				</div>
				<div class="feature_content__column">
					<img class="feature__icon" src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/feature-icons-2.png" alt="">
					<div class="feature_content__text">
						<h2 class="feature_content__heading"> <?php esc_html_e( 'Multimedia', 'wpthemeassignment' ); ?></h2>
						<p class="feature_content__description"><?php esc_html_e( 'Neque porro quisquam est, dolorem ipsum quia dolor amet...', 'wpthemeassignment' ); ?></p>
					</div>
				</div>
				<div class="feature_content__column">
					<img class="feature__icon" src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/feature-icons-3.png" alt="">
					<div class="feature_content__text">
						<h2 class="feature_content__heading"><?php esc_html_e( 'Photography', 'wpthemeassignment' );?></h2>
						<p class="feature_content__description"><?php esc_html_e( 'Neque porro quisquam est, ip dolorem ipsum quia dolor amet...', 'wpthemeassignment' ); ?></p>
					</div>
				</div>
			</div>

		</div>
		<!-- //container-->

	</div>
	<!-- //container-wrapper -->
</section>
