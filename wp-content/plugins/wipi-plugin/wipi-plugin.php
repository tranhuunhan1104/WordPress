<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
define('WIPI_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WIPI_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WIPI_VIEWS_DIR', plugin_dir_path(__FILE__).'/views');
if(!is_admin()){
  require_once WIPI_PLUGIN_DIR . '/public.php';
  new Wipi();
}else{
  require_once WIPI_PLUGIN_DIR . '/admin.php';
  new WipiAdmin();
}
