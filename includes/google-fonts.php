<?php
function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Libre+Franklin:300|Lobster+Two|Roboto', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
?>