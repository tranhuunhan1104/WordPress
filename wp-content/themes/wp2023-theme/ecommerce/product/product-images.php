<?php
     global $post;
     $product_image = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID));

?>
<div class="col-lg-6 col-md-6">
    <div class="product__details__pic">
        <div class="product__details__pic__item">
            <img class="product__details__pic__item--large"
                src="<?=  $product_image?>" alt="">
        </div>
        <div class="product__details__pic__slider owl-carousel">
            <img data-imgbigurl="<?=  $product_image?>"
                src="<?=  $product_image?>" alt="">
        </div>
    </div>
</div>