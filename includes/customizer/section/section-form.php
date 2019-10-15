<?php

// customizer controls for form section

$wp_customize->add_section(
    'custom_form_section', array(
        'title' => __('Form', 'custom-login-page'),
        'priority' => 15,
        'panel' => 'customlogin_panel'
    )
);


$wp_customize->add_setting(
    'customlogin_option[custom_form_bg_image]', array(

        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(

    new WP_Customize_Image_Control($wp_customize, 'customlogin_option[custom_form_bg_image_control]', array(

        'label' => __('Background Image', 'custom-login-option'),
        'section' => 'custom_form_section',
        'priority' => 5,
        'settings' => 'customlogin_option[custom_form_bg_image]'
    ))

);


$wp_customize->add_setting(
    'customlogin_option[custom_form_bg_color]', array(

        'default' => '#FFFFFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new LoginCust_Customize_Alpha_Color_Control($wp_customize, 'customlogin_option[custom_form_bg_color_control]', array(

        'label' => __('Background Color', 'custom-login-page'),
        'section' => 'custom_form_section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_form_bg_color]'
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_form_width]',
    array(
        'default' => '320px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control(
        $wp_customize,
        'customlogin_option[custom_form_width_control]',
        array(
            'label' => __( 'Width', 'custom-login-page' ),
            'section' => 'custom_form_section',
            'priority' => 15,
            'settings' => 'customlogin_option[custom_form_width]',
            'choices' => array(
                'percent' => true,
            ),
            'input_attrs' => array(
                'min'    => 0,
                'max'    => 1000,
                'step'   => 1,
            ),
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_form_height]', array(

        'default' => '194px',
        'type'=> 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
     )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_form_height_control]', array(

        'label' => __('Height', 'custom-login-page'),
        'section' => 'custom_form_section',
        'priority' => 20,
        'settings' => 'customlogin_option[custom_form_height]',
        'choices' => array(
            'percent' => true,
        ),
        'input_attrs' => array(
            'min' => 0,
            'max' => 1000,
            'step' => 1,
        ),

    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_form_padding]', array(

        'default' => '26px 24px 46px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(

    new LoginCust_Padding_Control($wp_customize, 'customlogin_option[custom_form_padding_control]', array(

        'label' => __('Padding', 'custom-login-page'),
        'section' => 'custom_form_section',
        'priority' => 25,
        'settings' => 'customlogin_option[custom_form_padding]',

    ) )

);

$wp_customize->add_setting(
    'customlogin_option[custom_form_radius]', array(

        'default' => '0px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(

    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_form_radius]', array(

        'label' => __('Radius', 'custom-login-page'),
        'section' => 'custom_form_section',
        'priority' => 30,
        'settings' => 'customlogin_option[custom_form_radius]',
        'choices' => array(
            'percent' => true,
        ),
        'input_attrs' => array(
            'min' => 0,
            'max' => 500,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_form_shadow_spread]',
    array(
        'default' => '3px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control(
        $wp_customize,
        'customlogin_option[custom_form_shadow_spread_control]',
        array(
            'label' => __( 'Shadow Spread', 'custom-login-page' ),
            'section' => 'custom_form_section',
            'priority' => 35,
            'settings' => 'customlogin_option[custom_form_shadow_spread]',
            'choices' => array(
                'percent' => false,
            ),
            'input_attrs' => array(
                'min'    => 0,
                'max'    => 50,
                'step'   => 1,
            ),
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_form_shadow]',
    array(
        'default' => 'rgba(0,0,0, 0.13)',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new LoginCust_Customize_Alpha_Color_Control(
        $wp_customize,
        'customlogin_option[custom_form_shadow_control]',
        array(
            'label' => __( 'Box Shadow', 'custom-login-page' ),
            'section' => 'custom_form_section',
            'priority' => 40,
            'settings' => 'customlogin_option[custom_form_shadow]',
        )
    )
);
?>