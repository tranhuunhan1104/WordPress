<?php


add_action('admin_menu','wp2023_admin_menu');
function wp2023_admin_menu(){
    //them menu cha
    add_menu_page(
                    'Wordpress 2023',
                    'Wordpress 2023',
                    'manage_options',
                    'wp2023',
                    'wp2023_admin_page_dashboard',
                    'dashicons-admin-page',
                    25
    );
    add_submenu_page(
                    'wp2023',
                    'Đơn hàng',
                    'Đơn hàng',
                    'manage_options',
                    'wp2023-orders',
                    'wp2023_admin_page_orders',
                    11
    );
    add_submenu_page(
                    'wp2023',
                    'Cấu hình',
                    'Cấu hình',
                    'manage_options',
                    'wp2023-settings',
                    'wp2023_admin_page_settings',
                    11
    );
}

function wp2023_admin_page_dashboard(){
    include_once WP2023_PATCH .'/includes/admin_pages/dashboard.php';
}
function wp2023_admin_page_orders(){
    include_once WP2023_PATCH .'/includes/admin_pages/orders.php';
}
function wp2023_admin_page_settings(){
    include_once WP2023_PATCH .'/includes/admin_pages/settings.php';
}