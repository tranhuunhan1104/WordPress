<?php
    $objWp2023Order = new Wp2023Order();
    $result = $objWp2023Order->paginate(2);
    extract($result);

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    /*
    $item
    $item_pages
    $item_total
    */
    $action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';
    if( $action == 'trash' ){
        $orderIds = $_REQUEST['post'];
        if( count( $orderIds ) ){
            foreach( $orderIds as $orderId ){
                $objWp2023Order->trash($orderId);
            }
        }
        wp2023_redirect('admin.php?page=wp2023-orders');
        exit();
    }
    if(isset( $_GET['order_id']) &&  $_GET['order_id'] != ''){
        include_once WP2023_PATCH .'/includes/admin_pages/orders/edit.php';
    }else{
        include_once WP2023_PATCH .'/includes/admin_pages/orders/list.php';
    }
?>



<script>
    // Đường dẫn xử lý ajax
    let nonce = '<?= wp_create_nonce('wp2023_update_order_status');?>';
    let ajax_url = '<?= admin_url('admin-ajax.php'); ?>';
    jQuery( document ).ready( function(){
        // alert('Jquery')
        jQuery('.order_status').on('change',function(){
            let order_id = jQuery(this).data('id');//data-id
            let status = jQuery(this).val();

            jQuery.ajax({
                url: ajax_url,
                method: 'POST',
                dataType: 'json',
                data : {
                    action: 'wp2023_order_change_status',
                    order_id: order_id,
                    status: status,
                    _wpnonce:nonce
                },
                success: function(res){
                    if( res.success ){
                        alert('Cập nhật thành công !');
                    }else{
                        alert('Cập nhật không thành công !');
                    }
                },
                error: function(error){

                }
            });
        
        });
    });
</script>