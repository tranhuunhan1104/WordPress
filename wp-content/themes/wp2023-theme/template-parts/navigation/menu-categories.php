<div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <?php 
    
                                wp_nav_menu([
                                    'theme_location' => 'vertical',
                                    'menu_class' => 'menu_wrapper',
                                    'items_wrap' => '<ul class="%2$s" id="departments-menu-ul">%3$s</ul>',
                                    'fallback_cb' => false
                                ])

                        ?>
                    </div>