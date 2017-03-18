<?php
/**
 * Plugin Name: Easy CountDowner
 * Description: An awesome countdown shortcode plugin. Just click on the countDowner button at tinyMce editor , provide settings information and click ok.
 * Plugin URI: http://rayhan.info/plugins
 * Author: Rayhan
 * Author URI: https://www.facebook.com/rayhan095
 * Version: 2.0.0
 * License: GPL2
 *
 */

/**
 * Copyright (c) 2017 | rayhan095@gmail.com | All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */


/**
 * CountDowner Assets files
 */
function easy_countDowner_file(){
	//----------------------------------------------
	//	Include king Countdowner css file
	//----------------------------------------------
	wp_register_style( 'king-countdowner', plugin_dir_url(__FILE__).'assets/TimeCircles.css', '', '1.0', 'all' );
	wp_enqueue_style('king-countdowner');
	
	
	//----------------------------------------------
	//	Include king Countdowner javascript file
	//----------------------------------------------
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'king-countdowner-js',  plugin_dir_url(__FILE__).'assets/TimeCircles.js', array('jquery'), '1.0', false );
	
}
add_action('wp_enqueue_scripts','easy_countDowner_file');

/**
 * CountDowner admin Assets files
 */
function easyCountDownerAdmin() {

wp_enqueue_style( 'easyCountDownerAdmin', plugin_dir_url(__FILE__).'assets/easyCountDowner-admin.css', '', '1.0', 'all' );

wp_enqueue_script( 'easyCountDownerAdmin-js',  plugin_dir_url(__FILE__) .'assets/easyCountDowner-admin.js',  array( 'jquery' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'easyCountDownerAdmin' );



require_once dirname(__FILE__) . '/easyCountdownerShortcode.php';


// Support shortcode in Text Widget
add_filter('widget_text', 'do_shortcode');


require_once plugin_dir_path( __FILE__ ) .'cf-pro/classes/setup.class.php';
require_once plugin_dir_path( __FILE__ ) .'EasyCountDowner-shortcode-generator.php';