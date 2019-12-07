<?php

class CustomLogin{

    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'custom_enqueue_script']);
        $this->includes();
    }

    function custom_enqueue_script(){


        wp_enqueue_script('customjs', CLP_URL.'/assets/js/custom'.CLP_SCRIPT_SUFFIX.'.js', ['jquery', 'jquery-color'], CLP_VERSION, true);
        wp_enqueue_style('customcss', CLP_URL.'/assets/css/custom'.CLP_SCRIPT_SUFFIX.'.css', CLP_VERSION);
    }


    function includes(){

        require_once CLP_PATH.'/includes/customizer/customizer.php';

    }


}
new CustomLogin();




?>