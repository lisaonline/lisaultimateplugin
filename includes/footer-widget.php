<?php
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Menu Widget',
		'id'            => 'footer_menu_widget',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
?>