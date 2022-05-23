<?php
	get_header();
	get_template_part( 'template-parts/content', 'feature' );
?>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			?>
			<section class="single-post">
				<!-- single container -->
				<div class="single-container">
					<!-- single post wrapper -->
					<div class="page-content-wrapper">
						<h1 class="single-post_heading"><?php echo esc_attr( the_title() ); ?> </h1>
						<div class="single_post_subheading__container">
							<p class="single-post__subheading_para"> by <a href="<?php get_author_link( true, get_the_author_ID() ); ?>"><span class="author_name"><?php echo get_the_author(); ?></span></a> on <span class="author_name"><?php echo get_the_date(); ?></span></p>
							<p class="author_name"> <?php echo esc_attr( get_comments_number() ); ?> comments </p>
						</div>
						<!-- //single post subheading container -->
						<?php
						get_template_part( 'template-parts', 'page' );
						comments_template();
						?>

					</div>
					<!-- //single post wrapper -->

					<!-- single sidebar area -->
					<?php
					get_template_part( 'template-parts/content', 'sidebar' );
					?>

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
