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

<div id="top-sidebar-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		?>
		<section class="single-post">
			<!-- single container -->
			<div class="single-container">
				<!-- single post wrapper -->
				<div class="single-post-wrapper">
					<h1 class="single-post_heading"><?php echo esc_html( the_title() ); ?> </h1>
					<div class="single_post_subheading__container">
						<p class="single-post__subheading_para"> by <a href="<?php get_author_link( true, get_the_author_ID() ); ?>"><span class="author_name"><?php echo get_the_author(); ?></span></a> on <span class="author_name"><?php echo get_the_date(); ?></span></p>
						<p class="author_name"> <?php echo esc_html( get_comments_number() ); ?> comments </p>
					</div>
					<!-- //single post subheading container -->
					<hr style="height: 1px; width: 100%; background-color: #62585f;">
					<div class="single_post__content">
						<?php
						the_content();
						?>
					</div>

					<div class="single_post__tags">
						<p class="single_post__tags-para"><?php the_tags(); ?> </p>
					</div>

					<?php
					comments_template();
					?>

				</div>
				<!-- //single post wrapper -->

				<!-- single sidebar area -->
				<div class="right__sidebar">
				<?php
				get_template_part( 'template-parts/content', 'sidebar' );
				?>
				</div>

			</div>
			<!-- //single container -->
		</section>

		<?php
	}
} else {
	echo '<h1> No Post Found!!</h1>';
}
get_footer();
?>
