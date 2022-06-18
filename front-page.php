<?php get_header('index'); ?>
<div class="main-visual">
    <div class="header_content">
        <h1 class="header_logo"><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/logo_dark.png" alt=""></a></h1>
        <nav class="header_nav_content">
            <ul class="header_lists">
                <li class="header_list">
                    <a href="<?php echo home_url('/'); ?>">
                        <p class="header_list_name_en">TOP</p>
                        <p class="header_list_name_ja">トップ</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/concept'); ?>">
                        <p class="header_list_name_en">CONCEPT</p>
                        <p class="header_list_name_ja">コンセプト</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/menu'); ?>">
                        <p class="header_list_name_en">MENU</p>
                        <p class="header_list_name_ja">メニュー</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/news'); ?>">
                        <p class="header_list_name_en">NEWS</p>
                        <p class="header_list_name_ja">ニュース</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/shop'); ?>">
                        <p class="header_list_name_en">SHOP</p>
                        <p class="header_list_name_ja">店舗情報</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/gift'); ?>">
                        <p class="header_list_name_en">GIFT</p>
                        <p class="header_list_name_ja">ギフト・贈り物</p>
                    </a>
                </li>
                <li class="header_list">
                    <a href="<?php echo home_url('/contact'); ?>">
                        <p class="header_list_name_en">CONTACT</p>
                        <p class="header_list_name_ja">お問い合わせ</p>
                    </a>
                </li>
            </ul>
        </nav>

        <ul class="header_sns_lists">
            <li class="header_sns_list">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-dark.png" alt="">
                </a>
            </li>
            <li class="header_sns_list">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-dark.png" alt="">
                </a>
            </li>
            <li class="header_sns_list">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-dark.png" alt="">
                </a>
            </li>
        </ul>
    </div>

    <!-- Slides -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-img">
                    <picture>
                        <source media="(max-width:767px )" srcset="<?php echo get_template_directory_uri() ?>/img/img_mainvisual1_sp.png">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-img">
                    <picture>
                        <source media="(max-width:767px )" srcset="<?php echo get_template_directory_uri() ?>/img/img_mainvisual2_sp.png">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual2.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-img">
                    <picture>
                        <source media="(max-width:767px )" srcset="<?php echo get_template_directory_uri() ?>/img/img_mainvisual3_sp.png">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_mainvisual3.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <p class="main-visual_lead">
        パスタとコーヒーがとってもおいしい、<br>
        ほっと落ち着くのんびり空間。
    </p>
    <?php get_template_part('template/pickup_tag_by')?>
</div>
<!-- main-visual  -->
<!-- header  -->
<main class="main">
    <section class="concept">
        <div class="concept_inner inner">
            <div class="concept_content">
                <div class="concept_left">
                    <div class="concept_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_concept.png" alt=""></div>
                </div>
                <div class="concept_right">
                    <div class="section_group concept_section_group">
                        <h2 class="section-title">CONCEPT</h2>
                        <p class="section-lead">当店のこだわり</p>
                    </div>
                    <p class="concept-lead-top">最高のコーヒーと、<br> 時の流れを味わうことができる <br>手作りカフェ</p>
                    <p class="concept-lead-bottom">ダミー_国内外から賞賛を<br> 受けた選りすぐりの
                        デザイナーが集結し、ガーデニングの設計・建築から<br>料理まで、
                        あらゆる空間が誕生。<br> ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、
                        ガーデ<br>ニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br><br> ダミー_国内外から賞賛を
                        受けた選りすぐりのデザイナーが集結し、ガーデ<br>ニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                    <a href="<?php echo home_url('/concept');?>" class="section_more_btn_part concept_more_link">
                        <p class="section_more_btn_txt">詳しくはこちら</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- concept  -->
    <section class="concept2">
        <div class="concept2_inner inner">
            <div class="section_group">
                <h2 class="section-title">SPECIAL LUNCH SET</h2>
                <p class="section-lead">今日のスペシャルランチセット</p>
            </div>
            <div class="concept2_content">
                <div class="concept2_content_cards">
                    <div class="concept2_content_card">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_pasta1.png" alt="" class="concept2_content_card_img">
                        <div class="concept2_content_flex">
                            <p class="concept2_content_card_type">A</p>
                            <p class="concept2_content_txt">テキストテキストの○○風パスタ</p>
                        </div>
                    </div>
                    <div class="concept2_content_card">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_pasta2.png" alt="" class="concept2_content_card_img">
                        <div class="concept2_content_flex">
                            <p class="concept2_content_card_type">B</p>
                            <p class="concept2_content_txt">テキストテキストの○○風パスタ</p>
                        </div>
                    </div>
                    <div class="concept2_content_card">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_special_pasta3.png" alt="" class="concept2_content_card_img">
                        <div class="concept2_content_flex">
                            <p class="concept2_content_card_type">C</p>
                            <p class="concept2_content_txt">テキストテキストの○○風パスタ</p>
                        </div>
                    </div>
                    <div class="concept2_content_card">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_special_pasta4.png" alt="" class="concept2_content_card_img">
                        <div class="concept2_content_flex">
                            <p class="concept2_content_card_type">D</p>
                            <p class="concept2_content_txt">テキストテキストの○○風パスタ</p>
                        </div>
                    </div>
                </div>
                <div class="concept2_content_bottom">
                    <div class="concept2_content_bottom_flex">
                        <img src="<?php echo get_template_directory_uri() ?>/img/img_lunch-detail.png" alt="">
                        <div class="concept2_content_bottom_desc_group">
                            <p class="concept2_content_bottom_lead_top">スペシャルランチセット<br> 【選べる3品】</p>
                            <p class="concept2_content_bottom_lead_middle">1,280 yen</p>
                            <p class="concept2_content_bottom_lead_bottom">(11:00 AM〜14:00 PMまで)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- concept2  -->
    <section class="menu">
        <div class="menu_inner inner">
            <div class="menu_content">
                <div class="section_group menu_section_group">
                    <h2 class="section-title">GLAND MENU</h2>
                    <p class="section-lead">グランドメニュー</p>
                </div>
                <section class="menu-block">
                    <h3 class="menu_block_bar">パスタ</h3>
                    <ul class="menu_block_lists">
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_pasta1.png" alt="">
                            </div>
                            <p class="menu_block_list_title">テキストテキストテキストの○○○○風パスタ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_pasta2.png" alt="">
                            </div>
                            <p class="menu_block_list_title">テキストテキストの○○風パスタ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_salad3-1.png" alt="">
                            </div>
                            <p class="menu_block_list_title">テキストテキストの○○風パスタ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                    </ul>
                </section>
                <section class="menu-block">
                    <h3 class="menu_block_bar">サラダ</h3>
                    <ul class="menu_block_lists">
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_salad1.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○風サラダ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_salad2.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○風サラダ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_salad3.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○風サラダ</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                    </ul>
                </section>
                <section class="menu-block">
                    <h3 class="menu_block_bar">パン＆スイーツ</h3>
                    <ul class="menu_block_lists">
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_sweets1.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_sweets2.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_sweets3.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_sweets4.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_sweets5.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                        <li class="menu_block_list">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_drink.png" alt="">
                            </div>
                            <p class="menu_block_list_title">○○○○サンド</p>
                            <p class="menu_block_list_price">780 yen</p>
                        </li>
                    </ul>
                </section>
                <section class="menu-block">
                    <h3 class="menu_block_bar">ドリンク</h3>
                    <ul class="menu_block_lists">
                        <li class="menu_block_list_left">
                            <div class="menu_block_list_bg">
                                <img src="<?php echo get_template_directory_uri() ?>/img/img_drink1.png" alt="">
                            </div>
                            <p class="menu_block_list_title"></p>
                            <p class="menu_block_list_price"></p>
                        </li>
                        <div class="menu_block_list_right">
                            <ul class="menu_block_lists_drinks">
                                <li class="menu_block_list_drink">
                                    <h4 class="menu_block_drink_cat">コーヒー</h4>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">ブレンド</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">カフェラテ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">豆乳ラテ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">カフェモカ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">キャラメルラテ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">バニララテ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                </li>
                                <li class="menu_block_list_drink">
                                    <h4 class="menu_block_drink_cat">紅茶</h4>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">ストレート</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">ミルク</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">アップル</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                </li>
                                <li class="menu_block_list_drink">
                                    <h4 class="menu_block_drink_cat">ソフトドリンク</h4>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">バナナ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">オレンジ</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">アップル</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">マンゴー</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                    <div class="menu_drink_txt_field">
                                        <p class="menu_drink_name">ミックス</p>
                                        <p class="menu_drink_price">500 yen</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </section>
                <a href="<?php echo home_url('/menu');?>" class="section_more_btn_part menu_more_btn">
                    <p class="section_more_btn_txt">その他のメニュー</p>
                </a>
            </div>
        </div>
    </section>
    <!-- menu  -->
    <section class="gallery">
        <div class="gallery_inner inner">
            <div class="gallery_content">
                <div class="section_group gallery_head">
                    <h2 class="section-title">GALLERY</h2>
                    <p class="section-lead">ギャラリー</p>
                </div>
                <ul class="gallery_lists">
                    <li class="gallery_list"><img src="<?php echo get_template_directory_uri() ?>/img/img_gallery1.png" alt=""></li>
                    <li class="gallery_list"><img src="<?php echo get_template_directory_uri() ?>/img/img_gallery2.png" alt=""></li>
                    <li class="gallery_list"><img src="<?php echo get_template_directory_uri() ?>/img/img_gallery3.png" alt=""></li>
                    <li class="gallery_list"><img src="<?php echo get_template_directory_uri() ?>/img/img_gallery4.png" alt=""></li>
                </ul>
                <a href="" class="section_more_btn_part gallery_more_btn">
                    <p class="section_more_btn_txt">インスタグラムを見る</p>
                </a>
            </div>
        </div>
    </section>    
    <!-- /.gallery -->
    <section class="news">
        <div class="news_inner inner">
            <div class="news_content">
                <div class="section_group">
                    <h2 class="section-title">NEWS</h2>
                    <p class="section-lead">お知らせ</p>
                </div>
                <div class="news_content_lists">
                    <div class="news_content_list_large">
                        <article class="news_list_item">
                            <a href="<?php the_permalink('news');?>">
                                <p class="news_item_tag"><span>カテゴリー</span></p>
                                <div class="news_list_item_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_news1.png" alt=""></div>
                                <p class="news_list_item_title">
                                    ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                                <p class="news_list_item_txt">
                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                </p>  
                                <p class="news_list_item_date">2021.01.01</p>
                            </a>
                        </article>
                    </div>
                    <div class="news_content_list_small">
                        <article class="news_list_item">
                            <a href="">
                                <p class="news_item_tag"><span>カテゴリー</span></p>
                                <div class="news_list_item_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_news1.png" alt=""></div>
                                <p class="news_list_item_title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                <p class="news_list_item_date">2021.01.01</p>
                            </a>
                        </article>
                        <article class="news_list_item">
                            <a href="">
                                <p class="news_item_tag"><span>カテゴリー</span></p>
                                <div class="news_list_item_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_news1.png" alt=""></div>
                                <p class="news_list_item_title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                <p class="news_list_item_date">2021.01.01</p>
                            </a>
                        </article>
                        <article class="news_list_item">
                            <a href="">
                                <p class="news_item_tag"><span>カテゴリー</span></p>
                                <div class="news_list_item_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_news1.png" alt=""></div>
                                <p class="news_list_item_title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                <p class="news_list_item_date">2021.01.01</p>
                            </a>
                        </article>
                        <article class="news_list_item">
                            <a href="">
                                <p class="news_item_tag"><span>カテゴリー</span></p>
                                <div class="news_list_item_img"><img src="<?php echo get_template_directory_uri() ?>/img/img_news1.png" alt=""></div>
                                <p class="news_list_item_title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                                <p class="news_list_item_date">2021.01.01</p>
                            </a>
                        </article>
                    </div>
                </div>
                <a href="<?php echo home_url('/news');?>" target="_blank" class="section_more_btn_part news_more_btn">
                    <p class="section_more_btn_txt">過去のお知らせ</p>
                </a>
            </div>
        </div>
    </section>
    <!-- /.news -->
    <?php get_template_part('template/access');?>
</main>
<!-- main  -->
<?php get_footer(); ?>