<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

			<link rel="icon" href="favicon.ico" type="assets/images/favicons/fav.png" />
			<link rel="manifest" href="/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">

			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="<?php bloginfo('description'); ?>">


		<!-- Default stylesheets-->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Template specific stylesheets-->
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/animate.css/animate.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/flexslider/flexslider.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
		<!-- Main stylesheet and color file-->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
		<link id="color-scheme" href="<?php echo get_template_directory_uri(); ?>/assets/css/colors/default.css" rel="stylesheet">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
		<main>
			<div class="page-loader">
				<div class="loader">Loading...</div>
			</div>
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="http://localhost:8888/nazz/home/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="custom-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://localhost:8888/nazz/home/">Home</a></li>
							<li><a href="http://localhost:8888/nazz/about-us/">About Us</a></li>
							<li><a href="http://localhost:8888/nazz/services/">Services</a></li>
							<li><a href="http://localhost:8888/nazz/contact-us/">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</nav>
