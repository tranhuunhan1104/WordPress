<?php
    global $theme_uri;
?>
<?php 
        $contact_email_header = get_theme_mod('contact_email_header');
        $contact_ship = get_theme_mod('contact_ship');
        $contact_facebook = get_theme_mod('contact_facebook');
        $contact_twitter = get_theme_mod('contact_twitter');
        $contact_linkedin = get_theme_mod('contact_linkedin');
        $contact_pinterest = get_theme_mod('contact_pinterest');

?>
<div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?= $contact_email_header?></li>
                                <li><?= $contact_ship?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6"> 
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="<?= $contact_facebook?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $contact_twitter?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?= $contact_linkedin?>"><i class="fa fa-linkedin"></i></a>
                                <a href="<?= $contact_pinterest?>"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="<?= $theme_uri ?>/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>