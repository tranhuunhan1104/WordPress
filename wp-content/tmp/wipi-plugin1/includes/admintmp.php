<?php
   class WipiAdmin{
        public function __construct(){
            add_action('admin_menu',array($this,'settingMenu5'));
            // add_action('admin_menu',array($this,'removeMenu'));
        }   
        //1 them sub menu vao dashboard cua wp
        public function settingMenu(){
            $menuSlug = 'wipi_plugin_my_setting';
            add_posts_page('My setting title','my setting','manage_options', $menuSlug,array($this,'settingPage'));
        }
        //2 them 1 nhom menu vao menu 
        public function settingMenu2(){
            $menuSlug = 'wipi_plugin_my_setting';
            add_menu_page('My setting title','my setting','manage_options', $menuSlug,array($this,'settingPage'),WIPI_PLUGIN_URL.'/images/icons8-settings-16.png');
            add_menu_page('My setting 2 title','my 2 setting','manage_options', $menuSlug.'-2',array($this,'settingPage'));
        }
        //3 them 1 nhom menu vao menu 
        public function settingMenu3(){
            $menuSlug = 'wipi_plugin_my_setting';
            add_menu_page('My setting title','my setting','manage_options', $menuSlug,array($this,'settingPage'),WIPI_PLUGIN_URL.'/images/icons8-settings-16.png');
            add_submenu_page($menuSlug,'About title', 'About', 'manage_options', $menuSlug.' about',array($this,'settingPage'));
        }
         //4 them 1 nhom menu vao vi tri bat ki trong menu
         public function settingMenu4(){
            $menuSlug = 'wipi_plugin_my_setting';
            add_menu_page('My setting title','my setting','manage_options', $menuSlug,array($this,'settingPage'),WIPI_PLUGIN_URL.'/images/icons8-settings-16.png',1);
            add_submenu_page($menuSlug,'About title', 'About', 'manage_options', $menuSlug.' about',array($this,'settingPage'));
        }
         //5 xoa menu trong admin
         public function removeMenu(){
            $menuSlug = 'wipi_plugin_my_setting';
            //xoa menu con trong admin
            remove_submenu_page($menuSlug, $menuSlug.' about' );
            //xoa menu cha trong admin
            remove_menu_page($menuSlug);
        }
          //6 them 1 nhom menu vao vi tri bat ki trong menu
          public function settingMenu5(){
            $menuSlug = 'wipi_plugin_my_setting';
            add_utility_page('My setting title','my setting','manage_options', $menuSlug,array($this,'settingPage'),WIPI_PLUGIN_URL.'/images/icons8-settings-16.png');
            add_submenu_page($menuSlug,'About title', 'About', 'manage_options', $menuSlug.' about',array($this,'settingPage'));
        }




        public function settingPage(){
           require_once WIPI_VIEWS_DIR . '/setting_page.php';
        }
        public function aboutPage(){
            echo '<h2>My about</h2>';
        }

    }