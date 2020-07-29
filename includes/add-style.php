<?php
function theme_style() {
	wp_enqueue_style( 'Theme Style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_style' );
?>