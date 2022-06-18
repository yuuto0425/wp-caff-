<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="<?php  bloginfo('description');?>">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css"> -->
    <!-- <link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&family=Patua+One&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->

    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <button id="js-menu-btn" class="drawer_menu_btn ">
            <div class="drawer_menu_btn_bar_content">
                <div class="drawer_menu_btn_bar1"></div>
                <div class="drawer_menu_btn_bar2"></div>
                <div class="drawer_menu_btn_bar3"></div>
            </div>
        </button>
        <div class="drawer_content">
            <p>
                <a href="<?php echo home_url('/'); ?>" class="drawer_content_logo"></a>
            </p>

            <div class="drawer_content_body">
                <div class="drawer_content_nav">
                    <ul class="drawer_content_nav_items">
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/'); ?>">
                                <span class="drawer_content_nav_item_en">TOP</span>
                                <span class="drawer_content_nav_item_ja">トップ</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/concept'); ?>">
                                <span class="drawer_content_nav_item_en">CONCEPT</span>
                                <span class="drawer_content_nav_item_ja">コンセプト</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/menu'); ?>">
                                <span class="drawer_content_nav_item_en">MENU</span>
                                <span class="drawer_content_nav_item_ja">メニュー</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/news'); ?>">
                                <span class="drawer_content_nav_item_en">NEWS</span>
                                <span class="drawer_content_nav_item_ja">お知らせ</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/shop'); ?>">
                                <span class="drawer_content_nav_item_en">SHOP</span>
                                <span class="drawer_content_nav_item_ja">店舗情報</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/gift'); ?>">
                                <span class="drawer_content_nav_item_en">GIFT</span>
                                <span class="drawer_content_nav_item_ja">ギフト・贈り物</span>
                            </a>
                        </li>
                        <li class="drawer_content_nav_item">
                            <a href="<?php echo home_url('/contact'); ?>">
                                <span class="drawer_content_nav_item_en">CONTACT</span>
                                <span class="drawer_content_nav_item_ja">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="drawer_content_sns_items">
                    <li class="drawer_content_sns_item">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-light.png" alt="">
                        </a>
                    </li>
                    <li class="drawer_content_sns_item">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-light.png" alt="">
                        </a>
                    </li>
                    <li class="drawer_content_sns_item">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-light.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="drawer_background"></div>
    </header>