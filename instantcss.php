<?php

/**
 * Plugin Name: Instant CSS
 * Description: Write your styles beautifully with the power of Visual Studio Code
 * Version:     1.1.3
 * Author:      Dylan Blokhuis
 * Author URI:  https://github.com/dylanblokhuis
 * License:     GPL-3.0
 * License URI: https://raw.githubusercontent.com/dylanblokhuis/instantcss-wp/master/LICENSE
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}

require_once( __DIR__ . '/classes/class.instantcss.php' );
require_once( __DIR__ . '/classes/class.instantcss_ajax.php');

if ( class_exists( 'InstantCSS' ) ) {
	$instantCSS = new InstantCSS();
}

