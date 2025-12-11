<?php
/*
Plugin Name: Force Viewport Fix
Description: Ensures accessible viewport tag overrides Divi 5.
*/

// Remove Divi's viewport tag
add_action('wp_head', function() {
    remove_action('wp_head', 'et_add_viewport_meta');
}, 0);

// Add correct viewport tag
add_action('wp_head', function() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">' . "\n";
}, 1);