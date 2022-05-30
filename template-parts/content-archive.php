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
<div class="blog__single_post">
	<!-- blog post header-->
	<div class="blog__post_header">
		<div class="blog__post_date">
			<p>
				<?php
				$date_s = explode( ' ', get_the_date( 'j M' ) );
				echo esc_attr( $date_s[0] );
				?>
			</p>
			<p>
				<?php
				echo esc_attr( $date_s[1] );
				?>
			</p>
		</div>
		<div class="blog__header-gap"></div>
		<div class="blog__post_title">
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</div>
	</div>
	<!-- //blog post header-->

	<div class="blog__post_body">
		<div class="blog__post_img">
			<img src="<?php the_post_thumbnail_url(); ?>">
		</div>
		<div class="blog__post_right_body">
			<div class="blog__post_subheading">
				<p> by <a href="<?php get_author_link( true, get_the_author_ID() ); ?>"><span class="blog__author-name"><?php the_author(); ?></span></a> on <?php echo get_the_date( 'j M Y' ); ?></p>
				<p class="blog__author-name"> <?php echo esc_attr( get_comments_number() ); ?> comments </p>
			</div>
			<hr style="height: 1px; width: 100%; background-color: #62585f; margin: 5px 0px;">
			<!-- blog__post-excerpt -->
			<div class="blog__post-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<!-- //blog__post-excerpt -->
			<div class="blog__post-read-more">
				<a href="<?php echo esc_attr( get_the_permalink() ); ?>"> READ MORE </a>
			</div>
		</div>
		<!-- //blog post right body -->
	</div>
</div>
