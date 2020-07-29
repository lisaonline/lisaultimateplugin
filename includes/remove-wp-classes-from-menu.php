<?php
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/',' class="dropdown-menu"',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); 
?>