
<?php
global $theme_prefix,$theme_uri;
$theme_prefix   = 'wp2023_theme';
$theme_uri      = get_template_directory_uri().'/assets';
$theme_dir      = get_template_directory();
$theme_version  = '1.0';

// Đăng ký các thành phần hỗ trợ cho theme: menu, post_thumbnail...
include_once $theme_dir.'/inc/theme_support.php';

// Đăng ký style,scripts cho theme: css, js
include_once $theme_dir.'/inc/scripts.php';

// Đăng ký sidebar, widgets
include_once $theme_dir.'/inc/widgets.php';

// Đăng ký customizer
include_once $theme_dir.'/inc/customizers.php';

// Đăng ký shortcodes
include_once $theme_dir.'/inc/shortcodes.php';

// Đăng ký chức năng tìm kiếm, sắp xếp cho theme
include_once $theme_dir.'/ecommerce/inc/search.php';

// Đăng ký ajjax
include_once $theme_dir.'/ecommerce/inc/ajaxs.php';

// Đăng ký them vao gio hang
include_once $theme_dir.'/ecommerce/inc/Wp_Cart.php';

// Đăng ký them vao gio hang
include_once $theme_dir.'/ecommerce/inc/shortcodes.php';
