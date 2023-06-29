<?php
     class Wipi{    
        public function __construct(){
                // echo "</br>" .  __METHOD__;

                // 1. ham thay doi toan bo title trong hook "the_title"
                // add_filter('the_title', array($this, 'theTitle'));

                // =========================

                // 2. ham su dung 2 tham so cua hook "the_title"
                // add_filter('the_title', array($this, 'theTitle2'),10,2);

                // =========================

                // 3. ham su dung 2 tham so cua hook "the_title"
                // add_filter('the_title', array($this, 'theTitle3'),10,2);

                // =========================

                // 4. sử dụng tham số the_content trong hook 'the_content'
                // add_filter('the_content', array($this, 'changeContent'),10,1);

                // =========================

                // 5. sử dụng tham số the_content trong hook 'the_content'
                // add_filter('the_content', array($this, 'changeContent2'),10,1);

                // =========================

                // 6. sử dụng tham số the_content trong hook 'the_content'
                add_filter('the_content', array($this, 'changeContent3'),10,1);
        }

        // 1. ham thay doi toan bo title trong hook "the_title"
        public function theTitle(){
            $str = 'Thay doi tieu de cua bai viet';
            return $str;
        }

         // 2. ham su dung 2 tham so cua hook "the_title"
         public function theTitle2($title,$id){
            if($id == 1){
               $title = str_replace("Chào tất cả","Xin chao",$title);
            }
            return $title;
        }

         // 3. ham su dung 2 tham so cua hook "the_title"
         public function theTitle3($title,$id){
            if($id == 1){
               $title = "Hello word";
            }
            return $title;
        }

         // 4. sử dụng tham số the_content trong hook 'the_content'
         public function changeContent($content){
           $content .= 'Đây là bài viết của wipi corp';
            return $content;
        }

         // 5. sử dụng tham số the_content trong hook 'the_content'
         public function changeContent2($content){
           $content .= str_replace('WordPress','<u>WP</u>',$content);
            return $content;
        }

         // 5. sử dụng tham số the_content trong hook 'the_content'
         public function changeContent3($content){
            global $post;
           
            if($post->post_type == "page"){

                $content .= 'day la bai viet cua wipi';
            }
            return $content;
        }
     }