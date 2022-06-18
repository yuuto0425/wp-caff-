<?php get_header(); ?>

<main class="main">
    <div class="menu_first_view first_view">
        <div class="first_view_body">
            <h1 class="first_view_title">
                <span class="first_view_title_en">MENU</span>
                <p class="first_view_title_ja">メニュー</p>
            </h1>
        </div>
    </div>
    <?php get_template_part('template/breadcrumbs'); ?>


    <div class="menu_wrapper">
        <div class="inner">
            <?php
            wp_nav_menu(array(
                'menu'            => 'menu-page-taxonomy-salad',
                'menu_class'      => 'nav_menu_items',
                'container'       => 'nav',
                'container_class' => 'inner',
                'before'          => '<span>',
                'after'           => '</span>',
                'echo'            => 'true',
                'depth'           => '1',
                'theme_location'  => 'メニューカテゴリー',
                // 'items_wrap'      => '出力されるulタグにID・クラス・内包されるliタグを含むのかを指定する'
            ));
            ?>
            <div class="menu_card_content">
            <ul class="menu_card_content_lists">
                    <?php if(have_posts()):?>
                    <?php while(have_posts()):the_post();?>
                    <li class="menu_card_content_list">
                        <article class="menu_card_content_list_article">
                            <a href="<?php the_permalink();?>">
                                <?php if (has_post_thumbnail()) {
                                            // サムネイル持っていたら
                                            the_post_thumbnail('thumbnail');
                                            // サムネイル表示
                                        } else {
                                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/img_news1.png"class="menu_card_content_list_article_img" alt="">';
                                            // なければデフォルト表示
                                        }
                                        ?>
                                <div class="menu_card_content_list_article_body"></div>
                                    <h3 class="menu_card_content_list_article_name"><?php the_title();?></h3>
                                    <p class="menu_card_content_list_article_price">780 yen</p>
                                </div>
                            </a>
                        </article>
                    </li>
                    <?php endwhile;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>

    <?php get_template_part('template/access'); ?>
</main>

<?php get_footer(); ?>