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
<div class="gallery">
	<?php

	if ( is_front_page() ) {

		$portfolio_query_options = array(
			'post_type'      => 'portfolio',
			'post_status'    => 'publish',
			'posts_per_page' => 6,
		);

		$portfolio_query = new WP_Query( $portfolio_query_options );
		if ( $portfolio_query->have_posts() ) {
			while ( $portfolio_query->have_posts() ) {
				$portfolio_query->the_post();
				?>
				<div class="galleryin">
					<a href="<?php the_permalink() ?>" >
						<img class="gallery_img" src="<?php the_post_thumbnail_url(); ?>" alt="portfolio-thumbnail-new">
					</a>
				</div>
				<?php
			}
		}
	} else {
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div>
					<a href="<?php the_post_thumbnail_url() ?>" data-lightbox="mygallery">
						<img class="gallery_img" src="<?php the_post_thumbnail_url(); ?>" alt="portfolio-thumbnail">
					</a>
				</div>
				<?php
			}
		}
	}

	?>
</div>

<!-- Pagination -->
<div class="container">
	<div class="blog__pagination">
		<?php
		echo paginate_links(
				array(
					'before_page_number' => '<span class="blog__pagination-item">',
					'after_page_number'  => '</span>',
				)
		);
		?>
	</div>
</div>
