<?php

function customlogin_render_style(){



    wp_enqueue_style('render_style', CLP_PATH.'/includes/customizer/assets/css/customizer.css');

    $options = get_option('customlogin_option');

print_r($options);
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

    wp_add_inline_style( 'render_style', $custom_css );
}

add_action( 'login_enqueue_scripts', 'customlogin_render_style' )
?>