<?php
/**
 * greenland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage greenland
 * @since 1.0
 */
	function greenland_load_theme_files(){
		wp_enqueue_style( 'boots', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 'all' );
		wp_enqueue_style( 'style', get_theme_file_uri( '/assets/css/style.css' ), 'all' );

		//scripts
		wp_enqueue_script( 'proper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'boots-js', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array( 'jquery' ), '1,8', true );
		wp_enqueue_script( 'script', get_theme_file_uri( 'assets/js/scripts-bundled.js' ), null, '1,8', true );
		
		wp_localize_script( 'script', 'greenlandData', array(
			'rootUri'	=> get_site_url(),
			'imglocation'	=> get_template_directory_uri()
		));
	}