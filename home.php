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

<section class="single-post">
				<!-- single container -->
				<div class="single-container">
                	<!-- single post wrapper -->
					<div class="blog_post__wrapper">
                    <h1 class="blog__heading">LET'S BLOG </h1>

                <hr style="height: 1px; width: 100%; background-color: #62585f; margin: 30px 0px;">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			?>

						<div class="blog__single_post">
                            <!-- blog post header-->
                            <div class="blog__post_header">
                                <div class="blog__post_date">
                                    <p>
                                    <?php
                                        $date_s  = explode(' ',get_the_date('j M'));
                                        echo $date_s[0];
                                    ?>
                                    </p>
                                    <p>
                                    <?php
                                        echo $date_s[1];
                                    ?>
                                    </p>
                                </div>
                                <div class="blog__post_title">
                                        <?php the_title() ?>
                                </div>
                            </div>
                            <!-- //blog post header-->

                            <div class="blog__post_body">
                                <div class="blog__post_img">
                                    <img src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="blog__post_right_body">
                                    <div class="blog__post_subheading">
                                        <p> by <a href="<?php get_the_author_link() ?>"><span class="blog__author-name"><?php the_author(); ?></span></a> on <?php echo get_the_date('j M Y'); ?></p>
                                        <p class="blog__author-name"> <?php echo get_comments_number() ?> comments </p>
                                    </div>
                                    <hr style="height: 1px; width: 100%; background-color: #62585f; margin: 5px 0px;">
                                    <!-- blog__post-excerpt -->
                                    <div class="blog__post-excerpt">
                                        <?php the_excerpt(); ?> 
                                    </div>
                                    <!-- //blog__post-excerpt -->
                                    <div class="blog__post-read-more">
                                        <a href="<?php echo get_the_permalink() ?>"> READ MORE </a>
                                    </div>
                                </div>
                                <!-- //blog post right body -->
                            </div>
						</div>

			<?php
        }
    }
    else
    {
        echo "<h1> No Post Found!!</h1>";
    }
?>
					</div>
					<!-- //single post wrapper -->

					<!-- single sidebar area -->
					<div class="single_sidebar">
						<?php
							dynamic_sidebar('sidebar-1');
						?>
					</div>
				</div>
				<!-- //single container -->
			</section>
            <?php
                get_footer();
                ?>
</html>
