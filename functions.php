<?php 


/**
 * Stylesheet and javascript
 */

function envy_custom_theme() {

    // register stylesheet and js
    wp_register_style('custom_css', get_template_directory_uri(). '/css/styles.css', false, '1.0.0');
    wp_register_script('main-js', get_template_directory_uri(). '/./assets/js/lib/main.js', array(), '1.0.0', true);
    
    // enqueue stylesheet and js
    wp_enqueue_style('custom_css');
    wp_enqueue_script('main-js');

}

add_action('wp_enqueue_scripts', 'envy_custom_theme');



/**
 * Theme supports
 */

add_theme_support( 'title-tag' );




?>