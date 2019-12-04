<?php
//customizer control for  custom css & javascript

$wp_customize->add_section(
    'custom_code_section', array(
        'priority' => 40,
        'title' => __('Custom Css & Javascript', 'custom-login-page'),
        'panel' => 'customlogin_panel'
    )
);

$wp_customize->add_setting(
    'customlogin_option[custom_css_code]',array(

        'type' => 'option',
        'capability' => 'edit_theme_options'
    )
);

$wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'customlogin_option[custom_css_code_control]', array(

    'label' => __('Custom Css', 'custom-login-page'),
    'code_type' => 'text/css',
    'section' => 'custom_code_section',
    'priority' => 5,
    'settings' => 'customlogin_option[custom_css_code]'


)));

$wp_customize->add_setting(
    'customlogin_option[custom_javascript_code]',array(

        'type' => 'option',
        'capability' => 'edit_theme_options'
    )
);

$wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'customlogin_option[custom_javascript_code_control]', array(

    'label' => __('Custom JavaScript', 'custom-login-page'),
    'code_type' => 'text/javascript',
    'section' => 'custom_code_section',
    'priority' => 10,
    'settings' => 'customlogin_option[custom_javascript_code]'


)));

?>