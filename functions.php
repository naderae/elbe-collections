<?php

// ENQUEUE PARENT THEME STYLE
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// chnage the_excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// ADD CUSTOM JAVSCRIPT TO THE THEME
add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );

function my_custom_script_load(){
  wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/js/myscript.js', array( 'jquery' ));
}

// remove margin-top:32px from html
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');



// DECLARE WOOCOMMERCE SUPPORT
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}


// THIS IS WHERE YOU PUT ANY HOOkS AND FILTERS TO MODIFY THE WOOCOMMERCE
// aparently, you must disable all css before making changes
if (class_exists('Woocommerce')){
    // DISABLE WOOCOMMERCE STYLING
    // add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

    // REMOVE PRODUCT ORDERING AND ADD SEARCH FIELD
    // remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    // add_action( 'woocommerce_before_shop_loop', 'custom_woocommerce_product_search', 30 );
    //
    // function custom_woocommerce_product_search() {the_widget(’WC_Widget_Product_Search’,’’,’’);}
    // remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

}


//Enqueue the Font Awesone script
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}




?>
