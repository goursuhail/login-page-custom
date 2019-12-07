jQuery(document).ready(function ($) {
    alert("hello plugin");

    $( '<li class="accordion-section control-section control-section-default control-subsection"><h4 class="accordion-section-title"><a href="https://wordpress.org/support/plugin/login-customizer/reviews/#new-post" target="_blank">Like our plugin? Leave a review here!</a></h4></li><li style="padding: 10px; text-align: center;">Made with ❤ by <a href="http://www.facebook.com/" target="_blank">Suhail Gour</a></li>' ).appendTo( '#sub-accordion-panel-customlogin_panel' );


    if ( wp.customize( 'customlogin_option[custom_bg_image]' )._value === '' ) {
        $( '#customize-control-customlogin_option-custom_bg_image_size_control' ).hide();
        $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).hide();
        $( '#customize-control-customlogin_option-custom_bg_image_repeat_control' ).hide();
        $( '#customize-control-customlogin_option-custom_bg_image_position' ).hide();
    }



    if ( wp.customize( 'customlogin_option[custom_bg_image_size]' )._value !== 'custom' ) {

        $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).hide();


    }


    if( wp.customize( 'customlogin_option[custom_logo_show]' )._value === true ){

        $( '#customize-control-customlogin_option-custom_logo_control' ).hide();
        $( '#customize-control-customlogin_option-custom_logo_width_control' ).hide();
        $( '#customize-control-customlogin_option-custom_logo_height_control' ).hide();
        $( '#customize-control-customlogin_option-custom_logo_bottom_padding_control' ).hide();
        $( '#customize-control-customlogin_option-custom_logo_url_control' ).hide();
    }else {

        $( '#customize-control-customlogin_option-custom_logo_control' ).show();
        $( '#customize-control-customlogin_option-custom_logo_width_control' ).show();
        $( '#customize-control-customlogin_option-custom_logo_height_control' ).show();
        $( '#customize-control-customlogin_option-custom_logo_bottom_padding_control' ).show();
        $( '#customize-control-customlogin_option-custom_logo_url_control' ).show();

    }

    if (wp.customize( 'customlogin_option[custom_button_height_width]' )._value === 'auto'){

        $( '#customize-control-customlogin_option-custom_button_width_size_control' ).hide();
        $( '#customize-control-customlogin_option-custom_button_height_size_control' ).hide();

    }



    wp.customize( 'customlogin_option[custom_bg_image]', function( setting ) {
        setting.bind( function( value ) {
            if ( value === '' ) {
                $( '#customize-control-customlogin_option-custom_bg_image_size_control' ).hide();
                $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).hide();
                $( '#customize-control-customlogin_option-custom_bg_image_repeat_control' ).hide();
                $( '#customize-control-customlogin_option-custom_bg_image_position' ).hide();
            } else {
                $( '#customize-control-customlogin_option-custom_bg_image_size_control' ).show();
                if ( wp.customize( 'customlogin_option[custom_bg_image_size]' )._value === 'custom' ) {
                    $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).show();
                }
                $( '#customize-control-customlogin_option-custom_bg_image_repeat_control' ).show();
                $( '#customize-control-customlogin_option-custom_bg_image_position' ).show();
            }
        });
    });

    wp.customize( 'customlogin_option[custom_bg_image_size]', function( setting ) {
        setting.bind( function( value ) {
            if ( value === 'custom' ) {
                $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).show();
            } else {
                $( '#customize-control-customlogin_option-custom_bg_image_size_custom_control' ).hide();
            }
        });
    });

    wp.customize( 'customlogin_option[custom_logo_show]', function (setting) {

        setting.bind( function ( value ) {

            if ( value === true){

                $( '#customize-control-customlogin_option-custom_logo_control' ).hide();
                $( '#customize-control-customlogin_option-custom_logo_width_control' ).hide();
                $( '#customize-control-customlogin_option-custom_logo_height_control' ).hide();
                $( '#customize-control-customlogin_option-custom_logo_bottom_padding_control' ).hide();
                $( '#customize-control-customlogin_option-custom_logo_url_control' ).hide();

            } else {

                $( '#customize-control-customlogin_option-custom_logo_control' ).show();
                $( '#customize-control-customlogin_option-custom_logo_width_control' ).show();
                $( '#customize-control-customlogin_option-custom_logo_height_control' ).show();
                $( '#customize-control-customlogin_option-custom_logo_bottom_padding_control' ).show();
                $( '#customize-control-customlogin_option-custom_logo_url_control' ).show();


            }

        });

    } );


    wp.customize( 'customlogin_option[custom_button_height_width]', function ( setting ) {

        setting.bind( function ( value ) {

            if ( value === 'custom') {

                $( '#customize-control-customlogin_option-custom_button_width_size_control' ).show();
                $( '#customize-control-customlogin_option-custom_button_height_size_control' ).show();
            }else {


                $( '#customize-control-customlogin_option-custom_button_width_size_control' ).hide();
                $( '#customize-control-customlogin_option-custom_button_height_size_control' ).hide();
            }


        });

    } );
});