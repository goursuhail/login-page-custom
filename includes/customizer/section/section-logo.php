<?php

$wp_customize->add_section(
    'customlogo_section', array(

        'title' => __('Logo', 'custom-login-page'),
        'priority' => 10,
        'panel' => 'customlogin_panel'
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo_show]', array(

        'default' => 'false',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Toggle_Control(
        $wp_customize,
        'customlogin_option[custom_logo_show_control]',
        array(
            'label' => __( 'Disable Logo?', 'custom-login-page' ),
            'section' => 'customlogo_section',
            'priority' => 5,
            'settings' => 'customlogin_option[custom_logo_show]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo]', array(
       'type' => 'option',
       'capability' => 'edit_theme_options',
       'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
   new WP_Customize_Image_Control($wp_customize,  'customlogin_option[custom_logo_control]', array(

       'label' => __('Logo', 'custom-login-page'),
       'section' => 'customlogo_section',
       'priority' => 10,
       'settings' => 'customlogin_option[custom_logo]'
   ) )
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo_width]', array(
        'default' => '84px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_logo_width_control]', array(

        'label' => __('Logo Width', 'custom-login-page'),
        'section' => 'customlogo_section',
        'priority' => 15,
        'settings' => 'customlogin_option[custom_logo_width]',
        'choices' => array(
            'percent' => true
            ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 1000,
            'step' => 1
        ),


    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo_height]', array(
        'default' => '84px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_logo_height_control]', array(

        'label' => __('Logo Height', 'custom-login-page'),
        'section' => 'customlogo_section',
        'priority' => 20,
        'settings' => 'customlogin_option[custom_logo_height]',
        'choices' => array(
          'percent' => true
        ),
        'input_attrs' => array(
            'min' => 0,
            'max' => 1000,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo_bottom_padding]', array(
        'default' => '5px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_logo_bottom_padding_control]', array(

        'label' => __('Padding Bottom', 'custom-login-page'),
        'section' => 'customlogo_section',
        'priority' => 25,
        'settings' => 'customlogin_option[custom_logo_bottom_padding]',
        'choices' => array(
            'percent' => true
        ),
        'input_attrs' => array(
            'min' => 0,
            'max' => 1000,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_logo_url]', array(

        'default' => 'https://wordpress.org',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    'customlogin_option[custom_logo_url_control]', array(

        'label' => __('Logo URL', 'custom-logo-page'),
        'description' => __('The page where your logo will take you.', 'custom-logo-page'),
        'section' => 'customlogo_section',
        'priority' => 30,
        'settings' => 'customlogin_option[custom_logo_url]'
    )
)



?>