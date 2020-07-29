<?php
   /*
   Plugin Name: Lisa's Ultimate Plugin for WordPress Niggles
   Plugin URI: http://lisaonline.uk
   Description: My ultimate plugin for WordPress niggles
   Version: 1.0
   Author: Lisa
   Author URI: http://lisaonline.uk
   License: GPL2
   */

   // Redirect after login
   include 'includes/redirect.php';

   // Add Favicon
   include 'includes/favicon.php';
   
   // Add Google Analytics to Footer
   include 'includes/google-analytics.php';

   // Register Menus
   include 'includes/register-menu.php';

   // Add Google Fonts
   include 'includes/google-fonts.php';
 
   // Add style.css to header
   include 'includes/add-style.php';

    // Load Bootstrap CDN
    include 'includes/bootstrap.php';

    // Add Breadcrumbs
    include 'includes/breadcrumbs.php';

    // Add Footer Menu Widget
    include 'includes/footer-widget.php';

    // Remove junk from head
    include 'includes/remove-header-junk.php';

    // Purge WP-flavoured classes on the WP Menu
    include 'includes/remove-wp-classes-from-menu.php';

    // Customise login page
    include 'includes/custom-login-page.php';
 
    // smart jquery inclusion
    include 'includes/smart-jquery-inclusion.php';
?>