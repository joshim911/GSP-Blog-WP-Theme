<?php
/**
 * Main Functions 
 * 
 * 
 */

if( ! defined('ABSPATH') ) : die("Access denied"); endif;

if ( ! defined('wi_name')) define('wi_name', 'written_info');


add_action('after_setup_theme', 'remove_admin_bar');
    function remove_admin_bar() {
        show_admin_bar(false);
}

/**
 *  Styles and Scripts initializing
 * 
 */
 
add_action('wp_enqueue_scripts', 'wi_scripts_styles');

function wi_scripts_styles() {
	/* main style */
	wp_enqueue_style('main-css', get_template_directory_uri().'/style.css', array(), microtime(), 'all');
	/* bootstrap minified css */
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css', array(), microtime(), 'all');
	/* main js file */
	wp_enqueue_script('jquery-cdn','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',array(),'1.0',true);
	wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', array(),'1.0',true);
	wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets/js/main.js', array(), microtime(), true );
	
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) == 1) {
		 wp_enqueue_script( 'comment-reply' );
	// }

	/* set site url for js */
	wp_localize_script( 'main-js', 'wi_site_data', array(
		'url' => get_site_url() 
	) );
}


/**
 *  Menu settings
 * 
 */
add_action('after_setup_theme',function(){

	register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', wi_name ),
            'footer_menu'  => __( 'Footer Menu', wi_name ),
             'sidebar_menu' => __( 'Sidebar Menu', wi_name ),
        ) );

});


/**
 *  Author Settings
 * 
 */
if ( file_exists(get_template_directory().'/inc/author-settings.php') ) {
	require_once get_template_directory().'/inc/author-settings.php';
}


/**
 *  Widget Settings
 */
if ( file_exists(get_template_directory().'/inc/widget-settings.php') ) {
	require_once get_template_directory().'/inc/widget-settings.php';
}


/**
 *  Route Settings
 */
 if ( file_exists(get_template_directory().'/inc/routes/main.php') ) {
	require_once get_template_directory().'/inc/routes/main.php';
}


/**
 *  Blog-Content Settings
 */
 if ( file_exists(get_template_directory().'/inc/blog-content-settings/main.php') ) {
	require_once get_template_directory().'/inc/blog-content-settings/main.php';
}

/**
 * 
 * All Custom Routes
 */
 
 if( file_exists(__DIR__.'/route/main.php') ){
     require_once __DIR__.'/route/main.php';
 }
 
 /**
 * 
 * All Custom Views According To Routes
 */
 
 if( file_exists(__DIR__.'/view/main.php') ){
     require_once __DIR__.'/view/main.php';
 }


 /**
 * 
 * All Custom Views According To Routes
 */
 
 if( file_exists(__DIR__.'/inc/blocks/main.php') ){
     require_once __DIR__.'/inc/blocks/main.php';
 }