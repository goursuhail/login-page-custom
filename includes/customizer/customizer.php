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
// radio
require_once (CLP_PATH.'/includes/customizer/controls/radio-images/radio-images-control.php');




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
    // section fields
    require_once (CLP_PATH.'/includes/customizer/section/section-field.php');
    // section button
    require_once (CLP_PATH.'/includes/customizer/section/section-button.php');
    // section other
    require_once (CLP_PATH.'/includes/customizer/section/section-other.php');
    //section templates
    require_once (CLP_PATH. 'includes/customizer/section/section-templates.php');
    //section custom code
    require_once  (CLP_PATH. 'includes/customizer/section/section-code.php');
}

add_action('customize_register', 'custom_login_page_register');

?>