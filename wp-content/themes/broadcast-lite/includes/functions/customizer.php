<?php

function sanitize_checkbox( $input ) {
	return ( $input === true ) ? true : false;
}

function broadcast_customize_register( $wp_customize ) {
    
    // PANEL - bc_image_panel
    $wp_customize->add_panel( 'bc_image_panel', array(
      'priority'       => 31,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'    => __( 'Image Settings', 'broadcast-lite' ),
    ) ); 
    
    // SECTION - bc_image_settings
    $wp_customize->add_section( 'bc_featured_image_settings' , array(
        'title'    => __( 'Featured Image', 'broadcast-lite' ),
        'priority' => 10,
        'panel'  => 'bc_image_panel',
    ) );    
    
    // SECTION - bc_image_settings
    $wp_customize->add_section( 'bc_logo_image_settings' , array(
        'title'    => __( 'Site Logo', 'broadcast-lite' ),
        'priority' => 20,
        'panel'  => 'bc_image_panel',
    ) ); 
    
    // SECTION - bc_colour_settings
    $wp_customize->add_section( 'bc_colour_settings' , array(
        'title'    => __( 'Colour Settings', 'broadcast-lite' ),
        'priority' => 31.1
    ) ); 
    
    // SECTION - bc_schedule_settings
    $wp_customize->add_section( 'bc_schedule_settings' , array(
        'title'    => __( 'Schedule Settings', 'broadcast-lite' ),
        'priority' => 32
    ) ); 
    
    // SECTION - bc_affiliate_settings1
    $wp_customize->add_section( 'bc_affiliate_settings1' , array(
        'title'    => __( 'Affiliate Settings 1', 'broadcast-lite' ),
        'priority' => 10,
        'panel'  => 'bc_affiliate_panel',
    ) );  
    // SECTION - bc_affiliate_settings2
    $wp_customize->add_section( 'bc_affiliate_settings2' , array(
        'title'    => __( 'Affiliate Settings 2', 'broadcast-lite' ),
        'priority' => 20,
        'panel'  => 'bc_affiliate_panel',
    ) );  
    // SECTION - bc_affiliate_settings3
    $wp_customize->add_section( 'bc_affiliate_settings3' , array(
        'title'    => __( 'Affiliate Settings 3', 'broadcast-lite' ),
        'priority' => 30,
        'panel'  => 'bc_affiliate_panel',
    ) );      
    // PANEL - bc_affiliate_panel
    $wp_customize->add_panel( 'bc_affiliate_panel', array(
      'priority'       => 33,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __('Affiliate Links', 'broadcast-lite'),
      'description'    => __('Enter an image and link to your first affiliate here.', 'broadcast-lite'),
    ) );        
    // SECTION - bc_social_settings
    $wp_customize->add_section( 'bc_social_settings', array(
      'title'          => __('Social Links', 'broadcast-lite'),
      'priority'       => 34,
    ) );     

    // SETTING - bc_featured_image
    $wp_customize->add_setting( 'bc_featured_image' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );    
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bc_featured_image',
            array(
                'label'    => __( 'Featured Image', 'broadcast-lite' ),
                'description' => __( 'This image should be large, at least 1920 x 1080 pixels.', 'broadcast-lite'),
                'section'  => 'bc_featured_image_settings',
                'settings' => 'bc_featured_image',
        )
    ) );  
    // END SETTING
    // SETTING - bc_logo
    $wp_customize->add_setting( 'bc_logo' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );    
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bc_logo',
            array(
                'label'    => __( 'Logo', 'broadcast-lite' ),
                'description' => __( 'This image should be square, at least 300 x 300 pixels.', 'broadcast-lite'),
                'section'  => 'bc_logo_image_settings',
                'settings' => 'bc_logo',
        )
    ) );  
    // END SETTING   
    // SETTING - bc_logo_check
    $wp_customize->add_setting( 'bc_logo_check' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_checkbox',
    ) );
    
    $wp_customize->add_control( 'bc_logo_check', array(
                'label'    => __( 'Add a logo border', 'broadcast-lite' ),
                'description' => __( 'Check this box if you would like to add a coloured border to your logo.', 'broadcast-lite'),
                'section'  => 'bc_logo_image_settings',
                'settings' => 'bc_logo_check',
                'type'        => 'checkbox',
        )
    ); 
    // END SETTING
    // SETTING - bc_colour_theme
    $wp_customize->add_setting( 'bc_colour_theme' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'dark'
    ) );
    
    $wp_customize->add_control( 'bc_colour_theme', array(
        'label'    => __( 'Colour Scheme', 'broadcast-lite' ),
        'description' => __( 'Choose either the light or dark colour scheme.', 'broadcast-lite'),
		'type'     => 'radio',
		'choices'  => array(
			'dark'  => 'Dark',
			'light' => 'Light',
		),
        'section'  => 'bc_colour_settings',
        'settings' => 'bc_colour_theme',
    ) );
    // END SETTING  
    
//    function themeslug_sanitize_select( $input, $setting ) {
//
//  // Ensure input is a slug.
//  $input = sanitize_key( $input );
//
//  // Get list of choices from the control associated with the setting.
//  $choices = $setting->manager->get_control( $setting->id )->choices;
//
//  // If the input is a valid key, return it; otherwise, return the default.
//  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
//}

    // SETTING - bc_schedule_check
    $wp_customize->add_setting( 'bc_schedule_check' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_checkbox',
    ) );
    
    $wp_customize->add_control( 'bc_schedule_check', array(
                'label'    => __( 'Activate Schedule', 'broadcast-lite' ),
                'description' => __( 'Check this box if you would like to activate the countdown to your next stream.', 'broadcast-lite'),
                'section'  => 'bc_schedule_settings',
                'settings' => 'bc_schedule_check',
                'type'        => 'checkbox',
        )
    ); 
    // END SETTING
    // SETTING - bc_schedule
    $wp_customize->add_setting( 'bc_schedule' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control(
        new WP_Customize_Date_Time_Control(
            $wp_customize,
            'bc_schedule',
            array(
                'label'    => __( 'Next Stream Date', 'broadcast-lite' ),
                'description' => __( 'Add your next stream date & time below to begin the countdown timer. As soon as you go live, the timer will  disappear.', 'broadcast-lite'),
                'section'  => 'bc_schedule_settings',
                'settings' => 'bc_schedule',
        )
    ) ); 
    // END SETTING
    // SETTING - bc_affiliate1_image
    $wp_customize->add_setting( 'bc_affiliate1_image' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bc_affiliate1_image',
            array(
                'label'    => __( 'Affiliate 1 Image', 'broadcast-lite' ),
                'description' => __( 'This image can be square or rectangular, something around 200 x 200 pixels works well. ', 'broadcast-lite'),
                'section'  => 'bc_affiliate_settings1',
                'settings' => 'bc_affiliate1_image',
        )
    ) ); 
    // END SETTING
    // SETTING - bc_affiliate1_link
    $wp_customize->add_setting( 'bc_affiliate1_link' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_affiliate1_link', array(
        'label'    => __( 'Affiliate 1 Link', 'broadcast-lite' ),
        'description' => __( 'This URL should start with http:// or https:// ', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_affiliate_settings1',
        'settings' => 'bc_affiliate1_link',
    ) );
    // END SETTING    
    // SETTING - bc_affiliate2_image
    $wp_customize->add_setting( 'bc_affiliate2_image' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bc_affiliate2_image',
            array(
                'label'    => __( 'Affiliate 2 Image', 'broadcast-lite' ),
                'description' => __( 'This image can be square or rectangular, something around 200 x 200 pixels works well. ', 'broadcast-lite'),
                'section'  => 'bc_affiliate_settings2',
                'settings' => 'bc_affiliate2_image',
        )
    ) ); 
    // END SETTING
    // SETTING - bc_affiliate2_link
    $wp_customize->add_setting( 'bc_affiliate2_link' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_affiliate2_link', array(
        'label'    => __( 'Affiliate 2 Link', 'broadcast-lite' ),
        'description' => __( 'This URL should start with http:// or https:// ', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_affiliate_settings2',
        'settings' => 'bc_affiliate2_link',
    ) );
    // END SETTING    
    // SETTING - bc_affiliate2_image
    $wp_customize->add_setting( 'bc_affiliate3_image' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bc_affiliate3_image',
            array(
                'label'    => __( 'Affiliate 3 Image', 'broadcast-lite' ),
                'description' => __( 'This image can be square or rectangular, something around 200 x 200 pixels works well. ', 'broadcast-lite'),
                'section'  => 'bc_affiliate_settings3',
                'settings' => 'bc_affiliate3_image',
        )
    ) ); 
    // END SETTING
    // SETTING - bc_affiliate2_link
    $wp_customize->add_setting( 'bc_affiliate3_link' , array(
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_affiliate3_link', array(
        'label'    => __( 'Affiliate 3 Link', 'broadcast-lite' ),
        'description' => __( 'This URL should start with http:// or https:// ', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_affiliate_settings3',
        'settings' => 'bc_affiliate3_link',
    ) );
    // END SETTING
    // SETTING - bc_twitter
    $wp_customize->add_setting( 'bc_twitter' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_twitter', array(
        'label'    => __( 'Twitter Link', 'broadcast-lite' ),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_twitter',
    ) );
    // END SETTING
    // SETTING - bc_facebook
    $wp_customize->add_setting( 'bc_facebook' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_facebook', array(
        'label'    => __( 'Facebook Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Facebook.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_facebook',
    ) );
    // END SETTING
    // SETTING - bc_instagram
    $wp_customize->add_setting( 'bc_instagram' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_instagram', array(
        'label'    => __( 'Instagram Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Instagram.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_instagram',
    ) );
    // END SETTING
    // SETTING - bc_youtube
    $wp_customize->add_setting( 'bc_youtube' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_youtube', array(
        'label'    => __( 'YouTube Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your YouTube.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_youtube',
    ) );
    // END SETTING
    // SETTING - bc_google
    $wp_customize->add_setting( 'bc_google' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_google', array(
        'label'    => __( 'Google+ Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Google+.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_google',
    ) );
    // END SETTING
    // SETTING - bc_twitch
    $wp_customize->add_setting( 'bc_twitch' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_twitch', array(
        'label'    => __( 'Twitch Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Twitch.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_twitch',
    ) );
    // END SETTING
    // SETTING - bc_discord
    $wp_customize->add_setting( 'bc_discord' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_discord', array(
        'label'    => __( 'Discord Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Discord.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_discord',
    ) );
    // END SETTING    
    // SETTING - bc_mixer
    $wp_customize->add_setting( 'bc_mixer' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_mixer', array(
        'label'    => __( 'Mixer Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Mixer.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_mixer',
    ) );
    // END SETTING  
    // SETTING - bc_linkedin
    $wp_customize->add_setting( 'bc_linkedin' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_linkedin', array(
        'label'    => __( 'LinkedIn Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your LinkedIn.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_linkedin',
    ) );
    // END SETTING      
    // SETTING - bc_pinterest
    $wp_customize->add_setting( 'bc_pinterest' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_pinterest', array(
        'label'    => __( 'Pinterest Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Pinterest.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_pinterest',
    ) );
    // END SETTING      
    // SETTING - bc_tumblr
    $wp_customize->add_setting( 'bc_tumblr' , array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'bc_tumblr', array(
        'label'    => __( 'Tumblr Link', 'broadcast-lite' ),
        'description' => __( 'Fill this field to add a link to your Tumblr.', 'broadcast-lite'),
        'type'     => 'text',
        'section'  => 'bc_social_settings',
        'settings' => 'bc_tumblr',
    ) );
    // END SETTING 
}


add_action( 'customize_register', 'broadcast_customize_register' );