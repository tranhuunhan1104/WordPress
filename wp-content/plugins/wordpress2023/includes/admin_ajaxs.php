<?php 
    //khi da dang nhap
    add_action('wp_ajax_wp2023_order_change_status','wp2023_order_change_status');
    //khi chua dang nhap
    add_action('wp_ajax_nopri_wp2023_order_change_status','wp2023_order_change_status');
    function wp2023_order_change_status(){
        $order_id = $_REQUEST['order_id'];
        $status   = $_REQUEST['status'];
        $objWp2023Order = new Wp2023Order();
        $objWp2023Order->change_status($order_id,$status);
        $res = [
            'success'=>true
        ];
        echo json_encode($res);
        die();
    }
?>