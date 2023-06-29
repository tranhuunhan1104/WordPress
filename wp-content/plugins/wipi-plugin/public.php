<?php
     class Wipi{    
        public function __construct(){

                // 1. ham thay doi toan bo title trong hook "the_title"
                add_filter('the_content', array($this, 'changeString'));
                add_filter('the_title', array($this, 'changeString'));

                // hien thi cac action dang thuc thi trong hook
        }
        public function changeString($text){
            //xu li content

            if(current_filter() == 'the_title'){
                if (!is_page()) {
                    $text = '- my title';
                }
                echo '</br>' . ' dang su dung hook the_title';
            }
            if (current_filter() == 'the_content') {
                $text = str_replace('Đây là trang mẫu','Day la bai viet cua Wipi',$text);
            }
            return $text;
        }
    }