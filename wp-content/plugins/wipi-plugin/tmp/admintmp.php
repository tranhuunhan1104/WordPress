<?php
   class WipiAdmin{
    private $_menuSlug = 'Wipi_plugin_my_setting';
    private $_setting_option;
        public function __construct(){
            $this->_setting_option = get_option('Wipi_name',array());
            // echo "<pre>";
            // print_r( $this->_setting_option);
            // echo "</pre>";
            // die();
            add_action('admin_menu',array($this,'settingMenu'));
            add_action('admin_init',array($this,'register_setting_and_fields'));
        }  

        public function register_setting_and_fields(){
            register_setting('Wipi_option','Wipi_name', array($this,'validate_setting'));
                //Main setting
            $mainSection = 'wipi_main_section';
            add_settings_section($mainSection,'Main setting : ',array($this,'main_section_view'),$this->_menuSlug);
            add_settings_field('wipi_new_title', 'Site title : ', array($this,'new_title_input'),$this->_menuSlug,$mainSection);

                //Extend setting
            $mainSection2 = 'wipi_main_ext_section';
            add_settings_section($mainSection2,'Slogan : ',array($this,'main_section_view'),$this->_menuSlug);
            add_settings_field('slogan_input', 'Slogan : ', array($this,'slogan_input'),$this->_menuSlug,$mainSection2);

            
        }

        public function new_title_input(){
            echo '<input type="text" name="Wipi_name[wipi_new_title]" value="'.$this->_setting_option['wipi_new_title'].'"/>';
        }
    
        public function slogan_input(){
            $val = get_option('slogan_input');
            echo '<input type="text" name="slogan_input" value="'.$val.'"/>';
        }
        public function security_input(){
            echo '<input type="text" name="Wipi_name[wipi_security_code]" value=""/>';
        }
        public function main_section_view(){

        }
         
        public function settingMenu(){
            $menuSlug = 'Wipi_plugin_my_setting';
            add_menu_page('My Setting title', 'My Setting', 'manage_options',$menuSlug,array($this,'settingPage'));
        }

        public function settingPage(){
            require_once WIPI_VIEWS_DIR . '/setting_page.php';
        }
        public function validate_setting($data){
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            update_option('slogan_input',$_POST['slogan_input']);
            // die();
            return $data;
        }







        // public function update_autoload(){
        //     $old_option = get_option('Wipi_mp_wp_courser');
        //     delete_option('Wipi_mp_wp_courser');
        //     add_option('Wipi_mp_wp_courser', $old_option, '' , 'yes');
        // } 
        // public function remove_option(){
        //     delete_option('Wipi_mp_wp_courser');
        //     delete_option('wipi_plugin_version');
        //     delete_option('wipi_version');
        // }
        // public function update_option1(){
        //     $old_option = get_option('Wipi_mp_wp_courser');
        //     // echo "<pre>";
        //     // print_r($old_option);
        //     // echo "</pre>";
        //     $old_option['courser'] = 'wordpress55';
        //     update_option('Wipi_mp_wp_courser',$old_option);
        // } 
        // public function update_option(){
        //     update_option('wipi_plugin_version','4.5');
        //     $array_options = array(
        //         'courser' => 'wordpress 4.8',
        //         'auther' => 'WIPI',
        //         'website' => 'abc'
        //       );
        //       update_option('Wipi_mp_wp_courser',$array_options);
        // } 
        // public function get_option(){
        //     $tmp = get_option('wipi_plugin_version','3.0');
        //     echo '</br>' . $tmp ;
        // }
        // public function add_new_option(){
        //     add_option('wipi_plugin_version','4.0','','yes');
        //     add_option('wipi_version','1.0','','no');
        // }
        // public function add_array_option(){
        //   $array_options = array(
        //     'courser' => 'wordpress 4.x',
        //     'auther' => 'WIPI',
        //     'website' => 'abc'
        //   );
        //   add_option('Wipi_mp_wp_courser',$array_options,'','yes');
        // }
       
    }