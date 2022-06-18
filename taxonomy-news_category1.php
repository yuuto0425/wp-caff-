<?php get_header(); ?>

<main class="main">
    <div class="news_first_view first_view">
        <div class="first_view_body">
            <h1 class="first_view_title news_first_view_title">
                <span class="first_view_title_en">NEWS</span>
                <p class="first_view_title_ja">お知らせ</p>
            </h1>
        </div>
    </div>
    <!-- パンくずリストbreadcrumbs -->
    <div class="breadcrumb">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
        ?>
    </div>

    <div class="news_wrapper_column_contents inner">
        <div class="news_wrapper_column_contents_left">
            <h2 class="news_category_title"><?php 
            $category = get_the_category();
            $cat_name = $category[0]-> cat_name;
            echo $cat_name;?></h2>

            <ul class="news_lists">
                <?php
                $args = array(
                    'posts_per_page' => 5, // 表示する投稿数
                    'post_type' => 'news', // 取得する投稿タイプのスラッグ
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <li class="news_list">
                        <article class="news_list_card">
                            <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">
                                <!-- 記事リンク -->
                                <?php
                                $term = get_the_terms($post->ID, 'news_category');
                                echo '<p class="news_list_card_tag">' . $term[0]->name . '</p>';
                                ?>
                                <?php if (has_post_thumbnail()) {
                                    // サムネイル持っていたら
                                    the_post_thumbnail('thumbnail');
                                    // サムネイル表示
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/img_news1.png" alt="">';
                                    // なければデフォルト表示
                                }
                                ?>
                                <div class="news_list_card_body">
                                    <h3 class="news_list_card_title"><?php the_title(); ?></h3>
                                    <time datetime="<?php the_time('c'); ?>" class="news_list_card_date"><?php the_time('Y年n月j日'); ?></time>
                                </div>
                            </a>
                        </article>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>

            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
            ?>
                <!-- pagenation -->
                <div class="news_paginate_items">
                    <?php
                    echo
                    paginate_links(
                        array(
                            'end_size' => 0,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-prev.png">',
                            'next_text' => '<img src="' . get_template_directory_uri() . '/img/arrow-next.png">',
                        )
                    );
                    ?>
                </div><!-- /pagenation -->
            <?php endif; ?>
        </div>
        <aside class="news_wrapper_column_contents_right">
            <div class="news_aside_block">
                <h2 class="news_aside_block_title">最近の記事</h2>
                <?php
                $args = array(
                    'posts_per_page' => 5, // 表示する投稿数
                    'post_type' => 'news', // 取得する投稿タイプのスラッグ
                );
                $my_posts = get_posts($args);
                ?>
                <ul class="news_aside_block_card_items">
                    <?php foreach( $my_posts as $post ): setup_postdata($post);?>
                    <li class="news_aside_block_card_item">
                        <article class="news_aside_block_card_article">
                            <a href="">
                                <?php if(has_post_thumbnail()) {
                                    the_post_thumbnail(array(100,100));
                                }else {
                                    echo '<img src="'. esc_url(get_template_directory_uri()).'/img/img_news1.png" alt="">';
                                }
                                ?>
                                <div class="news_aside_block_card_body">
                                    <h3 class="news_aside_block_card_title"><?php the_title();?></h3>
                                    <time datetime="<?php the_time('c')?>" class="news_aside_block_card_date"><?php the_time('Y年n月j月')?></time>
                                </div>
                            </a>
                        </article>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="news_aside_block">
                <h2 class="news_aside_block_title">カテゴリ</h2>
                <ul class="news_aside_block_category_lists">
                    <?php
                    $terms = get_terms('news_category');
                    foreach ($terms as $term) {
                        echo '<li class="news_aside_block_category_list"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </aside>


    </div>

    <?php get_template_part('template/access');?>
</main>

<?php get_footer(); ?>