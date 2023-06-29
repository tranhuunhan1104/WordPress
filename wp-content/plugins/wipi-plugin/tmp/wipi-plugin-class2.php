<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
wipiPlugin::init();
  class wipiPlugin{
    public static function init(){
        add_action('wp_footer',array(__CLASS__,'newFooter'));
        add_action('wp_footer',array(__CLASS__,'newFooter2'));
    }
    public static function newFooter(){
      echo "<div> hello word </div>";
    }
    public static function newFooter2(){
      echo "<div> hello word 2</div>";
    }

  }