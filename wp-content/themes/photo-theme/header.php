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
		    <a href="javascript:void(0)" class="logo">
		      <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1_dark.png" alt="Logo Image">
		    </a>
		    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">Menu</a>
		    <nav role="navigation">
		      <ul id="js-navigation-menu" class="navigation-menu show">
		        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
		        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
		        <li class="nav-link"><a href="javascript:void(0)">Testimonials</a></li>
		        <li class="nav-link"><a href="javascript:void(0)">Sign up</a></li>
		      </ul>
		    </nav>
		  </div>
		</header>


		<!-- wrapper -->
		<div class="wrapper">
