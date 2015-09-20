<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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
	<body <?php body_class(); ?>>

		<header class="navigation" role="banner">
		  <div class="navigation-wrapper">
				<div class="about-wrapper">
					<a href="<?php echo site_url(); ?>" class="logo">
			      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="GEORGE PRENTOSKI LOGO">
			    </a>
					<p class="about">
						Sydney based photographer <br>
						<!-- INSTAGRAM: <a href="https://instagram.com/bklv_" target="_blank">@bklv_</a><br>
						VIMEO: <a href="http://vimeo.com/georgeprentoski">vimeo.com/georgeprentoski</a><br>
						SOUNDCLOUD: <a href="https://soundcloud.com/bklv420">@bklv420</a><br> -->
						georgeprentoski@gmail.com
					</p>
				</div>

		    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
		    <nav role="navigation">
						<?php html5blank_nav(); ?>
		    </nav>
		  </div> <!-- /nav wrapper -->
		</header>


		<!-- wrapper -->
		<div class="wrapper">
