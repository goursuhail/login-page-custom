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

    $custom_css .= '}';

    wp_add_inline_style( 'render_style', $custom_css );
}

add_action( 'login_enqueue_scripts', 'customlogin_render_style' )
?>