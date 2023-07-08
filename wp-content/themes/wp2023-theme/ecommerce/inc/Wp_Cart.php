<?php
class Wp_Cart {
    public function __construct(){
        add_action('init', [$this,'myStartSession']);
    }

    public function myStartSession(){
        if(!session_id()) {
            session_start();
        }
    }

    public function getCart(){
        $the_cart =  $_SESSION['cart'];
        if ($the_cart) {
            $product_ids = array_keys($the_cart);
            $args = [
                'post_type' => 'product',
                'include'   => $product_ids
            ];
            $products = get_posts($args);
        }else{
            $products = [];
        }
        $cart = [];
        $cart['products'] = $products;
        $cart['the_cart'] = $the_cart;
        return $cart;
    }
    public function getFragments(){
        $cart = $_SESSION['cart'];
        return [
            'cart_count' =>  count($cart),
            'cart_total' =>  array_sum($cart),
        ];
    }
    public function addToCart($product_id,$quantity){
        $cart = $_SESSION['cart'];
        if( isset( $cart[$product_id] ) ){
            $cart[$product_id] = $cart[$product_id] + $quantity;
        }else{
            $cart[$product_id] = $quantity;
        }
        $_SESSION['cart'] = $cart;
    }
    public function updateCart($new_cart){
        $_SESSION['cart'] = $new_cart;
    }

    public function removeProductCart($product_id){
        $cart = $_SESSION['cart'];
        unset($cart[$product_id]);
        $_SESSION['cart'] = $cart;
    }
}
global $cart;
$cart = new Wp_Cart();