<?php

//customize control for template section

$wp_customize->add_section(
    'custom_template_section', array(

        'priority' => 0,
        'title' => __('Templates', 'custom-login-page'),
        'panel' => 'customlogin_panel'
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_template]', array(

        'default' => 'original',
        'type' => 'option',
        'capability' => 'edit_theme_options'

    )
);

$wp_customize->add_control(new O2_Customizer_Radio_Images_Control($wp_customize, 'customlogin_option[custom_template_control]', array(

        'label'=> __('Templates', 'custom-login-page'),
        'section' => 'custom_template_section',
        'priority' => 5,
        'settings' => 'customlogin_option[custom_template]',
        'choices' => array(

            'original' => CLP_URL .'assets/img/original.png',
            'dark' => CLP_URL . 'assets/img/dark.png',
            'material' => CLP_URL . 'assets/img/material.png'
        ),
    ))
);

?>