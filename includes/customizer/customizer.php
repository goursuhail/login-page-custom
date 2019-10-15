<?php


require_once (CLP_PATH.'/includes/customizer/custom-code.php');

require_once (CLP_PATH.'/includes/customizer/functions.php');
// Toggle control

require_once (CLP_PATH.'/includes/customizer/controls/toggle/toggle-control.php');
// range slider
require_once (CLP_PATH.'/includes/customizer/controls/range-slider/range-slider-control.php');
// padding
require_once (CLP_PATH.'/includes/customizer/controls/padding/padding-control.php');
// alpha color control
require_once (CLP_PATH.'/includes/customizer/controls/alpha/alpha-control.php');




//register login page settings..
function custom_login_page_register($wp_customize)
{

    // login customize panel
    $wp_customize->add_panel('customlogin_panel',
        array(

            'priority' => 30,
            'capability' => 'edit_theme_options',
            'title' => __('Custom Login Page', 'custom-login-page'),
            'description' => __('This section allows you to customize the login page of your website.', 'custom-login-page'),
        ));

    // section background
    require_once (CLP_PATH.'/includes/customizer/section/section-background.php');
    // section logo
    require_once (CLP_PATH.'/includes/customizer/section/section-logo.php');
    // section form
    require_once (CLP_PATH.'/includes/customizer/section/section-form.php');
}

add_action('customize_register', 'custom_login_page_register');

?>