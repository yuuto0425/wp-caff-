<div class="main-visual_pickup_content">
    <?php
    $pickup_posts = get_posts(array(
        'post_type' => 'news', // カスタム投稿タイプ名
        'posts_per_page' => '1', // 1件取得
        // 'tag' => 'pickup', // pickupタグがついたものを
        'orderby' => 'DESC', // 新しい順に
        'tax_query' => array(
            array(
                'taxonomy' => 'news_category',
                'field' => 'slug',
                'terms' => 'pickup'
            )
        )
    ));
    ?>
    <?php if ($pickup_posts) : ?>
        <?php foreach ($pickup_posts as $post) : setup_postdata($post); ?>
            <!-- //カテゴリーのリンクの出力 -->
            <a href="<?php echo esc_url(get_permalink()); ?>" class="main-visual_body">
                <div class="main-visual_img">
                    <?php
                    if ($terms = get_the_terms($post->ID, 'news_category')) {
                        foreach ($terms as $term) {
                            echo ('<p class="mainvisual_cat_tag">');
                            echo esc_html($term->name);
                            echo ('</p>');
                        }
                    }
                    ?>
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(array(100, 100));
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/img_mainvisual1.png" alt="">';
                    }
                    ?>
                </div>
                <div class="main-visual_body_right">
                    <time datetime="<?php the_time('c') ?>" class="date-time"><?php the_time('Y.m.d') ?></time>
                    <!-- datetimeの記述 -->
                    <h2 class="main-visual_pickup_txt_field"><?php the_title(); ?></h2>
                </div>
            </a>
    <?php endforeach;
    endif;
    wp_reset_postdata(); ?>
</div>