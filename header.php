<?php
/**
 * Header file for the greenland WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?>>
  	<?php if(is_front_page()){
  		include('temp/topbar.php');
  	}
  		include('temp/navbar.php');
  	?>