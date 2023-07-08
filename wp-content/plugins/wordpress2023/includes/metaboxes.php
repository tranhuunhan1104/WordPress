<?php
// Product Screen: Màn hình chỉnh sửa/thêm mới sản phẩm
//Đăng ký meta box cho sản phẩm
add_action( 'add_meta_boxes', 'wp2023_meta_box_product' );

// Can thiệp vào hành động lưu bài viết
add_action( 'save_post', 'wp2023_save_post_product' );

function wp2023_save_post_product($post_id){
    // if( $_REQUEST['post_type'] == 'product' ){
        // var_dump($post_id);die();
        if( isset($_REQUEST['product_price']) ){
            $product_price      = $_REQUEST['product_price'];
            update_post_meta($post_id,'product_price',$product_price);
        }
        if( isset($_REQUEST['product_price_sale']) ){
            $product_price_sale      = $_REQUEST['product_price_sale'];
            update_post_meta($post_id,'product_price_sale',$product_price_sale);
        }
        if( isset($_REQUEST['product_stock']) ){
            $product_stock      = $_REQUEST['product_stock'];
            update_post_meta($post_id,'product_stock',$product_stock);
        }
    // }
}


function wp2023_meta_box_product() {
	$screens = [ 'post', 'wporg_cpt' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wp2023_product_info',                 // Unique ID
			'Thông tin sản phẩm',      // Box title
			'wp2023_meta_box_product_html',  // Content callback, must be of type callable
			'product'                           // Post type
		);
	}
}
function wp2023_meta_box_product_html(){
    include_once WP2023_PATCH .'/includes/templates/meta_boxe_product.php';
}


//category screen 
// dang ki them truong cho taxonomy

// form theem moi
add_action('product_cat_add_form_fields','wp2023_meta_boxe_product_cat_add');

// form chinh sua
add_action('product_cat_edit_form_fields','wp2023_meta_boxe_product_cat_edit');
function wp2023_meta_boxe_product_cat_add(){
    include_once WP2023_PATCH .'/includes/templates/meta_boxe_product_cat_add.php';
}

function wp2023_meta_boxe_product_cat_edit($term){
    include_once WP2023_PATCH .'/includes/templates/meta_boxe_product_cat_edit.php';
}

//xu li khi luu term

add_action('create_product_cat', 'wp2023_meta_boxe_product_cat_save',10,1);
add_action('edit_product_cat', 'wp2023_meta_boxe_product_cat_save',10,1);
 
function wp2023_meta_boxe_product_cat_save($term_id){
    $image = $_POST['image'];
    update_term_meta($term_id,'image',$image);
}
