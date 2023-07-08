<?php
    //dang ki style cho themes
    add_action('wp_enqueue_scripts','wp2023_theme_register_styles');
    function wp2023_theme_register_styles(){
        global $theme_prefix,$theme_uri,$theme_version;
        wp_enqueue_style($theme_prefix.'-style',$theme_uri,[],$theme_version);
        wp_enqueue_style($theme_prefix.'-google-font','https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap');
        wp_enqueue_style($theme_prefix.'-bootstrap-css',$theme_uri.'/css/bootstrap.min.css');
        wp_enqueue_style($theme_prefix.'-font-awesome-css',$theme_uri.'/css/font-awesome.min.css');
        wp_enqueue_style($theme_prefix.'-elegant-icons-css',$theme_uri.'/css/elegant-icons.css');
        wp_enqueue_style($theme_prefix.'-nice-select-css',$theme_uri.'/css/nice-select.css');
        wp_enqueue_style($theme_prefix.'-jquery-ui-min-css',$theme_uri.'/css/jquery-ui.min.css');
        wp_enqueue_style($theme_prefix.'-owl-carousel-min-css',$theme_uri.'/css/owl.carousel.min.css');
        wp_enqueue_style($theme_prefix.'-slicknav-min-css',$theme_uri.'//css/slicknav.min.css');
        wp_enqueue_style($theme_prefix.'-style-css',$theme_uri.'/css/style.css');
        wp_enqueue_style($theme_prefix.'-custom-css',$theme_uri.'/custom.css');
    }

//dang ki javascript cho theme
    add_action('wp_enqueue_scripts','wp2023_theme_register_scripts');
    function wp2023_theme_register_scripts(){
        global $theme_prefix,$theme_uri,$theme_version;
        wp_enqueue_script($theme_prefix.'-jquery',$theme_uri.'/js/jquery-3.3.1.min.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-bootstrap',$theme_uri.'/js/bootstrap.min.js',['jquery'],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-jquery-nice-select-min',$theme_uri.'/js/jquery.nice-select.min.js',['jquery'],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-jquery-ui-min',$theme_uri.'/js/jquery-ui.min.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-jquery-slicknav',$theme_uri.'/js/jquery.slicknav.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-mixitup-min',$theme_uri.'/js/mixitup.min.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-owl-carousel-min',$theme_uri.'/js/owl.carousel.min.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-main',$theme_uri.'/js/main.js',[],$theme_version,true);
        wp_enqueue_script($theme_prefix.'-custom-js',$theme_uri.'/custom.js',[],$theme_version,true);
        wp_localize_script($theme_prefix.'-custom-js', 'custom_js_object',
		array( 
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce('wp2023_add_to_cart')
		)
	);
      
    }

?>