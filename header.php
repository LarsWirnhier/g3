<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>

    <?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
	<script src="<?php bloginfo('template_directory'); ?>/js/customizer.js" type="text/javascript"></script>

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>

	<?php do_action( 'body_before' ); ?>

	<!--skip to content link-->
	<a class="skip-content" id="skip-content" href="#main"><?php _e('Skip to content', 'unlimited'); ?></a>

	<div id="overflow-container" class="overflow-container">

		<header class="site-header" id="site-header" role="banner">
		
			<div class="headhead">

			<?php do_action( 'header_before' ); ?>
			
			<?php unlimited_social_icons_output('header'); ?>

			<?php if( get_theme_mod( 'search_bar' ) != 'hide' ) get_template_part('content/search-bar'); ?>

			<div id="title-container" class="title-container">
				<a href="/index.php"><img src="<?php bloginfo('template_directory'); ?>/img/g3.png" alt="G3" /></a>
				<?php /* get_template_part('logo') */ ?>
				<!--p class="site-description"><?php bloginfo('description'); ?></p-->

				<div style="float:right; max-width: 60%; text-align: right;">
					<?php get_template_part( 'menu', 'primary' ); ?>
				</div>
				
			</div>


			<?php do_action( 'primary_menu_before' ); ?>

			<!--div class="subheader"></div-->
			<?php /* get_template_part( 'menu', 'primary' ); */ ?>

			<button id="toggle-navigation" class="toggle-navigation" aria-expanded="false">
				<span class="screen-reader-text"><?php _e('open menu', 'unlimited'); ?></span>
				<i class="fa fa-bars" title="<?php _e('primary menu icon', 'unlimited'); ?>"></i>
			</button>

			<?php do_action( 'header_after' ); ?>
			
			</head>

		</header>

		<div class="subheader"></div>

		<?php do_action( 'before_main' ); ?>

		<div class="max-width">

			<section id="main" class="main" role="main">

			
			&nbsp;<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>

			<?php do_action( 'main_before' ); ?>

<?php
/*
			$postid = $wp_query->post->ID;
			echo get_post_meta($postid, 'schulkategorie', true);
*/
?>
			<div class="maincontent">