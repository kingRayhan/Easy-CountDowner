(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'CountDowner',
			icon: 'king_countdowner_icon',
			onclick: function() {
					editor.windowManager.open( {
						title: 'Easy CountDowner Options',
						body: [
							{
								type: 'textbox',
								name: 'easy_countdowner_name',
								label: 'CountDowner End Date',
								placeholder: 'CountDowner End Date',
								value: 'demo_countdowner'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_end_date',
								label: 'CountDowner End Date',
								placeholder: 'CountDowner End Date',
								value: '2018-12-28'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_end_time',
								label: 'CountDowner End Time',
								placeholder: 'CountDowner End Date',
								value: '00:00:00'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_label_for_day',
								label: 'Label for Days',
								value: 'Days'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_label_for_hour',
								label: 'Label for Hours',
								value: 'Hours'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_label_for_minute',
								label: 'Label for Minutes',
								value: 'Minutes'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_label_for_second',
								label: 'Label for Seconds',
								value: 'Seconds'
							},
							{
								type: 'listbox',
								name: 'easy_countdowner_animation',
								label: 'Select CountDowner Animation Effect',
								'values': [
									{text: 'Smooth', value: 'smooth'},
									{text: 'Ticks', value: 'ticks'}
								]
							},
							{
								type: 'listbox',
								name: 'easy_countdowner_theme',
								label: 'Select CountDowner Theme',
								'values': [
									{text: 'Super Slim', value: 'default'},
									{text: 'Thick', value: 'thick'},
									{text: 'Fat', value: 'fat'}
								]
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_circle_color',
								label: 'Countdowner Circle Color',
								value: '#E2E2E2'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_day_color',
								label: 'Days Circle Color',
								value: '#60686F'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_hour_color',
								label: 'Hours Circle Color',
								value: '#60686F'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_minute_color',
								label: 'Minutes Circle Color',
								value: '#60686F'
							},
							{
								type: 'textbox',
								name: 'easy_countdowner_second_color',
								label: 'Seconds Circle Color',
								value: '#60686F'
							}
						],
						onsubmit: function( e ) {
							editor.insertContent( '[easy_countdowner name="'+ e.data.easy_countdowner_name +'" theme="'+ e.data.easy_countdowner_theme +'" animation="'+ e.data.easy_countdowner_animation +'" end_date="'+ e.data.easy_countdowner_end_date +'" end_time="'+ e.data.easy_countdowner_end_time +'" day_label="'+ e.data.easy_countdowner_label_for_day +'" hour_label="'+ e.data.easy_countdowner_label_for_hour +'" minute_label="'+ e.data.easy_countdowner_label_for_minute +'" second_label="'+ e.data.easy_countdowner_label_for_second +'" day_color="'+ e.data.easy_countdowner_day_color +'" hour_color="'+ e.data.easy_countdowner_hour_color +'" minute_color="'+ e.data.easy_countdowner_minute_color +'" second_color="'+ e.data.easy_countdowner_second_color +'" circle_bg_color="'+ e.data.easy_countdowner_circle_color +'"]');
						}
					});
				},
			
		});
	});
})();