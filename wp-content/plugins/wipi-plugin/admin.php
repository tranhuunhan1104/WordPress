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
            add_settings_field('wipi_new_title', 'Site title : ', array($this,'create_form'),$this->_menuSlug,$mainSection,array('name'=>'new_title_input'));

            add_settings_field('logo_input', 'Logo : ', array($this,'create_form'),$this->_menuSlug,$mainSection,array('name'=>'logo_input'));


            // $tmp = get_settings_errors($this->_menuSlug,true);
            // echo "<pre>";
            // print_r($tmp);
            // echo "</pre>";
            // die();
            
        }
        
        public function create_form($args){
            if($args['name'] == 'new_title_input'){
                echo '<input type="text" name="Wipi_name[wipi_new_title]"  value="'.$this->_setting_option['wipi_new_title'].'"/>';
                echo '<p class="description"> chuoi nhap khong qua 20 ki tu </p>';

            }
            if($args['name'] == 'logo_input'){
                echo '<input type="file" name="logo_input" value=""/>';
                if(!empty($this->_setting_option['logo_input'])){
                    echo '<p class="description">Chi duoc phep nhap cac dinh dang JPG, PNG, GIF </p>';
                    echo '<img src="'.$this->_setting_option['logo_input'].'" width="200"/> ';
                }

            }
        }

        public function validate_setting($data){
            // mang chua cac thong bao loi cua mang
            $errors = array();

                if( $this->stringMaxValidate($data['wipi_new_title'],20) == false){
                    $errors['wipi_new_title'] = "Site title : chuoi nhap dai qua so voi quy dinh !";
                }
                // echo $errors['wipi_new_title'];
                // die();

                if(!empty( $_FILES['logo_input']['name'])){
                    if( $this->fileExtionsValidate($_FILES['logo_input']['name'],"JPG|PNG|GIF") == false){
                        $errors['logo_input'] = "Logo : Khong dung dinh dang da quy dinh !";
                    }else{
                        if(!empty($this->_setting_option['logo_input_path'])){
                                    @unlink($this->_setting_option['logo_input_path']);
                                    $override = array('test_form'=> false);
                                    $fileInfo = wp_handle_upload($_FILES['logo_input'],$override);
                                    $data['logo_input'] = $fileInfo['url'];
                                    $data['logo_input_path'] = $fileInfo['file'];
                                }
                    }
                }else{
                    $data['logo_input'] = $this->_setting_option['logo_input'];
                    $data['logo_input_path'] = $this->_setting_option['logo_input_path'];
                }


                if(count($errors) > 0){
                    $data = $this->_setting_option;
                    $strError = '';
                    foreach( $errors as $key => $value ){
                        $strError .= $value .'</br>';
                    }
                    add_settings_error($this->_menuSlug,'my-setting',$strError,'error');
                }else{
                    add_settings_error($this->_menuSlug,'my-setting','Cap nhat du lieu thanh cong','updated');
                }
                return $data;

            // die();
           
            
        }
        // kiem tra do dai cua chuoi
        private function stringMaxValidate($val,$max){
            $flag = false;

            $str = trim($val);

            if(strlen($str) <= $max){
                $flag = true;
            }

            return $flag;

        }

        // kiem tra phan mo rong cua tap tin
        private function fileExtionsValidate($fileName, $fileType){
            $flag = false;
            $pattern = '/^.*\.('. strtolower($fileType) . ')$/i';
            if(preg_match($pattern,strtolower($fileName)) == 1){
                $flag = true;
            }
            return $flag;
        }


        public function main_section_view(){

        }
         
        public function settingMenu(){
            $menuSlug = 'Wipi_plugin_my_setting';
            // add_options_page('My Setting title', 'My Setting', 'manage_options',$menuSlug,array($this,'settingPage'));

            add_menu_page('My Setting title', 'My Setting', 'manage_options',$menuSlug,array($this,'settingPage'));
        }

        public function settingPage(){
            require_once WIPI_VIEWS_DIR . '/setting_page.php';
        }

        // kiem tra cac dieu kien cua du lieu khi luu vao DB
       







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