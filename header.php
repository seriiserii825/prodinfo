<!DOCTYPE html>
<html lang="ru_RU">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>

<header class="main-header">
    <div class="main-header-top">
        <div class="main-header-top__wrap address">
            <?php
                $phone = carbon_get_theme_option('crb_phone');
                $phoneClear = clear_phone($phone);
                $mail = carbon_get_theme_option('crb_mail');
                $address = carbon_get_theme_option('crb_address'.get_lang());
            ?>
            <div class="main-header-top__item address__item"><i class="fas fa-phone"></i><a href="tel:<?php echo $phoneClear; ?>"> <?php echo $phone; ?></a></div>
            <div class="main-header-top__item address__item"><i class="fas fa-envelope"></i><a href="mailto:<?php echo $mail; ?>"> <?php echo $mail; ?></a></div>
            <div class="main-header-top__item address__item"><i class="fas fa-map-marker-alt"></i><a href="#"> <?php echo $address; ?></a></div>
        </div>
    </div>
    <div class="main-header-bottom">
        <div class="container">
            <div class="main-header-bottom__wrap"><a class="logo" href="index.html">
                    <picture>
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/site/assets/i/logo.webp"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/logo.png" alt="">
                    </picture></a>
                <ul class="main-menu" id="js-main-menu">
                    <li class="current-menu-item"><a href="index.html#js-offers">Despre noi</a></li>
                    <li><a href="advantage.html">Avantajele membrilor</a></li>
                    <li><a href="our-members.html">Membrii</a></li>
                    <li><a href="news.html">Stiri</a></li>
                    <li><a href="contacts.html">Contacte</a></li>
                    <li><a href="single-news.html">Blog</a></li>
                </ul>
                <div class="sandwitch" id="js-sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
                <div class="flags-styled"><span class="flag wpglobus-current-language"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/ru.png"></span><span class="flag"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/us.png"></span><span class="flag"><img src="<?php echo get_template_directory_uri(); ?>/site/assets/i/ro.png"></span></div>
            </div>
        </div>
    </div>
</header>
