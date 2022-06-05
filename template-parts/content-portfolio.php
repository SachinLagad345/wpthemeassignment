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
<div id="gallery-id" class="gallery">
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
					<a href="<?php the_permalink(); ?>">
						<img class="gallery_img" src="<?php the_post_thumbnail_url(); ?>" alt="portfolio-thumbnail-new">
					</a>
				</div>
				<?php
			}
		}
	} else {
		$myid = 1;
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div class="portfolio-image-wrap">
					<?php
					$link_img = get_the_post_thumbnail_url();
					?>

					<a id="<?php echo esc_html( 'portfolio-image-wrap' . $myid ); ?>" onclick="zoom_portfolio_two(<?php echo esc_html( $myid ); ?>)" my-title="<?php esc_html( the_title() ); ?>" onmouseover="make_black(<?php echo esc_html( $myid ); ?>)" onmouseout="make_white(<?php echo esc_html( $myid ); ?>)">
						<img id="<?php echo esc_html( 'gallery_img' . $myid ); ?>" class="gallery_img" src="<?php esc_html( the_post_thumbnail_url() ); ?>" alt="portfolio-thumbnail">
						<div id="<?php echo esc_html( 'portfolio-image-overlay' . $myid ); ?>" class="portfolio__image-overlay-hidden">
							<div class='portfolio__image-text'> View image </div>
						</div>
					</a>
				</div>
				<?php
				$myid++;
			}
		}
	}

	?>
</div>
