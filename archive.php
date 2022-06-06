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

<div id="portfolio__overlay" class="portfolio__overlay-invisible" onclick="disable_overlay()"></div>
<div id="portfolio__overlay-wrapper" class="portfolio__overlay-wrapper-invisible">
	<div id="portfolio__overlay-imgcontainer" class="portfolio__overlay-imgcontainer"></div>
</div>
<?php
get_header();
get_template_part( 'template-parts/content', 'feature' );
?>
<div id="top-sidebar-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

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

		<?php
		$pagename = $wp_query->post->post_type; // gives current page post type.
		if ( 'portfolio' === $pagename ) {
			?>
			<script type="text/javascript">
				document.getElementById("urlclass_id").children[3].classList.add('current_page_item');
				console.log("inside script");
			</script>
			<?php
		}
		get_template_part( 'template-parts/content', 'portfolio' );
		?>

		<!--  Pagination -->
		<div class="portfolio__pagination">
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
		<!--  //Pagination -->

	</div>
</section>
<!-- //Gallery -->

<?php
get_footer();
?>
