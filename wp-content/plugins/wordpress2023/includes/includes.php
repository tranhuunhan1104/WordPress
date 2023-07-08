<?php
// dang ki post_type va taxonomy
include_once WP2023_PATCH .'/includes/post_types.php';

// dang ki metaboxes cho san pham
include_once WP2023_PATCH .'/includes/metaboxes.php';

// them cac cot vao posttype và taxonomy
include_once WP2023_PATCH .'/includes/admin_columns.php';

// tao menu cho admin
include_once WP2023_PATCH .'/includes/admin_menus.php';

// lam viec voi csdl wp
include_once WP2023_PATCH .'/includes/classes/Wp2023Order.php';

// dang ki cac ham debug
include_once WP2023_PATCH .'/includes/functions.php';

//dang ki ajax
include_once WP2023_PATCH .'/includes/admin_ajaxs.php';

// tao setting cho admin
include_once WP2023_PATCH .'/includes/admin_settings.php';

// tao api trong wordpress
include_once WP2023_PATCH .'/includes/apis.php';

// // tao migrate trong wordpress
// include_once WP2023_PATCH .'/includes/db/migration.php';

// // tao seeder trong wordpress
// include_once WP2023_PATCH .'/includes/db/seeder.php';