<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 

register_uninstall_hook(__FILE__ , 'wipi_plugin_uninstall');


function wipi_plugin_uninstall(){
    global $wpdb;
  //option api
  delete_option('wipi_plg_version');
  delete_option('wipi_plg_option');
  $table_name = $wpdb->prefix . 'wipi_plugin';
  $sql = 'DROP TABLE IF EXISTS wp_wipi_plugin';
  $wpdb->query($sql);
}


