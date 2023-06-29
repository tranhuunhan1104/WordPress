<?php
if(defined('WP_UNINSTALL_PLUGIN'))
{
    exit();
}
wipi_plugin_uninstall();
function wipi_plugin_uninstall(){
    global $wpdb;
  //option api
  delete_option('wipi_plg_version');
  delete_option('wipi_plg_option');
  $table_name = $wpdb->prefix . 'wipi_plugin';
  $sql = 'DROP TABLE IF EXISTS ' . $table_name ;
  $wpdb->query($sql);
}