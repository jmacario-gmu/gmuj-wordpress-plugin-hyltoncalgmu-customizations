<?php

/**
 * Main plugin file for the Mason WordPress: hyltoncalgmu customizations plugin
 */

/**
 * Plugin Name:       Mason WordPress: hyltoncalgmu customizations
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-hyltoncalgmu-customizations
 * Description:       
 * Version:           0.9
 */


// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

// Set up auto-updates
	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jmacario-gmu/gmuj-wordpress-plugin-hyltoncalgmu-customizations/',
	__FILE__,
	'gmuj-wordpress-plugin-hyltoncalgmu-customizations'
	);

// Custom scripts
require('php/custom-scripts.php');

// Custom styles
require('php/custom-styles.php');
