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

	function greenland_post_type(){

		// register humic posts
		register_post_type( 'humic', array(
			'show_in_rest'		=> true,
			'supports'			=> array('title', 'editor', 'thumbnail'),
			'rewrite'			=> array('slug' => 'humics'),
			'has_archive'		=> true,
			'public'			=> true,
			'menu_icon'			=> 'dashicons-admin-site-alt',
			'labels'			=> array(
				'name'			=> 'Humics',
				'add_new_item'	=> 'Add New Humic',
				'edit_item'		=> 'Edit Humic',
				'all_items'		=> 'All Humics',
				'singular_name'	=> 'Humic'
			)
		));

		// register pesticide posts
		register_post_type( 'pesticide', array(
			'show_in_rest'		=> true,
			'supports'			=> array('title', 'editor', 'thumbnail'),
			'rewrite'			=> array('slug' => 'pesticides'),
			'has_archive'		=> true,
			'public'			=> true,
			'menu_icon'			=> 'dashicons-buddicons-replies',
			'labels'			=> array(
				'name'			=> 'Pesticides',
				'add_new_item'	=> 'Add New Pesticide',
				'edit_item'		=> 'Edit Pesticide',
				'all_items'		=> 'All Pesticides',
				'singular_name'	=> 'Pesticide'
			)
		));

		// register beans posts
		register_post_type( 'bean', array(
			'show_in_rest'		=> true,
			'supports'			=> array('title', 'editor', 'thumbnail'),
			'rewrite'			=> array('slug' => 'beans'),
			'has_archive'		=> true,
			'public'			=> true,
			'menu_icon'			=> 'dashicons-calendar',
			'labels'			=> array(
				'name'			=> 'Beans',
				'add_new_item'	=> 'Add New Bean',
				'edit_item'		=> 'Edit Bean',
				'all_items'		=> 'All Beans',
				'singular_name'	=> 'Bean'
			)
		));
	}