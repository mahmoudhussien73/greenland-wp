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
	
	//include php fiels

	require get_theme_file_path( '/inc/theme-fiels.php' );
	require get_theme_file_path( '/inc/theme-setup.php' );
	require get_theme_file_path( '/inc/class-wp-bootstrap-navwalker.php' );
	require get_theme_file_path( '/inc/customizer.php' );
	require get_theme_file_path( '/inc/custom-post-type.php' );
	require get_theme_file_path( '/inc/custom-search-route.php' );

	// STYLE, SCRIPTS, FONTS

	add_action( 'wp_enqueue_scripts', 'greenland_load_theme_files' );

	// THEME SUPPORT

	add_action( 'after_setup_theme', 'greenland_config', 0);

	// WIDGETS, SIDEBAR

	add_action( 'widgets_init', 'greenland_sidebars' );

	// register custom post type

	add_action( 'init', 'greenland_post_type' );

	// create custom field ON rest api

	function greenland_custom_rest(){

		register_rest_field( 'post', 'postThumbnail', array(
			'get_callback'	=> function() {return get_the_post_thumbnail();}
		));
	}

	add_action( 'rest_api_init', 'greenland_custom_rest' );

	// PageBanner function

	function dynamicPageBanner($args = NULL){

		if(!$args['title']){
			$args['title'] = get_the_title();
		}

		if(!$args['subtitle']){
			$args['subtitle'] = get_field('pagebanner_subtitle');
		}

		if(!$args['image']){
			if(get_field('pagebanner_image')){
				$args['image'] = get_field('pagebanner_image')['sizes']['greenland-slider'];
			}else{
				$args['image'] = get_theme_file_uri('assets/img/HGS-Banner-Contact.jpg');
			}
		}

		if(!$args['svg']){
			$svgarray = array('panger', 'panger2', 'panger3', 'panger4');
			$args['svg'] = $svgarray[rand(0, 3)];
		}

		if(!$args['png']){
			$pngarray = array('1.png', '2.png');
			$args['png'] = get_theme_file_uri( 'assets/img/ico/'. $pngarray[rand(0, 1)] );
		} ?>

		 <div class="pagebanner text-center" style="background-image: url(<?php echo $args['image']; ?>);">
		  <div class="background" style="background-image: url(<?php echo $args['png']; ?>)"></div>

		  <div class="container">
		      <div class="text">
		        <h1><?php echo $args['title']; ?></h1>
		        <p class="subtitle"><?php echo $args['subtitle']; ?></p>
		      </div>
		  </div>
		  
		  <div class="last-backgroound">
		      <svg>
		          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/spotify.svg#<?php echo $args['svg']; ?>"></use>
		      </svg>
		  </div>
		</div>
	<?php }