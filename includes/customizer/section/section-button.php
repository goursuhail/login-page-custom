<?php

// customizer control for button section


$wp_customize->add_section(

    'custom_button_section', array(

        'priority' => 30,
        'title' => __('Button', 'custom-login-page'),
        'panel' => 'customlogin_panel'
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_bg]', array(
        'default' => '#2EA2CC',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_button_bg_control]', array(

        'label' => __('Background', 'custom-login-page'),
        'section' => 'custom_button_section',
        'priority' => 5,
        'settings' => 'customlogin_option[custom_button_bg]'
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_bg_hover]', array(
        'default' => '#1E8CBE',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_button_bg_hover_control]', array(

        'label' => __('Background (Hover)', 'custom-login-page'),
        'section' => 'custom_button_section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_button_bg_hover]'
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_height_width]', array(

        'default' => 'auto',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    'customlogin_option[custom_button_height_width_control]', array(

        'label' => __('Button Size', 'custom-login-page'),
        'section' => 'custom_button_section',
        'type' => 'select',
        'choices' => array(
          'auto' => __('Auto', 'custom-login-page'),
          'custom' => __('Custom', 'custom-login-page')
        ),
        'priority' => 15,
        'settings' => 'customlogin_option[custom_button_height_width]'
    )
);


$wp_customize->add_setting(
    'customlogin_option[custom_button_width_size]', array(

        'default' => '63px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize,'customlogin_option[custom_button_width_size_control]', array(

        'label' => __('Width Size', 'custom-login-page'),
        'section' => 'custom_button_section',
        'priority' => 20,
        'settings' => 'customlogin_option[custom_button_width_size]',
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
    'customlogin_option[custom_button_height_size]', array(

        'default' => '32px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize,'customlogin_option[custom_button_height_size_control]', array(

        'label' => __('Height Size', 'custom-login-page'),
        'section' => 'custom_button_section',
        'priority' => 25,
        'settings' => 'customlogin_option[custom_button_height_size]',
        'choices' => array(
            'percent' => false
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 1000,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_font_size]', array(

        'default' => '13px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize,'customlogin_option[custom_button_font_size_control]', array(

        'label' => __('Font Size', 'custom-login-page'),
        'section' => 'custom_button_section',
        'priority' => 30,
        'settings' => 'customlogin_option[custom_button_font_size]',
        'choices' => array(
            'percent' => false
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 100,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_text_color]',
    array(
        'default' => '#FFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_button_text_color_control]',
        array(
            'label' => __( 'Text Color', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 35,
            'settings' => 'customlogin_option[custom_button_text_color]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_padding]',
    array(
        'default' => '0 12px 2px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new LoginCust_Padding_Control(
        $wp_customize,
        'customlogin_option[custom_button_padding_control]',
        array(
            'label' => __( 'Padding', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 40,
            'settings' => 'customlogin_option[custom_button_padding]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_border_width]',
    array(
        'default' => '1px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control(
        $wp_customize,
        'customlogin_option[custom_button_border_width_control]',
        array(
            'label' => __( 'Border Width', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 45,
            'settings' => 'customlogin_option[custom_button_border_width]',
            'choices' => array(
                'percent' => false,
            ),
            'input_attrs' => array(
                'min'    => 0,
                'max'    => 20,
                'step'   => 1,
            ),
        )
    )
);


$wp_customize->add_setting(
    'customlogin_option[custom_button_border_color]',
    array(
        'default' => '#0074A2',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_button_border_color_control]',
        array(
            'label' => __( 'Border', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 55,
            'settings' => 'customlogin_option[custom_button_border_color]',
        )
    )
);


$wp_customize->add_setting(
    'customlogin_option[custom_button_border_color_hover]',
    array(
        'default' => '#0074A2',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_button_border_color_hover]',
        array(
            'label' => __( 'Border (Hover)', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 60,
            'settings' => 'customlogin_option[custom_button_border_color_hover]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_shadow_spread]',
    array(
        'default' => '0px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control(
        $wp_customize,
        'customlogin_option[custom_button_shadow_spread]',
        array(
            'label' => __( 'Shadow Spread', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 65,
            'settings' => 'customlogin_option[custom_button_shadow_spread]',
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
    'customlogin_option[custom_button_shadow]',
    array(
        'default' => '#78C8E6',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new LoginCust_Customize_Alpha_Color_Control(
        $wp_customize,
        'customlogin_option[custom_button_shadow]',
        array(
            'label' => __( 'Box Shadow', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 70,
            'settings' => 'customlogin_option[custom_button_shadow]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_button_text_shadow]',
    array(
        'default' => '#006799',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_button_text_shadow]',
        array(
            'label' => __( 'Text Shadow', 'custom-login-page' ),
            'section' => 'custom_button_section',
            'priority' => 75,
            'settings' => 'customlogin_option[custom_button_text_shadow]',
        )
    )
);
?>