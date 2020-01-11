<?php

/**
 * Add our Customizer content
 */
function perfect_customize_register( $wp_customize ) {

   // Add all your Customizer content (i.e. Panels, Sections, Settings & Controls) here...

    
    /**
     * Add our Header & Navigation Panel
     */
        $wp_customize->add_panel( 'social_media_panel',
            array(
                'title' => __( 'Social Media Section', 'Perfect' ),
                'description' => esc_html__( 'Adjust your Social Media Links', 'Perfect' ), // Include html tags such as 

                'priority' => 160, // Not typically needed. Default is 160
                'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
                'theme_supports' => '', // Rarely needed
                'active_callback' => '', // Rarely needed
            )
        );

        /**
            * Add our Section
         */
        $wp_customize->add_section( 'twitter_link_section',
            array(
            'title' => __( 'Twitter', 'Perfect' ),
            'description' => esc_html__( 'Edit And Place Your Link For Twitter.', 'Perfect' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'twitter_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'twitter_page_link',
            array(
                'label' => __( 'Twitter URL', 'Perfect' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Twitter Account' , 'Perfect'),
                'section' => 'twitter_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'Perfect' ),
                ),
            )
        );


        /**
            * Add our Section
         */
        $wp_customize->add_section( 'facebook_link_section',
            array(
            'title' => __( 'Facebook', 'Perfect' ),
            'description' => esc_html__( 'Edit And Place Your Link For Facebook.', 'Perfect' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'facebook_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'facebook_page_link',
            array(
                'label' => __( 'Facebook URL', 'Perfect' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Facebook Account', 'Perfect' ),
                'section' => 'facebook_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...' , 'Perfect'),
                ),
            )
        );

         /**
            * Add our Section
         */
        $wp_customize->add_section( 'instagram_link_section',
            array(
            'title' => __( 'Instagram', 'Perfect' ),
            'description' => esc_html__( 'Edit And Place Your Link For Instagram.', 'Perfect' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'instagram_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'instagram_page_link',
            array(
                'label' => __( 'Instagram URL', 'Perfect' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your Instagram Account', 'Perfect' ),
                'section' => 'instagram_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'Perfect' ),
                ),
            )
        );


        /**
            * Add our Section
         */
        $wp_customize->add_section( 'youtube_link_section',
            array(
            'title' => __( 'YouTube', 'Perfect' ),
            'description' => esc_html__( 'Edit And Place Your Link For YouTube.', 'Perfect' ),
            'panel' => 'social_media_panel', // Only needed if adding your Section to a Panel
            'priority' => 160, // Not typically needed. Default is 160
            'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
            'theme_supports' => '', // Rarely needed
            'active_callback' => '', // Rarely needed
            'description_hidden' => 'false', // Rarely needed. Default is False
            )
        );

        $wp_customize->add_setting( 'youtube_page_link',
            array(
                'default' => '', // Optional.
                'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
                'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'theme_supports' => '', // Optional. Rarely needed
                'validate_callback' => '', // Optional. The name of the function that will be called to validate Customizer settings
                'sanitize_callback' => 'esc_url_raw', // Optional. The name of the function that will be called to sanitize the input data before saving it to the database
                'sanitize_js_callback' => '', // Optional. The name of the function that will be called to sanitize the data before outputting to javascript code. Basically to_json.
                'dirty' => false, // Optional. Rarely needed. Whether or not the setting is initially dirty when created. Default: False
            )
        );

        $wp_customize->add_control( 'youtube_page_link',
            array(
                'label' => __( 'YouTube URL', 'Perfect' ),
                'description' => esc_html__( 'Copy And Paste The URL associated with your YouTube Account', 'Perfect' ),
                'section' => 'youtube_link_section',
                'priority' => 10, // Optional. Order priority to load the control. Default: 10
                'type' => 'url', // Can be either text, email, url, number, hidden, or date
                'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
                'input_attrs' => array( // Optional.
                    'style' => 'border: 1px solid rebeccapurple',
                    'placeholder' => __( 'Enter URL ...', 'Perfect' ),
                ),
            )
        );



};
add_action( 'customize_register', 'perfect_customize_register' );





