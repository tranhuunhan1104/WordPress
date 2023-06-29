<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
// vi du 1;
$path = dirname(__FILE__) . '/includes/admin.php';
echo '</br>' . plugins_url('css/abc.css', __FILE__); 
echo '</br>' . plugin_dir_path(__FILE__); 
echo '</br>' . includes_url('/css/buttons-rtl.css');
echo '</br>' . content_url('/themes/twentyten/editor-style-rtl.css');
echo '</br>' . admin_url();
echo '</br>' . site_url();
echo '</br>' . home_url();


register_activation_hook(__FILE__ , 'wipi_plugin_active');


function wipi_plugin_active1(){
    global $wpdb;
    $table_name = $wpdb->prefix . "wipi_plugin";
    if($wpdb->get_var("SHOW TABLES LIKE '".$table_name ."'") != $table_name){
        $sql = "CREATE TABLE `". $table_name ."`(
        `myid` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
        `my_name` varchar(50) DEFAULT NULL, 
         PRIMARY KEY (`myid`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }


}

// vi du 2;
$str = 'a:3:{s:7:"courser";s:9:"wordpress";s:6:"author";s:4:"wipi";s:7:"website";s:10:"www.abc.vn";}';

echo '<pre>';
print_r(unserialize($str));
echo '</pre>';

function wipi_plugin_active2(){
    $wipi_plg_option = array(
        'courser' => 'wordpress',
        'author' => 'wipi',
        'website' => 'www.abc.vn'

    );  
    add_option("wipi_plg_option",$wipi_plg_option,'','yes');
}



function wipi_plugin_active(){
    $wipi_plg_Versison = "1.0";
    add_option("wipi_plg_version",$wipi_plg_Versison,'','yes');
}
