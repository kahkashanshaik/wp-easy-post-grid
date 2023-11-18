<?php 
/*
	Plugin Name: Wp Easy Posts Grid
	Plugin URI: https://littlecoder.info/wp-plugins
	Author URI: https://littlecoder.info
	Description: Wp Easy Posts Grid help you in creating beautiful posts grid without any hassle in just few clicks.
	Author: Kahkashan
	Version: 0.0.1
	License: GPLv2 or later
	Text Domain: kk-post-slider-carousel  
*/

	// If this file is called directly, abort!!
	defined( 'ABSPATH' ) or die('Hey, what are you doing here? You silly human!');

	// Load composer autoload
	if( file_exists( dirname( __FILE__ ) .'/vendor/autoload.php' ) ) {
		require_once dirname( __FILE__ ) .'/vendor/autoload.php';
 	}

 	use Inc\Settings\Activate;
 	use Inc\Settings\Deactivate;

 	/**
 	 * Plugin Activation
 	 */

 	function activate_kk_post_grid_plugin() {
 		// Activate::activate();
 	}

 	/**
 	 * Plugin Deactive
 	 * */

 	function deactivate_kk_post_grid_plugin() {
 		// Deactivate::deactivate();
 	}

 	register_activation_hook( __FILE__, 'activate_kk_post_grid_plugin' );
 	register_deactivation_hook( __FILE__, 'deactivate_kk_post_grid_plugin' );


