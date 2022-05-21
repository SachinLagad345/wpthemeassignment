<!doctype html>
<html lang="en-US">

<head>
	<title><?php echo get_the_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@300;400;500;700&family=Roboto&family=Rubik+Glitch&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
	<!-- // fonts -->

	<!-- icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="portfolio.css">
	<?php
	wp_head();
	?>
</head>

<body>
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
					<div class="single-post-wrapper">
						<h1 class="single-post_heading"><?php echo the_title(); ?> </h1>
						<div class="single_post_subheading__container">
							<p class="single-post__subheading_para"> by <span class="author_name"><?php echo get_the_author(); ?></span> on <span class="author_name"><?php echo get_the_date(); ?></span></p>
							<p class="author_name"> <?php echo get_comments_number(); ?> comments </p>
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
				<div class="single_sidebar">
					<?php
					dynamic_sidebar( 'sidebar-1' );
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

</html>
