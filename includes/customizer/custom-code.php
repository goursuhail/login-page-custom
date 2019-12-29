<?php

function customlogin_render_style(){



    wp_enqueue_style('render_style', CLP_URL.'/includes/customizer/assets/css/customizer.css');
    wp_enqueue_style('body_style', CLP_URL. '/includes/customizer/assets/css/body-class.css');

    $options = get_option('customlogin_option');

//print_r($options);
    $custom_css = '';

    // login page background
    $custom_css .= 'body.login{';
    if ( ! empty( $options['custom_bg_color'] ) ) {
        $custom_css .= 'background-color: ' . $options['custom_bg_color']. ';';
    }
    if (! empty( $options['custom_bg_image'] ) ) {
        $custom_css .= 'background-image: url(" ' . $options['custom_bg_image'] . ' ");';
    }
    if ( ! empty( $options['custom_bg_image_size'] ) ) {
        if ( $options['custom_bg_image_size'] === 'custom' ) {
            $custom_css .= 'background-size: ' . $options['custom_bg_image_size_custom'] . ';';
        } else {
            $custom_css .= 'background-size: ' . $options['custom_bg_image_size'] . ';';
        }
    }
    if (! empty( $options['custom_bg_image_repeat'] ) ){
        $custom_css .= 'background-repeat: ' . $options['custom_bg_image_repeat'] . ';';
    }

    if ( ! empty( $options['custom_bg_image_position-x'] ) && ! empty( $options['custom_bg_image_position-y'] ) ) {
        $custom_css .= 'background-position: ' . $options['custom_bg_image_position-x'] . ' ' . $options['custom_bg_image_position-y'] . ';';
    }


    $custom_css .= '}';

    // login page logo
    $custom_css .= 'body.login div#login h1 a{';
    if ( $options['custom_logo_show'] == 1 ) {
        $custom_css .= 'display: none;';
    }else{

        if (! empty( $options['custom_logo'] ) ){
            $custom_css .= 'background-image: url(" ' . $options['custom_logo'] . ' ");';
        }
        if (! empty( $options['custom_logo_width'] ) ){
            $custom_css .= 'width: ' . $options['custom_logo_width'] . ';';
        }
        if (! empty( $options['custom_logo_height'] ) ){
            $custom_css .= 'height: ' . $options['custom_logo_height'] . ';';
        }
        if (! empty( $options['custom_logo_width'] ) || ! empty( $options['custom_logo_height'] ) ){

            $custom_css .= 'background-size: ' . $options['custom_logo_width'] . ' ' . $options['custom_logo_height'] . ';';
        }
        if (! empty( $options['custom_logo_bottom_padding'] ) ){

            $custom_css .= 'padding-bottom: ' . $options['custom_logo_bottom_padding'] . ';';
        }
    }


    $custom_css .= '}';

    // login page form

    $custom_css .= '#login form#loginform, #login form#registerform, #login form#lostpasswordform {';

    if (! empty( $options['custom_form_bg_image'] ) ){

        $custom_css .= 'background-image: url(" ' . $options['custom_form_bg_image'] . ' ");';
    }

    if (! empty( $options['custom_form_bg_color'] ) ){

        $custom_css .= 'background-color: ' . $options['custom_form_bg_color'] . ';';
    }

    if (! empty( $options['custom_form_width'] ) ){

        $custom_css .= 'width: ' . $options['custom_form_width'] . ';';
    }
    if (! empty( $options['custom_form_height'] ) ){

        $custom_css .= 'height: ' . $options['custom_form_height'] . ';';
    }
    if (! empty( $options['custom_form_padding'] ) ){

        $custom_css .= 'padding: ' . $options['custom_form_padding'] . ';';
    }

    if (! empty( $options['custom_form_radius'] ) ){

        $custom_css .= 'border-radius: ' . $options['custom_form_radius'] .';';
    }
    if ( ! empty( $options['custom_form_shadow_spread'] ) && ! empty( $options['custom_form_shadow'] ) ) {
        $custom_css .= 'box-shadow: 0 1px ' . $options['custom_form_shadow_spread'] . ' ' . $options['custom_form_shadow'] . ';';
    }

    $custom_css .= '}';

    // remember me link

    $custom_css .= 'body.login div#login form#loginform p.forgetmenot {';

    if ($options['custom_field_remember_me'] == 1){

        $custom_css .= 'display: none;';
    }

    $custom_css .= '}';

    // login page field css

    $custom_css .= '#login form#loginform .input, #login form#registerform .input, #login form#lostpasswordform .input {';

    if (! empty( $options['custom_field_width'] ) ){

        $custom_css .= 'width: ' . $options['custom_field_width'] . ';';
    }
    if (! empty( $options['custom_field_font_size'] ) ){

        $custom_css .= 'font-size: ' . $options['custom_field_font_size'] . ';';
    }
    if (! empty( $options['custom_field_border_width'] ) ){

        $custom_css .= 'border-width: ' . $options['custom_field_border_width'] . ';';
    }
    if (! empty( $options['custom_field_border_color'] ) ){

        $custom_css .= 'border-color: ' . $options['custom_field_border_color'] . ';';
    }
    if (! empty( $options['custom_field_radius'] ) ){

        $custom_css .= 'borde-radius: ' . $options['custom_field_radius'] . ';';
    }
    if ($options['custom_field_box_shadow'] == 1){

        $custom_css .= 'box-shadow: unset;';
    }
    if (! empty( $options['custom_field_margin'] ) ){

        $custom_css .= 'margin: ' . $options['custom_field_margin'] . ';';
    }
    if (! empty( $options['custom_field_padding'] ) ){

        $custom_css .= 'padding: ' . $options['custom_field_padding'] . ';';
    }

    if (! empty( $options['custom_field_bg_color'] ) ){

        $custom_css .= 'background-color: ' . $options['custom_field_bg_color'] . ';';
    }
    if (! empty( $options['custom_field_bg_color'] ) ){

        $custom_css .= 'background-color: ' . $options['custom_field_bg_color'] . ';';
    }

    if (! empty( $options['custom_field_color'] ) ){

        $custom_css .= 'color: ' . $options['custom_field_color'] . ';';
    }


    $custom_css .= '}';

    // login form label css

    $custom_css .= '#login form#loginform label, #login form#registerform label, #login form#lostpasswordform label {';

    if (! empty( $options['custom_field_label_color'] ) ){

        $custom_css .= 'color: ' . $options['custom_field_label_color'] . ';';
    }

    if (! empty( $options['custom_field_label_font_size'] ) ){

        $custom_css .= 'font-size: ' . $options['custom_field_label_font_size'] . ';';
    }

    $custom_css .= '}';

    // login button css

    $custom_css .= '#login form .submit .button {';

    $custom_css .= 'height: auto;';

    if (! empty($options['custom_button_bg'] ) ){

        $custom_css .= 'background-color: ' . $options['custom_button_bg'] . ';';
    }

    if (! empty( $options['custom_button_height_width'] ) && $options['custom_button_height_width'] === 'custom'){

        if (! empty( $options['custom_button_width_size'] ) ){

            $custom_css .= 'width: ' . $options['custom_button_width_size'] . ';';
        }

        if (! empty( $options['custom_button_height_size'] ) ){

            $custom_css .= 'height: ' . $options['custom_button_height_size'] . ';';
        }
    }




    if (! empty( $options['custom_button_font_size'] ) ){

        $custom_css .= 'font-size: ' . $options['custom_button_font_size'] . ';';
    }

    if (! empty( $options['custom_button_text_color'] ) ){

        $custom_css .= 'color: ' . $options['custom_button_text_color'] . ';';
    }
    if (! empty( $options['custom_button_padding'] ) ){

        $custom_css .= 'padding: ' . $options['custom_button_padding'] . ';';
    }

    if (! empty( $options['custom_button_border_width'] ) ){

        $custom_css .= 'border-width: ' . $options['custom_button_border_width'] . ';';
    }

    if (! empty( $options['custom_button_border_color'] ) ){

        $custom_css .= 'border-color: ' . $options['custom_button_border_color'] . ';';
    }

    if (! empty( $options['custom_button_shadow_spread'] ) && ! empty( $options['custom_button_shadow'] ) ) {

        $custom_css .= 'box-shadow: 0px 1px ' . $options['custom_button_shadow_spread'] . ' ' . $options['custom_button_shadow'] . ';';
    }

    if ( ! empty( $options['custom_button_text_shadow'] ) ) {
        $custom_css .= 'text-shadow: 0 -1px 1px ' . $options['custom_button_text_shadow'] . ',1px 0 1px ' . $options['custom_button_text_shadow'] . ',0 1px 1px ' . $options['custom_button_text_shadow'] . ',-1px 0 1px ' . $options['custom_button_text_shadow'] . ';';
    }


    $custom_css .= '}';

// login button on hover css

    $custom_css .= '#login form .submit .button:hover, #login form .submit .button:focus {';

    if (! empty( $options['custom_button_bg_hover'] ) ){

        $custom_css .= 'background-color: ' . $options['custom_button_bg_hover'] . ';';
    }

    if (! empty( $options['custom_button_border_color_hover'] ) ){

        $custom_css .= 'border-color: ' . $options['custom_button_border_color_hover'] . ';';
    }

    $custom_css .= '}';


    // Register Link CSS
    if ( is_customize_preview() ) {
        if ( ! empty( $options['custom_other_register_link'] ) && $options['custom_other_register_link'] === 1 ) {
            $custom_css .= '#login #nav a:first-child {';
            $custom_css .= 'display: none;';
            $custom_css .= '}';
        }
    }

    // Lost Password Link CSS
    if ( ! empty( $options['custom_other_lost_password'] ) && $options['custom_other_lost_password'] == 1 ) {
        $custom_css .= '#login #nav a:last-child {';
        $custom_css .= 'display: none;';
        $custom_css .= '}';
    }

    //// Other Styling
    if ( ! empty( $options['custom_other_back_blog'] ) && $options['custom_other_back_blog'] == 1 ) {
        $custom_css .= '#login #backtoblog {';
        $custom_css .= 'display: none;';
        $custom_css .= '}';
    }

    if ( ! empty( $options['custom_other_font_size'] ) ) {
        $custom_css .= '.login #nav, .login #nav a, .login #backtoblog a {';
        $custom_css .= 'font-size: ' . $options['custom_other_font_size'] . ';';
        $custom_css .= '}';
    }
    if ( ! empty( $options['custom_other_color'] ) ) {
        $custom_css .= '.login #nav, .login #nav a, .login #backtoblog a {';
        $custom_css .= 'color: ' . $options['custom_other_color'] . ';';
        $custom_css .= '}';
    }
    if ( ! empty( $options['custom_other_color_hover'] ) ) {
        $custom_css .= '.login #backtoblog a:hover, .login #nav a:hover {';
        $custom_css .= 'color: ' . $options['custom_other_color_hover'] . ';';
        $custom_css .= '}';
    }

    //custom css

    if (! empty( $options['custom_css_code'] ) ){

        $custom_css .= $options['custom_css_code'];
    }






    wp_add_inline_style( 'render_style', $custom_css );
}

add_action( 'login_enqueue_scripts', 'customlogin_render_style' );




function logincust_render_script() {
    // Get plugin options array
    $options = get_option( 'customlogin_option' );
    if ( ! empty( $options['custom_javascript_code'] ) ) {
        echo '<script>' . "\n" . $options['custom_javascript_code'] . "\n" . '</script>' . "\n";
    }
}


// Hook script to login page
add_action( 'login_footer', 'logincust_render_script' );

//custom template
function add_body_class_to_login_page( $classes ) {
    $options = get_option('customlogin_option');
    $body_class   = $options['custom_template'];
    if ($options['custom_disable_templates'] == 1){

        return $classes;


    }else{
        $classes[] = "body-{$body_class}";
        return $classes;
    }


}

add_filter( 'login_body_class', 'add_body_class_to_login_page' );





?>