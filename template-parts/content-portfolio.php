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
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<div>
					<!--  -->
					<?php $link_img = get_the_post_thumbnail_url();
					echo get_post_thumbnail_id() ?>
					<!-- href="<?php the_post_thumbnail_url(); ?>" data-lightbox="mygallery"  -->
					<a id="<?php echo 'portfolio-image-wrap' .get_post_thumbnail_id(); ?>" class="portfolio-image-wrap" onclick="zoom_portfolio_two(<?php echo get_post_thumbnail_id(); ?>)" my-title="<?php the_title(); ?>" onmouseover="make_black(<?php echo get_post_thumbnail_id(); ?>)" onmouseout="make_white(<?php echo get_post_thumbnail_id(); ?>)">
						<img id="<?php echo 'gallery_img' .get_post_thumbnail_id(); ?>" class="gallery_img" src="<?php the_post_thumbnail_url(); ?>" alt="portfolio-thumbnail">
						<div id="<?php echo 'portfolio-image-overlay' .get_post_thumbnail_id(); ?>" class="portfolio__image-overlay-hidden"> 
						<div class='portfolio__image-text'> View image </div>
						</div>
					</a>
				</div>
				<?php
			}
		}

		echo paginate_links(
			array(
				'before_page_number' => '<span class="blog__pagination-item">',
				'after_page_number'  => '</span>',
				'next_text'			 => '<span class="blog__pagination-item">
											<svg class="blog__pagination-icon" height="12" width="7">
											<path d="M0 0 L0 12 L7 6 Z" />
											</svg>
										</span>',
				'prev_text'			 => '<span class="blog__pagination-item">
											<svg class="blog__pagination-icon" height="12" width="7">
												<path d="M7 0 L7 12 L0 6 Z" />
											</svg>
										</span>',
	
			)
		);
	}

	?>
</div>

<script type="text/javascript">
	console.log("inside another script");
	function zoom_portfolio_two( thumbID )
	{
	let elementID = document.getElementById("portfolio-image-wrap" + thumbID );
	let imgID = "gallery_img" + thumbID;
	let imgTitle = elementID.getAttribute('my-title');
	document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay-invisible");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay");
	let imgCont = document.getElementById("portfolio__overlay-wrapper");
	imgCont.classList.remove("portfolio__overlay-wrapper-invisible");
	imgCont.classList.add("portfolio__overlay-wrapper");
	let portfolio = document.getElementById("portfolio__overlay-imgcontainer");
	
	let img = document.getElementById(imgID);
	var contWidth = 0;
	var contHeight = 0;
	var dmnvalue = "";
	if( img.naturalWidth < 800 )
	{
	contWidth = img.naturalWidth + 40;
	contHeight = img.naturalHeight + 100;
	dmnvalue = "width:" + contWidth + "; height:" + contHeight + ";";
	portfolio.setAttribute('style', dmnvalue);
	}
	else
	{
		portfolio.setAttribute('style', '');
	}
	
	let imgURL = document.getElementById(imgID).getAttribute('src');
	portfolio.innerHTML = "<img src='" + imgURL + "'><div class='portfolio__image-title'><p>" + imgTitle + "</p></div>";
	}
	</script>

<!-- Pagination -->
<div class="container">
	<div class="blog__pagination">
		<?php
		echo esc_url(
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
