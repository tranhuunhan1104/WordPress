<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
  $includeDir = plugin_dir_path(__file__) . '/includes';
  require_once $includeDir . '/publictmp.php';
  $wipiPlugin = new wipiPlugin();
  add_action('wp_footer',array($wipiPlugin,'newFooter')) ;
  add_action('wp_footer',array($wipiPlugin,'newFooter2')) ;