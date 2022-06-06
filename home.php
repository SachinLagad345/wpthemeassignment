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
wp_head();
?>

<?php
get_header();
get_template_part( 'template-parts/content', 'feature' );
?>
<div id="top-sidebar-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

<section class="single-post">
	<!-- single container -->
	<div class="single-container">
		<!-- single post wrapper -->
		<div class="blog_post__wrapper">
			<h1 class="blog__heading">LET'S BLOG </h1>

			<hr class="blog_header-line">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'archive' );
				}
			} else {
				echo '<h1> No Post Found!!</h1>';
			}
			?>

			<!-- Pagination -->
			<div class="blog__pagination">
				<?php
				echo wp_kses_post(
					paginate_links(
						array(
							'before_page_number' => '<span class="blog__pagination-item">',
							'after_page_number'  => '</span>',
							'next_text'          => '<span class="blog__pagination-item">
													<svg class="blog__pagination-icon" height="12" width="7">
													<path d="M0 0 L0 12 L7 6 Z" />
													</svg>
												</span>',
							'prev_text'          => '<span class="blog__pagination-item">
													<svg class="blog__pagination-icon" height="12" width="7">
														<path d="M7 0 L7 12 L0 6 Z" />
													</svg>
												</span>',

						)
					)
				);
				?>
			</div>
			<!-- //pagination -->
		</div>
		<!-- //single post wrapper -->

		<div class="right__sidebar">
			<?php
			get_template_part( 'template-parts/content', 'sidebar' );
			?>
		</div>

	</div>
	<!-- //single container -->
</section>
<?php
get_footer();
?>
