<?php 

 // Add scripts

 function ig_add_scripts()
 {
 	//Add main css
 	wp_enqueue_style('ig_main_style',plugins_url().'/image_gallery/css/image_gallery_css.css');

 	//Add main js

	wp_enqueue_script('ig_main_script',plugins_url().'/image_gallery/js/image_gallery_js.js');
 }

 add_action('wp_enqueue_scripts', 'ig_add_scripts');