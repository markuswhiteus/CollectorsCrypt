<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  	<meta charset="<?php bloginfo('charset'); ?>">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/cc495de665.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
	<script src="wp-content/themes/boilerplate/dist/js/nav.js"></script>

	<link rel="stylesheet" href="<?php echo get_theme_file_uri('dist/css/main.min.css'); ?>">

  	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper font-montserrat">

		<header class="flex bg-white pt-1">
			<?php
			    include locate_template('parts/hero.php');
			?>
		</header>