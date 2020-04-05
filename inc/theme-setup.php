<?php
	/**
 * grrenland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage grrenland
 * @since 1.0
 */
	/*
	*=====================
	*=====================
	* ADD THEME SUPPORT, REGISTER MENUS, ADD IMAGES SIZE
	*====================
	*=====================
	*/
	function greenland_config(){
		// this theme uses wp_nav_menu() in two locations
		register_nav_menus(array(
			'greenland_main_menu' => esc_html__('greenland Main Menu', 'grrenland') ,
			'greenland_footer_menu' => esc_html__('greenland Footer Menue', 'grrenland')
		));
		// this theme is translitable, so we're adding support to translate
		$textdomain = 'grrenland';
		load_theme_textdomain($textdomain, get_stylesheet_directory(). '/languages');
		load_theme_textdomain($textdomain, get_template_directory(). '/languages');
		
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'custom-logo', array(
			'height'		=> 85,
			'width'			=> 160,
			'flex_height'	=> true,
			'flex_width'	=> true
		) );

		// ADD CUSTOME HEADER IMAGE
		add_theme_support( 'custom-header', array(
				'default-image'          => '',
				'default-text-color'     => '000000',
				'width'                  => 1140,
				'height'                 => 250,
				'flex-height'            => true
			));

		// ADD CUSTOME Background IMAGE
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
			'default-image' => ''
		));

		add_image_size('greenland-slider', 1920, 800, array('center', 'center'));
		add_image_size('greenland-products', 698, 421, array('center', 'center'));
		add_image_size('greenlandSmall', 300, 200, array('center', 'center'));
		add_image_size('greenland-shop', 800, 421, array('center', 'center'));

		if(!isset($content_width)){
			$content_width = 600;
		}


	}

	/*================== widgets SIDEBAR ===============*/
	function greenland_sidebars(){
		register_sidebar(array(
			'name'			=> esc_html__('greenland Main Sidebar', 'grrenland'),
			'id'			=> 'greenland-sidebar-1',
			'description'	=> esc_html__('Drag and drop your widgets here', 'grrenland') ,
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));

		register_sidebar(array(
			'name'			=> esc_html__('Footer Sidebar1', 'grrenland') ,
			'id'			=> 'greenland-sidebar-footer1',
			'description'	=> esc_html__('Drag and drop your woocommerce widgets here', 'grrenland') ,
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));

		register_sidebar(array(
			'name'			=> esc_html__('Footer Sidebar2', 'grrenland') ,
			'id'			=> 'greenland-sidebar-footer2',
			'description'	=> esc_html__('Drag and drop your woocommerce widgets here', 'grrenland') ,
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
	}