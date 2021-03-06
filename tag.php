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


<div class="container-wrapper">
	<div class="single-container">
		<!-- Blog -->
		<div class="blog-column">
			<h2 class="blog__heading">Tag: <?php echo single_cat_title( '', false ); ?></h2>
			<hr style="height: 1px; background-color: #62585f; margin: 10px 0px;">
			<?php
			$post_query_options = array(
				'post_type'      => array( 'post', 'portfolio' ),
				'paged'          => get_query_var( 'paged' ),
				'posts_per_page' => 5,
			);
			$post_query         = new WP_Query( $post_query_options );
			if ( $post_query->have_posts() ) {
				while ( $post_query->have_posts() ) {
					$post_query->the_post();
					get_template_part( 'template-parts/content', 'archive' );
				}
			}
			?>
		</div>

		<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

	</div>
</div>


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

<div class="container">
	<hr style="height: 1px; background-color: #62585f; ">
</div>

<?php get_footer(); ?>
