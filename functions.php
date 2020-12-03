<?php 


/**
 * Stylesheet and javascript
 */

function envy_custom_theme() {

    // register stylesheet and js
    wp_register_style('main_css', get_template_directory_uri(). '/css/styles.css', false, '1.0.0');
    wp_register_style('custom_css', get_template_directory_uri(). '/css/custom.css', false, '1.0.0');
    wp_register_script('main-js', get_template_directory_uri(). '/./assets/js/lib/main.js', array(), '1.0.0', true);
    
    // enqueue stylesheet and js
    wp_enqueue_style('main_css'); 
    wp_enqueue_style('custom_css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'envy_custom_theme');


/**
 *  Custom menus
 */

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'Woocommerce Custom Menu', 'woocommercecustommenu' ),
            'footer_menu'  => __( 'Woocommerce Footer Menu', 'woocommercefootermenu' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
 



// Adding class to header and footer navigation (li)

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    // li class for header
    if ( 'header_menu' === $args->theme_location ) {
        $classes[] = 'nav-link';
    }
    // li class for footer
    if ( 'footer_menu' === $args->theme_location ) {
        $classes[] = 'footer-link';
    }

    return $classes;
}



/**
 * Theme supports
 */

// Wordpress
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/**
 * Widgets
 */

// side bar for blog

function blog_sidebar() {
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'  
        )
    );
}

add_action('widgets_init', 'blog_sidebar');

// side bar for header

function header_widget() {
    register_sidebar(
        array(
            'name' => 'Header',
            'id' => 'header-widget',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'  
        )
    );
}

add_action('widgets_init', 'header_widget');


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
    // add_filter( 'woocommerce_show_page_title', '__return_false');


    // Add theme supports
    add_theme_support('wc-product-gallery-zoom'); 
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

// removes add to basket from shop page
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
// removes add to basket from single product page
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );





// exceprt length

add_filter( 'excerpt_length', function($length) {
    return 30;
} );




?>