<?php global $theme_uri; ?>
<?php get_header(); ?>
  
    <!-- Breadcrumb Section Begin -->
        <?php get_template_part('/ecommerce/product/product-title')?>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <?php get_template_part('/ecommerce/product/product-images')?>
                <?php get_template_part('/ecommerce/product/product-summary')?>
                <?php get_template_part('/ecommerce/product/product-tabs')?>
                
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
        <?php get_template_part('/ecommerce/product/product-related') ?>
<?php get_footer(); ?>