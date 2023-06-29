<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
add_action('wp_footer','wipi_footer');

function wipi_footer(){
  echo "</br> Page : " . is_page();
}

add_action('wp-head','wipi_plugin_css');

function wipi_plugin_css(){
  if(is_page() == true){
    $cssUrl = plugins_url('css/abc.css', __FILE__);
    $css = '<link rel="stylesheet" type="text/css" media="all" href="' .$cssUrl.'" />';
    echo $css;
  }
    
}
