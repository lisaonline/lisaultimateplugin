<?php
function use_bootstrap() {
    // Version 3.3.7
    wp_enqueue_style( 'bootstrap-cdn-css-v3', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js-v3', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
    // Version 4.5.0
    wp_enqueue_style( 'bootstrap-cdn-css-v4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js-v4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'use_bootstrap' );
?>