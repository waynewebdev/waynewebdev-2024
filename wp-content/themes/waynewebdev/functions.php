<?php
/**
 * WayneWebDev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package waynewebdev
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  //minor
  //patch
  define('_S_VERSION', '0.00.01');
}
/**
 * Enqueue Styles
 */
function wwd_styles()
{

  wp_enqueue_style('wwd-style', get_theme_file_uri('style.css'), array(), _S_VERSION);
  wp_style_add_data('wwd-style', 'rtl', 'replace');

}
//add_action('wp_enqueue_scripts', 'wwd_styles');

function enqueue_my_theme_assets()
{
  // Get the theme directory URI
  $theme_dir = get_template_directory_uri();

  // Enqueue the CSS file
  wp_enqueue_style('my-theme-styles', $theme_dir . '/dist/main.css', array(), _S_VERSION, 'all');

  // Enqueue the JavaScript file
  wp_enqueue_script('my-theme-scripts', $theme_dir . '/dist/bundle.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_theme_assets');
