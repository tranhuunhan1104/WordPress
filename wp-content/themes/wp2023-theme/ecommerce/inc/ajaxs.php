<?php 

add_action("wp_ajax_wp2023_add_to_cart", "wp2023_add_to_cart");
add_action("wp_ajax_nopriv_wp2023_add_to_cart", "wp2023_add_to_cart");


add_action("wp_ajax_wp2023_update_cart", "wp2023_update_cart");
add_action("wp_ajax_nopriv_wp2023_update_cart", "wp2023_update_cart");

function wp2023_update_cart(){
   global $cart;
   $cart->updateCart($_REQUEST['qty']);
   $return = [
    'success' => true,
    'fragments' => $cart->getFragments()
    ];
    echo wp_json_encode($return);
    die();
}

function wp2023_add_to_cart(){

    $nonce = $_REQUEST['nonce'];
    if( wp_verify_nonce($nonce,'wp2023_add_to_cart') ){
        $product_id = $_REQUEST['product_id'];
        $quantity   = $_REQUEST['qty'];
        global $cart;
        $cart->addToCart($product_id,$quantity);

        $return = [
            'success' => true,
            'fragments' => $cart->getFragments()
        ];
        echo wp_json_encode($return);
        die();
    }
   
    $return = [
        'success' => false
    ];
    echo json_encode($return);
    die();
}