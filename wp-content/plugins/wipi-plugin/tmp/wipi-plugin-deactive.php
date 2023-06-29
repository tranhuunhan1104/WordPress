<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
// vi du 1
// $path = dirname(__FILE__) . '/includes/admin.php';
// echo '</br>' . plugins_url('css/abc.css', __FILE__); 
// echo '</br>' . plugin_dir_path(__FILE__); 
// echo '</br>' . includes_url('/css/buttons-rtl.css');
// echo '</br>' . content_url('/themes/twentyten/editor-style-rtl.css');
// echo '</br>' . admin_url();
// echo '</br>' . site_url();
// echo '</br>' . home_url();


register_deactivation_hook(__FILE__ , 'wipi_plugin_deactive');


function wipi_plugin_deactive(){
    global $wpdb;
    $table_name = $wpdb->prefix . "options";
   
    $wpdb->update(
        $table_name,
        array('autoload'=>'no'),
        array('option_name'=>'wipi_plg_option'),
        array('%s'),
        array('%s')
    );

}


