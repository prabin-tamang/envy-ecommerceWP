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
 *  Custom menus
 */

 function woocommerce_custom_menu() {
     register_nav_menu('top-menu', __('Woocommerce Custom Menu', 'woocommercecustommenu'));
 }
add_action('init', 'woocommerce_custom_menu');



/**
 * Theme supports
 */

// Wordpress
add_theme_support( 'title-tag' );



// Woocommerce
if(class_exists('WooCommerce')){ 
    /* Woocommerce Support */
    function woocommerceshop_add_woocommerce_support() {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'woocommerceshop_add_woocommerce_support');



    // remove default woocommerce styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    // remove shop title
    // add_filter( 'woocommerce_show_page_title', '__return_false; );


    // Add theme supports
    add_theme_support('wc-product-gallery-zoom'); 
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}












?>