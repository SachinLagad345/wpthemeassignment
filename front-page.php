<!doctype html>
<html lang="en-US">

<head>
	<title>Portfolio</title>
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
</head>

<?php
wp_head();

get_header();
?>

<body>
	<!-- red box container  -->
	<div id="red-box" class="red-box-container">
		<div class="red-box-container_background">'
			<div class="red-box-container_content">
				<h1 class="red-box-container_content__title">Gearing up the ideas</h1>
				<p class="red-box-container_content__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
		</div>
	</div>
	<!-- //red box container  -->

	<?php
	get_template_part( 'template-parts/content', 'feature' );
	?>

</body>

</html>
