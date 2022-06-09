<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php global $base; ?>



  <!---------------------- start loader -------------------------------------------->
  <?php get_template_part('template-parts/ui-header/loader'); ?>
  <!---------------------- start loader -------------------------------------------->

  <!---------------------- start scroll-up -------------------------------------------->
  <a id="button" class="scroll-up"><i class="bi bi-chevron-up"></i></a>
  <!---------------------- finish scroll-up -------------------------------------------->

  <!---------------------- stikey header ---------------------->
  <?php get_template_part('template-parts/ui-header/stiky-header'); ?>
  <!---------------------- stikey header ---------------------->

  <!--nav menu  wrapper -->
  <?php get_template_part('template-parts/ui-header/nav-menu'); ?>
  <!--nav menu  wrapper -->