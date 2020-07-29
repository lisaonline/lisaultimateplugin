<?php
// Redirect user after login
function admin_default_page() {
  return '/';
}
add_filter('login_redirect', 'admin_default_page');
?>