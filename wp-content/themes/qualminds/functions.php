<?php 
function loadstyles() {
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", '', '1.0.0');
    wp_enqueue_style('bootstrap');

    wp_register_style("style", get_template_directory_uri() . "/style.css", '', '1.0.0');
    wp_enqueue_style('style');


    

}

add_action( 'wp_enqueue_scripts', 'loadstyles' );

