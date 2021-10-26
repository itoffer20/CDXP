<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CDXP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
        
		<nav class="navbar navbar-expand-lg">
         <!-- <div class="container"> -->
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
               <img alt="Logo" src="<?php
                                    $custom_logo_id = get_theme_mod('custom_logo');
                                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                    echo $image[0];
                                    ?>" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
               <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => false, 'menu_class' => 'menu navbar-nav ml-auto primary-menu')); ?>
            </div>
         <!-- </div> -->
      </nav>
      <div class="seomondo-logo">
         <?php echo do_shortcode("[hfe_template id='120']"); ?>
         </div>
		</header><!-- #masthead -->