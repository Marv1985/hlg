<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="Transform your brand with our innovative design and branding services. Leverage our expert web development to create engaging digital experiences. Enhance your marketing efforts with our strategic approach, driving growth and visibility. Discover how we can elevate your business today.">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

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
	

	<!-- give result orange or white value to set class of nav bar -->
	<?php if(is_page('8') || is_page('1032')): ?>
		<!-- spacer sits behind position fixed nav -->
		<div id="top_of_page" class="spacer orange"></div>
		<?php get_template_part('template-parts/navbar', null, array('result' => 'orange', 'make_white' => '')); ?>
	<?php else: ?>
		<!-- spacer sits behind position fixed nav -->
		<div id="top_of_page" class="spacer white"></div>
		<?php get_template_part('template-parts/navbar', null, array('result' => 'white', 'make_white' => 'make_white')); ?>
	<?php endif; ?>

		
