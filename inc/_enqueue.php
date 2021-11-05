<?php
function enqueueJsAndCss(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], null );
    wp_enqueue_script( 'main',get_template_directory_uri(). '/assets/js/main.js', ['jquery'],null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueueJsAndCss', 50 );