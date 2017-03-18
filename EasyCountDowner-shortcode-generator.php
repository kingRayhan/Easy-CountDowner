<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/*
[easy_countdowner 
  -name=""
  -animation="smooth/"
  end_time=""
  end_date=""
  -theme=""

  day_label="Days"
  day_color="#60686F"
  show_day="true"

  hour_label="Hours"
  hour_color="#60686F"
  show_hour="true"

  minute_label="Minutes"
  minute_color="#60686F"
  show_minute="true"
  
  second_label="Seconds"
  second_color="#60686F"
  show_second="true"
]
 */
$shortcodes_settings    = array(
  'id'           => 'easycountdowner_shortcode_wrapper',
  'button_title' => 'Easy CountDowner',
  'select_title' => 'Select a shortcode-2',
  'insert_title' => 'Generate Shortcode',
);


// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$shortcode_options[]     = array(
  'title'      => 'Easy CountDowner Shortcode Generator',
  'shortcodes' => array(

    array(
      'name'   => 'easy_countdowner',
      'title'  => 'Basic Shortcode 2',
      'fields' => array(
//********************************************************

        array(
          'id'    => 'animation',
          'type'  => 'select',
          'title' => 'Animation',
          'desc'  => 'Select CountDowner Animation Effect',
          'options'        => array(
                'smooth'   => 'Smooth',
                'ticks'    => 'Ticks',
          ),
          'default' => 'smooth',
        ),
        array(
          'id'    => 'theme',
          'type'  => 'select',
          'title' => 'Theme',
          'desc'  => 'Select CountDowner Theme',
          'options'        => array(
                'default'   => 'Super Slim',
                'thick'     => 'Thick',
                'fat'       => 'Fat',
          ),
          'default' => 'default',
        ),


        array(
          'type'    => 'subheading',
          'content' => 'Timing',
        ),
        array(
          'id'      => 'end_date',
          'type'    => 'date',
          'title'   => 'Date Advanced',
          'format' => 'yy-m-d',
          'options' => array(
            'changeMonth'     => true,
            'changeYear'      => true,
            'showWeek'        => true,
            'showButtonPanel' => true,
            'weekHeader'      => 'Week',
            'monthNamesShort' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
            'dayNamesMin'     => array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' )
          )
        ),
        array(
          'id'     => 'end_time',
          'type'   => 'text',
          'title'  => 'CountDowner End Time',
          'default' => '00:00:00',
          'desc' => '<b>Format:</b> HH:MM:SS'
          
        ),



        array(
          'type'    => 'subheading',
          'content' => 'Labels',
        ),
        array(
          'id'     => 'hour_label',
          'type'   => 'text',
          'title'  => 'Label for Hours',
          'default' => 'Hours'
        ),
        array(
          'id'     => 'minute_label',
          'type'   => 'text',
          'title'  => 'Label for Minutes',
          'default' => 'Minutes'
        ),
        array(
          'id'     => 'second_label',
          'type'   => 'text',
          'title'  => 'Label for Seconds',
          'default' => 'Seconds'
        ),
        array(
          'id'     => 'second_label',
          'type'   => 'text',
          'title'  => 'Label for Seconds',
          'default' => 'Seconds'
        ),




        array(
          'type'    => 'subheading',
          'content' => 'Colors',
        ),
        array(
          'id'     => 'circle_bg_color',
          'type'   => 'color_picker',
          'title'  => 'Circle background Color',
          'default' => '#E2E2E2',
        ),
        array(
          'id'     => 'day_color',
          'type'   => 'color_picker',
          'title'  => 'Days Color',
          'default' => '#60686F',
        ),
        array(
          'id'     => 'hour_color',
          'type'   => 'color_picker',
          'title'  => 'Hours Color',
          'default' => '#60686F',
        ),
        array(
          'id'     => 'minute_color',
          'type'   => 'color_picker',
          'title'  => 'Minutes Color',
          'default' => '#60686F',
        ),
        array(
          'id'     => 'second_color',
          'type'   => 'color_picker',
          'title'  => 'Seconds Color',
          'default' => '#60686F',
        ),


        array(
          'type'    => 'subheading',
          'content' => 'Enable/Disable',
        ),
        array(
          'id'      => 'show_day',
          'type'    => 'switcher',
          'title'   => 'Show Days',
          'default' => true
        ),
        array(
          'id'      => 'show_hour',
          'type'    => 'switcher',
          'title'   => 'Show Days',
          'default' => true
        ),
        array(
          'id'      => 'show_minute',
          'type'    => 'switcher',
          'title'   => 'Show Days',
          'default' => true
        ),
        array(
          'id'      => 'show_second',
          'type'    => 'switcher',
          'title'   => 'Show Days',
          'default' => true
        ),



//********************************************************
      ),
    ),

  ),
);
CSF_Shortcode::instance( $shortcodes_settings, $shortcode_options );
