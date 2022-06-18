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
                            <a href="<?php the_permalink(); ?>">
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