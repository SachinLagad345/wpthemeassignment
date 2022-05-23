<!-- Tag Archive Page -->
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


<div class="container-wrapper">
    <div class="single-container">
      <!-- Blog -->
        <div class="blog-column">
            <h2 class="blog__heading">Tag: <?php echo single_cat_title( '', false ); ?></h2>
            <hr style="height: 1px; background-color: #62585f; margin: 10px 0px;">
            <?php
            $post_query_options = array(
              'post_type' => array( 'post', 'portfolio' ),
              'paged' => get_query_var( 'paged' ),
              'posts_per_page' => 5,
            );
            $post_query = new WP_Query( $post_query_options );
            if( $post_query->have_posts() ){
              while ( $post_query->have_posts() ) {
                $post_query->the_post();
                get_template_part( 'template-parts/content', 'archive' );
              }
            }
             ?>
        </div>

        <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

    </div>
</div>


<!-- Pagination -->
<div class="container">
  <div class="blog__pagination">
    <?php
    echo paginate_links(
      array(
        'before_page_number' => '<span class="blog__pagination-item">',
        'after_page_number' => '</span>',
      )
    );
    ?>
  </div>
</div>

<div class="container">
  <hr style="height: 1px; background-color: #62585f; ">
</div>

<?php get_footer(); ?>

</body>

</html>