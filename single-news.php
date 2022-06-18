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
    <?php get_template_part('template/breadcrumbs'); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <?php $terms = get_the_terms($post->ID, 'news_category'); ?>
            <div class="single-news-wrapper single_news_inner">
                <div class="entry-area">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail');
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/img_news1.png" alt="">';
                    }
                    ?>
                    <h2 class="ttl"><?php the_title(); ?></h2>
                    <div class="entry-area-body">
                        <time datetime="the_time( 'Y-m-d' )"><?php the_time('Y.m.d'); ?></time>
                        <?php if (!empty($terms)) : ?>
                            <?php foreach ($terms as $term) : ?>
                                <span class="category"><?php echo $term->name; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="entry-area-content">
                        <!-- //この表示タグ部分は自由 -->
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
        endwhile;
    endif;
        ?>

        <!-- ナビゲーションnext,prev -->
        <!-- 記事一覧リンク -->

        <ul class="single_news_nav_link">
            <li class="single_news_nav_prev_link"><?php previous_post_link(' %link', '前の記事'); ?></li>
            <li class="single_news_nav_archive_link"><a href="<?php echo get_post_type_archive_link( 'news' ); ?>">記事一覧</a></li>
            <li class="single_news_nav_next_link"><?php next_post_link('%link ', '次の記事へ'); ?></li>
        </ul>


        <?php
        global $post;
        $args = array(
            'numberposts' => 6, //８件表示(デフォルトは５件)
            'post_type' => 'news', //カスタム投稿タイプ名
            'orderby' => 'rand', //ランダム表示
            'post__not_in' => array($post->ID) //表示中の記事を除外
        );
        ?>
        <h2 class="related-title">関連記事</h2>
        <?php $myPosts = get_posts($args);
        if ($myPosts) : ?>
            <ul class="related-lists">
                <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
                    <li class="related-list">
                        <article class="related-area">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail(array(150, 100));
                                } else {
                                    echo '<img class="related-area-img" src="' . esc_url(get_template_directory_uri()) . '/img/img_news1.png" alt="">';
                                }
                                ?>
                                <h3 class="related-area-title">
                                    <?php the_title(); ?>
                                </h3>
                                <time class="related-area-time" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                            </a>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>関連アイテムはまだありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
            </div>

            <?php get_template_part('template/access'); ?>
</main>

<?php get_footer(); ?>