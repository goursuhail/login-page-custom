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
        'section' => 'custom-form-section',
        'priority' => 10,
        'settings' => 'customlogin_option[custom_form_bg_color]'
    ))
);

?>