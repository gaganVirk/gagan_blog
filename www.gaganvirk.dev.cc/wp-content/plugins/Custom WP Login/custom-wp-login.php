<?php

/**
* Plugin Name: Custom WP Login
* Version: 0.1
* Author: Gagan
* License: GPL2
* Text Domain: cwpl
*/
add_action('login_enqueue_scripts', 'cwpl_login_stylesheet');

function cwpl_login_stylesheet() {
	// load stylesheet
	wp_enqueue_style('cwpl-custom-stylesheet', plugin_dir_url(__FILE__) . 'login-style.css');
}

?>
