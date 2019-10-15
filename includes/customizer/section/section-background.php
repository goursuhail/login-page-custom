<?php




   $wp_customize->add_section('customlogin_section', array(

            'priority' => 5,
        'title' => __('Background', 'custom-login-page'),
       'panel' => 'customlogin_panel',
   ));

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_color]', array(

        'default' => '#808080',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    ));


    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customlogin_background_control', array(

        'label' =>  __('Background', 'custom-login-page'),
        'section' => 'customlogin_section',
        'priority' =>  5,
        'settings' => 'customlogin_option[custom_bg_color]'



    )));

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image]', array(

            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customlogin_background_image_control', array(

        'label' => __('Background Image', 'custom-login_page'),
        'section' => 'customlogin_section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_bg_image]'

    )));

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image_size]', array(
            'default' => 'auto',
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
      'customlogin_option[custom_bg_image_size_control]', array(

          'label' => __('Background Size', 'custom-login-page'),
          'section' => 'customlogin_section',
          'type' => 'select',
          'choices' => array(
              'auto' => __('Original', 'custom-login-page'),
              'contain' => __('Fit to Screen', 'custom-login-page'),
              'cover' => __('Fill Screen', 'custom-login-page'),
              'custom' => __('Custom', 'custom-login-page')
          ),
          'priority' => 15,
          'settings' => 'customlogin_option[custom_bg_image_size]'

        )
    );

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image_size_custom]', array(
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'customlogin_option[custom_bg_image_size_custom_control]', array(
            'label' => __('Custom Size', 'custom-login-page'),
            'section' => 'customlogin_section',
            'priority' => 20,
            'settings' => 'customlogin_option[custom_bg_image_size_custom]'
        )
    );

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image_repeat]', array(

            'default' => 'no-repeat',
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        'customlogin_option[custom_bg_image_repeat_control]', array(

            'label' => __('Background Repeat', 'custom-login-page'),
            'section' => 'customlogin_section',
            'type' => 'select',
            'choices' => array(
              'no-repeat' => __('No Repeat', 'custom-login-page'),
              'repeat' => __('Repeat', 'custom-login-page'),
              'repeat-x' => __('Repeat Horizontally', 'custom-login-page'),
              'repeat-y' => __('Repeat Vertically', 'custom-login-page')
            ),
            'priority' => 25,
            'settings' => 'customlogin_option[custom_bg_image_repeat]'
        )
    );

    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image_position-x]', array(
            'default' => 'left',
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_setting(
        'customlogin_option[custom_bg_image_position-y]', array(
            'default' => 'top',
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Background_Position_Control($wp_customize, 'customlogin_option[custom_bg_image_position]', array(

            'label' => __('Background Position', 'custom-login-page'),
            'section' => 'customlogin_section',
            'priority' => 30,
            'settings' => array(
                'x' => 'customlogin_option[custom_bg_image_position-x]',
                'y' => 'customlogin_option[custom_bg_image_position-y]'
            )
        ))
    );









?>