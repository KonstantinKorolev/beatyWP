<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; echo bloginfo('description'); ?></title>
    <meta name="title" content="Салон красоты 'Красота & Стиль'">
    <meta name="description" content="Сайт салона красоты 'Красота & Стиль'">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
        wp_head();
    ?>
</head>
<body>
    <div class="menu">
        <div class="menu__block">
            <div class="menu__close">
                <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.1568 14.5231L28.4489 3.23075C29.1837 2.49623 29.1837 1.30861 28.4489 0.574085C27.7144 -0.160437 26.5267 -0.160437 25.7922 0.574085L14.4998 11.8665L3.20781 0.574085C2.47295 -0.160437 1.28567 -0.160437 0.551149 0.574085C-0.183716 1.30861 -0.183716 2.49623 0.551149 3.23075L11.8432 14.5231L0.551149 25.8155C-0.183716 26.55 -0.183716 27.7376 0.551149 28.4721C0.917206 28.8385 1.39852 29.0226 1.87948 29.0226C2.36045 29.0226 2.84141 28.8385 3.20781 28.4721L14.4998 17.1798L25.7922 28.4721C26.1586 28.8385 26.6396 29.0226 27.1205 29.0226C27.6015 29.0226 28.0825 28.8385 28.4489 28.4721C29.1837 27.7376 29.1837 26.55 28.4489 25.8155L17.1568 14.5231Z" fill="black"/>
                </svg>
            </div>

            <nav>
                <ul class="menu__list">
                    <div class="menu__wrapper">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/phone.png" alt="phone" width="20" height="20">
                        <li class="menu__link"><a href="tel:0-000-000-00">0-(000)-000-00</a></li>
                    </div>
                    <div class="menu__wrapper">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/whatsapp.png" alt="whatsapp" width="20" height="20">
                        <li class="menu__link"><a href="tel:0-000-000-00">0-(000)-000-00</a></li>
                    </div>
                </ul>
            </nav>

            <div class="menu__social">
                <!--
                                   <a href="https://github.com/KonstantinKorolev">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0C4.475 0 0 4.36167 0 9.74107C0 14.0457 2.865 17.6962 6.8375 18.9832C7.3375 19.0749 7.52083 18.7734 7.52083 18.5148C7.52083 18.2835 7.5125 17.6706 7.50833 16.8585C4.72667 17.4459 4.14 15.5517 4.14 15.5517C3.685 14.4274 3.0275 14.1267 3.0275 14.1267C2.12167 13.5228 3.0975 13.5352 3.0975 13.5352C4.10167 13.603 4.62917 14.5389 4.62917 14.5389C5.52083 16.0283 6.97 15.5979 7.54167 15.3493C7.63167 14.719 7.88917 14.2903 8.175 14.0466C5.95417 13.8029 3.62 12.9652 3.62 9.23304C3.62 8.16988 4.0075 7.30085 4.64917 6.61934C4.53667 6.37317 4.19917 5.3827 4.73667 4.04116C4.73667 4.04116 5.57417 3.78012 7.48667 5.03988C8.28667 4.82345 9.13667 4.71606 9.98667 4.7111C10.8367 4.71606 11.6867 4.82345 12.4867 5.03988C14.3867 3.78012 15.2242 4.04116 15.2242 4.04116C15.7617 5.3827 15.4242 6.37317 15.3242 6.61934C15.9617 7.30085 16.3492 8.16988 16.3492 9.23304C16.3492 12.9752 14.0117 13.7987 11.7867 14.0383C12.1367 14.3307 12.4617 14.928 12.4617 15.8408C12.4617 17.1444 12.4492 18.1918 12.4492 18.5082C12.4492 18.7635 12.6242 19.0683 13.1367 18.9708C17.1375 17.692 20 14.0391 20 9.74107C20 4.36167 15.5225 0 10 0Z" fill="#212121"/>
                        </svg>                        
                </a>
                <a href="https://www.instagram.com/k.korolevv/">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7495 0L6.24951 0C2.79826 0 -0.000488281 2.79875 -0.000488281 6.25L-0.000488281 13.75C-0.000488281 17.2013 2.79826 20 6.24951 20L13.7495 20C17.2008 20 19.9995 17.2013 19.9995 13.75L19.9995 6.25C19.9995 2.79875 17.2008 0 13.7495 0ZM18.1245 13.75C18.1245 16.1625 16.162 18.125 13.7495 18.125L6.24951 18.125C3.83701 18.125 1.87451 16.1625 1.87451 13.75L1.87451 6.25C1.87451 3.8375 3.83701 1.875 6.24951 1.875L13.7495 1.875C16.162 1.875 18.1245 3.8375 18.1245 6.25L18.1245 13.75Z" fill="black"/>
                        <path d="M9.99951 5C7.23826 5 4.99951 7.23875 4.99951 10C4.99951 12.7613 7.23826 15 9.99951 15C12.7608 15 14.9995 12.7613 14.9995 10C14.9995 7.23875 12.7608 5 9.99951 5ZM9.99951 13.125C8.27701 13.125 6.87451 11.7225 6.87451 10C6.87451 8.27625 8.27701 6.875 9.99951 6.875C11.722 6.875 13.1245 8.27625 13.1245 10C13.1245 11.7225 11.722 13.125 9.99951 13.125Z" fill="black"/>
                        <path d="M15.3745 5.29123C15.7425 5.29123 16.0408 4.99295 16.0408 4.62499C16.0408 4.25703 15.7425 3.95874 15.3745 3.95874C15.0065 3.95874 14.7083 4.25703 14.7083 4.62499C14.7083 4.99295 15.0065 5.29123 15.3745 5.29123Z" fill="black"/>
                        </svg>
                </a>
                -->
                <a href="#">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/vk-svgrepo-com.svg" alt="vk">                        
                </a>
            </div>
        </div>
        <div class="menu__overlay"></div>
    </div>

<header class="top_menu">
        <div class="container">
            <div class="row">
                <div class="top_menu__contact">
                    <a href="mailto:<?php the_field('mail', 2); ?>subject=Вопрос" class="top_menu__contact__email col-2 col-xl-3 col-lg-1 col-md-1 col-sm-2"><?php the_field('mail', 2); ?></a>
                    <div class="top_menu__contact__number col-3 col-xl-4 col-lg-3 col-md-3 col-sm-3">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/phone.png" alt="phone">
                        <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a>
                    </div>
                    <div class="top_menu__contact__whatsapp col-3 col-xl-3 col-lg-4 col-md-3 col-sm-3">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/whatsapp.png" alt="whatsapp">
                        <a href="<?php the_field('whatsapp', 2); ?>"><?php the_field('whatsapp', 2); ?></a>
                    </div>
                    <div class="top_menu__wrapper offset-xl-2">
                        <div class="top_menu__contact__title">Социальные сети:</div>
                        <a href="#" class="top_menu__contact__vk-link"><img class="vk-icon" src="<?php echo bloginfo('template_url'); ?>/assets/icons/social/vk-svgrepo-com.svg" alt="vk"></a>
                    </div>
                </div>
            </div>
            <div class="hamburger">
                <span></span>
                <span class="long"></span>
                <span></span>
            </div>
        </div>
</header>