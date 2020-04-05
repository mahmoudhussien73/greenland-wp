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

 add_action( 'rest_api_init', 'greenland_custom_route_restapi' );

 function greenland_custom_route_restapi(){
 	register_rest_route('greenland/v1', 'search', array(
        'methods'  => WP_REST_SERVER::READABLE,
        'callback' => 'greenlandSearchResults'
 	));
 }

 function greenlandSearchResults($data){
 	$mainQuery = new WP_Query(array(
        'post_type'   => array('post', 'page', 'humic', 'pesticide', 'bean'),
        's'			  => sanitize_text_field( $data['term'] )
 	));

 	$results = array(
 		'generalInfo'	=> array(),
 		'humics'		=> array(),
 		'pesticides'	=> array(),
 		'beans'			=> array()
 	);

 	while($mainQuery->have_posts()){
 		$mainQuery->the_post();

 		if ( get_post_type() == 'post' || get_post_type() == 'page' ){
	 		array_push($results['generalInfo'], array(
	            'title'		=> get_the_title(),
	            'link'		=> get_permalink(),
	            'type'		=> get_post_type()
	 		));
	 	}

	 	if ( get_post_type() == 'humic' ){
	 		array_push($results['humics'], array(
	            'title'		=> get_the_title(),
	            'link'		=> get_permalink(),
	            'image'		=> get_the_post_thumbnail_url(0, 'greenlandSmall'),
	            'id'		=> get_the_ID()
	 		));
	 	}
	 	if ( get_post_type() == 'pesticide' ){
	 		array_push($results['pesticides'], array(
	            'title'		=> get_the_title(),
	            'link'		=> get_permalink()
	 		));
	 	}
	 	if ( get_post_type() == 'bean' ){
	 		array_push($results['beans'], array(
	            'title'		=> get_the_title(),
	            'link'		=> get_permalink()
	 		));
	 	}
 	} /*end while*/

 	if($results['humics']){
 		
 			$humicMetaQuery = array('relation' => 'OR');

		 	foreach($results['humics'] as $item){
		 		array_push($humicMetaQuery, array(
		 				'key'		=> 'related_humic',
		 				'compare'	=> 'LIKE',
		 				'value'		=> '"'.$item['id'].'"'
		 			));
		 	}

		 	$relatedHumicQuery = new WP_Query(array(
		 		'post_type'		=> 'bean',
		 		'meta_query'	=> $humicMetaQuery
		 	));

		 	while($relatedHumicQuery->have_posts()){
		 		$relatedHumicQuery->the_post();

		 		if ( get_post_type() == 'bean' ){
			 		array_push($results['beans'], array(
			            'title'		=> get_the_title(),
			            'link'		=> get_permalink()
			 		));
			 	}

		 	}

		 	$results['beans'] = array_values( array_unique( $results['beans'], SORT_REGULAR ) );
 	}

 	return $results;
 }