<?php
function enqueueJsAndCss(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], null );
    wp_enqueue_script( 'main',get_template_directory_uri(). '/assets/js/main.js', ['jquery'],null, true);
    wp_enqueue_script( 'aos','https://unpkg.com/aos@2.3.1/dist/aos.js');
}
add_action( 'wp_enqueue_scripts', 'enqueueJsAndCss', 50 );