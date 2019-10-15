<?php

// function to customize login page of wordpress

//change login logo url

function customlogin_logo_url(){

    // return to logo link option

    global $options;

    return $options['custom_logo_url'];
}

// hook login_headerurl
if (! empty( $options['custom_logo_url'] ) ){

    add_filter('login_headerurl', 'customlogin_logo_url');
}

// change login logo title attribute

function customlogin_logo_title(){
    // get logo title
    $title = get_bloginfo('name', 'display');
    // return title
    return $title;
}

add_filter('login_headertitle', 'customlogin_logo_title');


?>