<?php
/**
 * Plugin Name: Easy CountDowner
 * Description: An awesome countdown shortcode plugin. Just click on the countDowner button at tinyMce editor , provide settings information and click ok.
 * Plugin URI: plugin.rayhan.info
 * Author: Rayhan
 * Author URI: https://www.facebook.com/rayhan095
 * Version: 1.0.8
 * License: GPL2
 *
 */

/**
 * Copyright (c) 2015 | rayhan095@gmail.com | All rights reserved.
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


function easy_countDowner_shortcode($atts,$content){
	ob_start();
	
		$easy_countDowner =shortcode_atts(array(
			'name' => '',
			'animation' => 'smooth',
			'end_date' => '',
			'end_time' => '00:00:00',
			'circle_bg_color' => '#E2E2E2',
			
			//themes
			'theme' => 'default',
			
			
			'day_label' => 'Days',
			'day_color' => '#60686F',
			'show_day' => true,
			
			'hour_label' => 'Hours',
			'hour_color' => '#60686F',
			'show_hour' => true,
			
			'minute_label' => 'Minutes',
			'minute_color' => '#60686F',
			'show_minute' => true,
			
			'second_label' => 'Seconds',
			'second_color' => '#60686F',
			'show_second' => true
		),$atts);
		
	?>
	
	<div id="<?php echo $easy_countDowner['name']; ?>" style="width: 100%;" data-date="<?php echo $easy_countDowner['end_date'] ?> <?php echo $easy_countDowner['end_time'] ?>"></div>
	
	<script type="text/javascript">
		jQuery("#<?php echo $easy_countDowner['name']; ?>").TimeCircles({
			"animation": "<?php echo $easy_countDowner['animation'] ?>",
			<?php if( $easy_countDowner['theme'] == 'default' ){ ?>
				"bg_width": 0.2,
				"fg_width": 0.043333333333333335,
			<?php }elseif( $easy_countDowner['theme'] == 'fat' ){ ?>
				    "bg_width": 1.7,
					"fg_width": 0.09333333333333334,
			<?php }elseif( $easy_countDowner['theme'] == 'thick' ){ ?>
					"bg_width": 1.5,
					"fg_width": 0.04666666666666667,
			<?php } ?>
			"circle_bg_color": "<?php echo $easy_countDowner['circle_bg_color'] ?>",
			"time": {
				"Days": {
					"text": "<?php echo $easy_countDowner['day_label'] ?>",
					"color": "<?php echo $easy_countDowner['day_color'] ?>",
					"show": <?php echo $easy_countDowner['show_day'] ?>
				},
				"Hours": {
					"text": "<?php echo $easy_countDowner['hour_label'] ?>",
					"color": "<?php echo $easy_countDowner['hour_color'] ?>",
					"show": <?php echo $easy_countDowner['show_hour'] ?>
				},
				"Minutes": {
					"text": "<?php echo $easy_countDowner['minute_label'] ?>",
					"color": "<?php echo $easy_countDowner['minute_color'] ?>",
					"show": <?php echo $easy_countDowner['show_minute'] ?>
				},
				"Seconds": {
					"text": "<?php echo $easy_countDowner['second_label'] ?>",
					"color": "<?php echo $easy_countDowner['second_color'] ?>",
					"show": <?php echo $easy_countDowner['show_second'] ?>
				}
			}
		});
	</script>
	
<?php
	return ob_get_clean();
}
add_shortcode('easy_countdowner','easy_countDowner_shortcode');
// Support shortcode in Text Widget
add_filter('widget_text', 'do_shortcode');



// Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'my_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function my_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['my_mce_button'] = plugin_dir_url(__FILE__).'assets/shortcode_generator.js';
	return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
	array_push( $buttons, 'my_mce_button' );
	return $buttons;
}

function easy_countDowner_shortcodes_mce_css() {
	wp_enqueue_style('symple_shortcodes-tc', plugins_url('/assets/shortcode-generate_icon.css', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'easy_countDowner_shortcodes_mce_css' );