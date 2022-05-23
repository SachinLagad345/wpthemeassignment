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
<!-- Author Archive Page -->
<?php
get_header();
get_template_part( 'template-parts/content', 'feature' );
?>



<!-- Blog and Sidebar Section -->

<section class="container-wrapper">
	<div class="single-container">

		<div class="blog-column">
			<h2 class="blog__heading">
				More posts by Author
				<?php
				$curauth = ( get_query_var( 'author_name' ) ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata( get_query_var( 'author' ) );
				echo esc_attr( $curauth->nickname );
				?>
			</h2>
			<hr style="height: 1px; background-color: #62585f; margin: 10px 0px;">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'archive' );
				}
			}
			?>

		</div>
		<!-- single blog column -->

		<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

	</div>
</section>


<!-- Pagination -->
<div class="container">
	<div class="blog__pagination">
		<?php
		echo esc_attr(
			paginate_links(
				array(
					'before_page_number' => '<span class="blog__pagination-item">',
					'after_page_number'  => '</span>',
				)
			)
		);
		?>
	</div>
</div>

<div class="container-wrapper">
	<div class="container">
		<hr style="height: 1px; background-color: #62585f; ">
	</div>
</div>

<?php get_footer(); ?>
