<?php
        
add_action('wp_enqueue_scripts', 'eca_load_scripts');
function eca_load_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), null, true);
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js', array(), null, false);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'main_js', get_template_directory_uri().'/assets/js/main.js', array('webfont', 'jquery', 'bootstrap'), '1.0.0', true);
    
    wp_register_style( 'main_css',    get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style ( 'main_css' );        
}

?>