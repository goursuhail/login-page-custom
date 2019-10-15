<?php

// custom controls for field section

$wp_customize->add_section(
    'custom_field_section', array(

        'priority' => 25,
        'title' => __('Fields', 'custom-login-page'),
        'panel' => 'customlogin_panel'
    )
);

$wp_customize->add_setting(

    'customlogin_option[custom_field_remember_me]', array(

        'default' => false,
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(

    new O2_Customizer_Toggle_Control($wp_customize, 'customlogin_option[custom_field_remember_me_control]', array(

        'label' => __('Disable Remember Me?', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 5,
        'settings' => 'customlogin_option[custom_field_remember_me]'
    ) )
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_width]', array(
        'default' => '100%',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_field_width_control]', array(

        'label' => __('Width', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_field_width]',
        'choices' => array(
          'percent' => true,
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 1000,
            'step' => 1
        )
    ))
);


$wp_customize->add_setting(
    'customlogin_option[custom_field_font_size]', array(
        'default' => '24px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_field_font_size_control]', array(

        'label' => __('Font Size', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 15,
        'settings' => 'customlogin_option[custom_field_font_size]',
        'choices' => array(
            'percent' => false,
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 100,
            'step' => 1
        )
    ))
);


$wp_customize->add_setting(
    'customlogin_option[custom_field_border_width]', array(
        'default' => '1px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_field_border_width_control]', array(

        'label' => __('Border Width', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 20,
        'settings' => 'customlogin_option[custom_field_border_width]',
        'choices' => array(
            'percent' => false,
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 10,
            'step' => 1
        )
    ))
);


$wp_customize->add_setting(
    'customlogin_option[custom_field_border_color]', array(
        'default' => '#DDD',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_field_border_color_control]', array(

        'label' => __('Border Color', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 25,
        'settings' => 'customlogin_option[custom_field_border_color]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_radius]', array(
        'default' => '0px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_field_radius_control]', array(

        'label' => __('Radius', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 30,
        'settings' => 'customlogin_option[custom_field_radius]',
        'choices' => array(
            'percent' => false,
        ),
        'input_attrs' => array(

            'min' => 0,
            'max' => 100,
            'step' => 1
        )
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_box_shadow]', array(
        'default' => false,
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Toggle_Control($wp_customize, 'customlogin_option[custom_field_box_shadow_control]', array(

        'label' => __('Disable Box Shadow?', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 35,
        'settings' => 'customlogin_option[custom_field_box_shadow]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_margin]', array(
        'default' => '2px 6px 16px 0px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new LoginCust_Padding_Control($wp_customize, 'customlogin_option[custom_field_margin_control]', array(

        'label' => __('Margin', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 40,
        'settings' => 'customlogin_option[custom_field_margin]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_padding]', array(
        'default' => '3px 3px 3px 3px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new LoginCust_Padding_Control($wp_customize, 'customlogin_option[custom_field_padding_control]', array(

        'label' => __('Padding', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 45,
        'settings' => 'customlogin_option[custom_field_padding]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_bg_color]', array(
        'default' => '#FFF',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_field_bg_color_control]', array(

        'label' => __('Background Color', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 50,
        'settings' => 'customlogin_option[custom_field_bg_color]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_color]', array(
        'default' => '#333',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_field_color_control]', array(

        'label' => __('Text Color', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 55,
        'settings' => 'customlogin_option[custom_field_color]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_label_color]', array(
        'default' => '#777',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'customlogin_option[custom_field_label_color_control]', array(

        'label' => __('Label Color', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 60,
        'settings' => 'customlogin_option[custom_field_label_color]',
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_field_label_font_size]', array(
        'default' => '14px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control($wp_customize, 'customlogin_option[custom_field_label_font_size_control]', array(

        'label' => __('Label Font Size', 'custom-login-page'),
        'section' => 'custom_field_section',
        'priority' => 65,
        'settings' => 'customlogin_option[custom_field_label_font_size]',
        'choices' => array(
            'percent' => false,
        ),
        'input_attrs' => array(
            'min'    => 0,
            'max'    => 100,
            'step'   => 1,
        ),
    ))
);

?>