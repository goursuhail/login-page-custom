<?php

// customizer control for other section

$wp_customize->add_section(
    'custom_other_section', array(

        'title' => __('Other', 'custom-login-page'),
        'priority' => 35,
        'panel' => 'customlogin_panel'
    )
);

if ( get_option( 'users_can_register' ) ) {

    $wp_customize->add_setting(
        'customlogin_option[custom_other_register_link]', array(

            'default' => false,
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage'
        )
    );

    $wp_customize->add_control(
        new O2_Customizer_Toggle_Control($wp_customize, 'customlogin_option[custom_other_register_link_control]', array(

            'label' => __('Disable Register Link', 'custom-login-page'),
            'section' => 'custom_other_section',
            'priority' => 5,
            'settings' => 'customlogin_option[custom_other_register_link]'
        ))
    );

}

$wp_customize->add_setting(
    'customlogin_option[custom_other_lost_password]', array(

        'default' => false,
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Toggle_Control($wp_customize, 'customlogin_option[custom_other_lost_password]', array(

        'label' => __('Disable Lost Password', 'custom-login-page'),
        'section' => 'custom_other_section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_other_lost_password]'
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_other_back_blog]', array(

        'default' => false,
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    )
);

$wp_customize->add_control(
    new O2_Customizer_Toggle_Control($wp_customize, 'customlogin_option[custom_other_back_blog]', array(

        'label' => __('Disable "Back to website"?', 'custom-login-page'),
        'section' => 'custom_other_section',
        'priority' => 15,
        'settings' => 'customlogin_option[custom_other_back_blog]'
    ))
);

$wp_customize->add_setting(
    'customlogin_option[custom_other_font_size]',
    array(
        'default' => '13px',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new O2_Customizer_Range_Slider_Control(
        $wp_customize,
        'customlogin_option[custom_other_font_size_control]',
        array(
            'label' => __( 'Font Size', 'custom-login-page' ),
            'section' => 'custom_other_section',
            'priority' => 20,
            'settings' => 'customlogin_option[custom_other_font_size]',
            'choices' => array(
                'percent' => false,
            ),
            'input_attrs' => array(
                'min'    => 0,
                'max'    => 100,
                'step'   => 1,
            ),
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_other_color]',
    array(
        'default' => '#999',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_other_color_control]',
        array(
            'label' => __( 'Text Color', 'custom-login-page' ),
            'section' => 'custom_other_section',
            'priority' => 25,
            'settings' => 'customlogin_option[custom_other_color]',
        )
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_other_color_hover]',
    array(
        'default' => '#2EA2CC',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'customlogin_option[custom_other_color_hover_control]',
        array(
            'label' => __( 'Text Color (Hover)', 'custom-login-page' ),
            'section' => 'custom_other_section',
            'priority' => 30,
            'settings' => 'customlogin_option[custom_other_color_hover]',
        )
    )
);


?>