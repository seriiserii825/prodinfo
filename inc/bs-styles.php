<?php
function bs_prodinfo_scripts() {
	wp_enqueue_style( 'bs-prodinfo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-prodinfo-style', get_template_directory_uri().'/assets/css/custom.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_prodinfo_scripts' );
