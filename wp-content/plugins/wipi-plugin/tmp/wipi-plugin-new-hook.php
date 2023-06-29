<?php
/*
Plugin Name: WIPI_PLUGIN
Plugin URI: http://wordpress.org/plugins/wipi-plugin/
Description: Tìm hiểu về quá trình xây dựng Plugin .    
Author: wipi
Version: 1.7.2
Author URI: http://wordpress.org/plugins/wipi-plugin/
*/ 
  add_action('new_action_hook','new_action_callback',10,2);
  function new_action_callback($courseName,$author){
    echo 'Lap trinh vien' . $courseName . $author;
  }

  function wipi_hook($courseName = 'wordpress',$author = 'wipi'){
    do_action('new_action_hook',$courseName,$author);
  }