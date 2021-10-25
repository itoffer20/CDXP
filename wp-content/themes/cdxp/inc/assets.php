<?php
/**
 * Enqueue scripts and styles.
 */
function cdxp_scripts() {
	wp_enqueue_style( 'cdxp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cdxp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cdxp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '4.6.0', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('custom', get_template_directory_uri() .'/assets/css/style.css', array(), '1.0', 'all');
	//Scripts
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'cdxp_scripts' );