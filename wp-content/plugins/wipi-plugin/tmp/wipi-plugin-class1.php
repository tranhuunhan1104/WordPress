<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
  class wipiPlugin{
    public function __construct(){
        add_action('wp_footer',array($this,'newFooter'));
        add_action('wp_footer',array($this,'newFooter2'));
    }
    public function newFooter(){
      echo "<div> hello word </div>";
    }
    public function newFooter2(){
      echo "<div> hello word 2</div>";
    }

  }
new wipiPlugin();