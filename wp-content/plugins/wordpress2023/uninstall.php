<?php

//dinh nghia hanh dong khi plugin bi go

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}


// xoa CSDL
include_once WP2023_PATCH .'/includes/db/migration-rollback.php';
//xoa option 
delete_option('wp2023_setting_optons');