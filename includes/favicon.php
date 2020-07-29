<?php
function theme_favicon() {
    echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
}
add_action('wp_head', 'theme_favicon');
?>