

	<?php
	wp_head();
	?>

	<?php
	get_header();
	get_template_part( 'template-parts/content', 'feature' );
	?>

	<section class="single-post">
		<!-- single container -->
		<div class="single-container">
			<!-- single post wrapper -->
			<div class="blog_post__wrapper">
				<h1 class="blog__heading">LET'S BLOG </h1>

				<hr  class="blog_header-line">
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
