<?php
/**
 * Minimalize functions and definitions
 *
 * @package Minimalize
 * @since Minimalize 1.0
 */
 
/***
** Content Width
***/

if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */


/***
** Theme Setup
***/	
if ( ! function_exists( 'minimalize_setup' ) ):
function minimalize_setup() {
 
    //Custom functions that act independently of the theme templates
    require( get_template_directory() . '/inc/tweaks.php' );
 
    //Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );
 
	//Enable support for the Aside Post Format
    //add_theme_support( 'post-formats', array( 'aside' ) );
 
	//Enable Featured Thumbnail
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 630, 311 );

 
	//Register area for custom menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'minimalize' ),
    ) );
}
endif; //minimalize_setup
add_action( 'after_setup_theme', 'minimalize_setup' );

	
/***
** Register scripts and styles
***/
function minimalize_scripts_styles() {
	
	// Enqueue Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic', false );
	
	// Enqueue Styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
	// Enqueue Scripts
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.10.2.min.js');
	wp_enqueue_script('site', get_template_directory_uri() . '/js/site.js', array(), '20160216', true );
	
	 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
 
}
add_action( 'wp_enqueue_scripts', 'minimalize_scripts_styles' );

/***
* Register Widget Area
***/
function minimalize_widgets_init() {
	register_sidebar(array(
		'name'			=> __( 'Sidebar Widgets', 'minimalize' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the right.', 'minimalize' ),
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>'
	));	
}
add_action( 'widgets_init', 'minimalize_widgets_init' );
