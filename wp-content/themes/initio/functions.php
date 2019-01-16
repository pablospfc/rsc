<?php
/**
 * Initio functions and definitions
 *
 * @package Initio
*/

// Use a child theme instead of placing custom functions here
// http://codex.wordpress.org/Child_Themes

/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	
require_once trailingslashit(get_template_directory()) .'functions/initio-functions.php'; 			// Theme Custom Functions
require_once trailingslashit(get_template_directory()) .'functions/initio-customizer.php';			// Load Customizer
require_once trailingslashit(get_template_directory()) .'functions/initio-image-sliders.php'; 		// Theme Custom Functions
require_once trailingslashit(get_template_directory()) .'functions/initio-woocommerce.php';		    // WooCommerce Support
require_once trailingslashit(get_template_directory()) .'functions/wp_bootstrap_navwalker.php';