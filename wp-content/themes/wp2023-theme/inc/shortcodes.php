<?php


//shortcode_header_cart


add_shortcode( 'shortcode_header_cart', 'shortcode_header_cart' );
function shortcode_header_cart( $atts ){
    global $theme_dir;
    $atts = shortcode_atts( array(
        'show_wishlist' => 1,
        'show_cart' => 1,
        'show_total' => 1,

    ), $atts);
    $show_wishlist = $atts['show_wishlist'];
    $show_cart = $atts['show_cart'];
    $show_total = $atts['show_total'];
    ob_start();
    include $theme_dir.'/inc/shortcodes/shortcode_header_cart.php';
    return ob_get_clean();
}