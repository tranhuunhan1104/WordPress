<?php
/*
 * Plugin Name:       Wordpress 2023 - Ecommerce
 * Plugin URI:        #
 * Description:       Plugin phuc vu khoa hoc lap trinh wordpress
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tran Huu Nhan
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023-ecommerce
 * Domain Path:       /languages
 */

 // dinh nghia cac hang so plugin
    define('WP2023_PATCH', plugin_dir_path(__FILE__));
    define('WP2023_URI', plugin_dir_url(__FILE__));

 // dinh nghia hanh dong khi plugin duoc kich hoat
      register_activation_hook(__FILE__,'wp2023_ecommerce_activation');
      function wp2023_ecommerce_activation(){
          // tao co so du lieu 
            include_once WP2023_PATCH .'/includes/db/migration.php';
          // tao du lieu mau
            include_once WP2023_PATCH .'/includes/db/seeder.php';
          // tao option
          update_option('wp2023_setting_optons',[]);
      }

// dinh nghia hanh dong khi plugin duoc tat di
      register_deactivation_hook(__FILE__,'wp2023_ecommerce_deactivation');
      function wp2023_ecommerce_deactivation(){
         // xoa CSDL
         include_once WP2023_PATCH .'/includes/db/migration-rollback.php';
         //xoa option
         delete_option('wp2023_setting_optons');
      }

include_once WP2023_PATCH .'/includes/includes.php';
