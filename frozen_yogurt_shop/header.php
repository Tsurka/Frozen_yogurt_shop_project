<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<script src="<?php echo get_template_directory_uri() ?>/js/mobile.js" type="text/javascript"></script>

	<?php wp_head() ?>

</head>
<body>
	<div id="page">
		<div id="header">
			<div>
			
				<a href="index.html" class="logo"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
				<ul id="navigation">
				<li class="selected">
				<?php 
                if (has_nav_menu('header')) :
                    wp_nav_menu(array('theme_location' => 'header','container' => 'sidebar'));
                else: 
            	?>
					<li class="selected">
						<a href="index.html">Home</a>
						
					</li>

					<li class="menu">
						<a href="about.html">About</a>
						<ul class="primary">
							<li>
								<a href="product.html">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog.html">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
				<?php
endif;
				?>
			</div>
		</div>