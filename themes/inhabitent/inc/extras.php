<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

//Custom Function for setting Featured Image as Splash for About Page
function inhabitent_about_splash_bg() {

	if( !is_page_template( 'page-about.php' ) ) {
		return ;
	}

   $custom_css = 
           ".abouthero{
                   background:
                       linear-gradient( 
                            rgba(0,0,0,0.4),
                            rgba(0,0,0,0.4)
                        ),
                       url('". CFS()->get('splash_hero') ."');
                   display: flex;
                   background-size: cover;
                   background-position: bottom;
                   height: 100vh;
                   width: 100vw;
                   padding-top: 0;
                   justify-content: center; 
                   align-items: center;
                   color: white;
           }";
   wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_splash_bg' );

function inhabitent_filter_product_query( $query ) {
	
	if( is_home() && !is_admin() && $query->is_main_query() ) {

		$query->set( 'orderby', 'title');
		$query->set( 'orderby', 'ASC');
		$query->set( 'post_per_page', 16);

	}
}

add_action( 'pre_get_posts', 'inhabitent_filter_product_query' ); ?>
