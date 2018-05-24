<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_dynamic_css(){

	//make sure it is the about page that has loaded
	if( ! is_page_template('page-templates/about.php')){
		return;
	}

	
	//get backgroundimage from custom field
	$image = CFS()->get('hero_image');

	//if no image found in field, return
	if (! $image ){
		return;
	}

	//add custom CSS
	$hero_css = "
	.entry-header{
		background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url({$image}) no-repeat center bottom;
		background-size: cover, cover;
	}";

	wp_add_inline_style('red-starter-style', $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitent_dynamic_css');