<?php
/*
Plugin Name: Emaze
Plugin URI:  https://wordpress.org/plugins/emaze/
Description: Embed presentation from Emaze.com into your WordPress site.
Version:     1.4
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: emaze
*/



/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/embed.php' );
