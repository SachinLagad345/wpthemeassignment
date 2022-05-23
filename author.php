<!-- Author Archive Page -->
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



<!-- Blog and Sidebar Section -->

<section class="container-wrapper">
    <div class="single-container">

            <div class="blog-column">
            <h2 class="blog__heading"><?php echo single_cat_title( '', true ); ?></h2>
            <hr style="height: 1px; background-color: #62585f;">
            <?php
            if(have_posts()){
              while (have_posts()) {
                the_post();
                get_template_part( 'template-parts/content', 'archive' );
              }
            }
             ?>

            </div>
            <!-- single blog column -->

        <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

    </div>
</section>


<!-- Pagination -->
<div class="container">
  <div class="blog__pagination">
    <?php echo paginate_links(
      array(
        'before_page_number' => '<span class="blog__pagination-item">',
        'after_page_number' => '</span>',
      )
    ); ?>
  </div>
</div>

<div class="container">
  <hr style="height: 1px; background-color: #62585f; ">
</div>

<?php get_footer(); ?>
</body>

</html>