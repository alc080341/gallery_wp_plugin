<?php
/*
Plugin Name: image_gallery
Plugin URI: https://chamberscreative.co.uk/
Description: Image thumbnail gallery with descriptions
Version: 0.1.0
Author: Tony Chambers
Author URI: http://chamberscreative.co.uk/
*/


//exit if accessed directly
if(!defined('ABSPATH'))
{
	exit;
} 


// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/image_gallery-scripts.php');

// Load class
require_once(plugin_dir_path(__FILE__).'/includes/image_gallery-class.php');

//Register widget
function register_imagegallery()
{
	register_widget('image_gallery_widget');
}

// Hook in function

add_action('widgets_init', 'register_imagegallery');
