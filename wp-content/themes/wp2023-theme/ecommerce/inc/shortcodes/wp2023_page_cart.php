<?php
 global $cart;
 $cart_data = $cart->getCart();

?>
<div class="row">
    <div class="col-lg-12">
        <div class="shoping__cart__table">
        <form id="form-cart" action="" method="post">
            <table>
                <thead>
                    <tr>
                        <th class="shoping__product">Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if (count( $cart_data['products'])) : ?>
                        <?php foreach( $cart_data['products'] as $product) : 
                            $post_id = $product->ID ;
                            $image = wp_get_attachment_thumb_url(get_post_thumbnail_id($post_id));
                            $price = get_post_meta($post_id,'product_price',true);
                            $qty = $cart_data['the_cart'][$post_id];
                            $subtotal = $price * $qty;
                            ?>
                            <tr>
                                <td class="shoping__cart__item image_cart">
                                    <img id="image_cart" src="<?=  $image?>" alt="">
                                    <h5><?= get_the_title($post_id)?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                    <?= number_format($price)?>đ
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input name="qty[<?= $post_id; ?>]" type="text" value="<?= $qty?>">
                                        </div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    <?= number_format($subtotal)?>đ
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>   
                    <?php endforeach ?>
                    <?php endif ?>



                </tbody>
            </table>
        </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="shoping__cart__btns">
                <a href="<?= home_url()?>" class="primary-btn cart-btn">Tiếp tục mua hàng</a>
                <a href="javascript:;" id="update_cart" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                    Cập nhật giỏ hàng</a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="shoping__continue">
            <div class="shoping__discount">
                <h5>Discount Codes</h5>
                <form action="#">
                    <input type="text" placeholder="Enter your coupon code">
                    <button type="submit" class="site-btn">APPLY COUPON</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="shoping__checkout">
            <h5>Cart Total</h5>
            <ul>
                <li>Tổng <span><?= $subtotal?></span></li>
                <li>Tổng thu <span><?= $subtotal?></span></li>
            </ul>
            <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
        </div>
    </div>
</div>