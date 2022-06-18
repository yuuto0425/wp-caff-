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
    <?php get_template_part('template/breadcrumbs');?>

    <div class="news_wrapper_column_contents inner">
        <div class="news_wrapper_column_contents_left">
            <!-- <h2 class="news_category_title">カテゴリー名</h2> -->
            <ul class="news_lists">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <li class="news_list">
                            <article class="news_list_card">
                                <a href="<?php the_permalink(); ?>">
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
                <?php endwhile;
                endif; ?>
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
                            'prev_text' => '',
                            'next_text' => '',
                        )
                    );
                    ?>
                </div><!-- /pagenation -->
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>


    </div>

    <?php get_template_part('template/access');?>
</main>

<?php get_footer(); ?>