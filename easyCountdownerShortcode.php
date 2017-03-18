<?php

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

		$easy_countDowner['name'] = 'EasyCountDowner-id-' . uniqid() . time() . rand() . (isset($easy_countDowner['name']) ? $easy_countDowner['name']+rand() : '');
		
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
					"show": <?php echo ($easy_countDowner['show_day'] == 1) ? "true" : "false"; ?>
				},
				"Hours": {
					"text": "<?php echo $easy_countDowner['hour_label'] ?>",
					"color": "<?php echo $easy_countDowner['hour_color'] ?>",
					"show": <?php echo ($easy_countDowner['show_hour'] == 1) ? "true" : "false"; ?>
				},
				"Minutes": {
					"text": "<?php echo $easy_countDowner['minute_label'] ?>",
					"color": "<?php echo $easy_countDowner['minute_color'] ?>",
					"show": <?php echo ($easy_countDowner['show_minute'] == 1) ? "true" : "false"; ?>
				},
				"Seconds": {
					"text": "<?php echo $easy_countDowner['second_label'] ?>",
					"color": "<?php echo $easy_countDowner['second_color'] ?>",
					"show": <?php echo ($easy_countDowner['show_second'] == 1) ? "true" : "false"; ?>
				}
			}
		});
	</script>
	
<?php
	return ob_get_clean();
}
add_shortcode('easy_countdowner','easy_countDowner_shortcode');