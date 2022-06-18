<?php get_header(); ?>

<main class="main">
    <div class="gift_first_view first_view">
        <div class="first_view_body">
            <h1 class="first_view_title">
                <span class="first_view_title_en">GIFT</span>
                <p class="first_view_title_ja">ギフト・贈り物</p>
            </h1>
        </div>
    </div>
    <?php get_template_part('template/breadcrumbs');?>

    <div class="gift_wrapper inner">
        <ul class="gift_lists_row_top">
            <div class="gift_list_top_pickup">
                <li class="gift_list_top">
                    <article class="gift_list_item_top">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item1.png" alt="">';
                        }
                        ?>
                    
                        <div class="gift_list_item_body_top">
                            <h3 class="gift_list_item_title_top"><?php the_title();?></h3>
                            <span class="gift_list_item_price_top"><?php the_field('price');?></span>
                            <a href="<?php the_permalink();?>" class="gift_list_item_link_top">ショップで確認する</a>
                        </div>
                    </article>
                </li>
            </div>
            <div class="gift_list_top_no_pickup">
                <li class="gift_list_top">
                    <article class="gift_list_item_top">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item2.png" alt="">';
                        }
                        ?>
                        <div class="gift_list_item_body_top">
                            <h3 class="gift_list_item_title_top"><?php the_title();?></h3>
                            <span class="gift_list_item_price_top"><?php the_field('price');?></span>
                            <a href="<?php the_permalink();?>" class="gift_list_item_link_top">ショップで確認する</a>
                        </div>
                    </article>
                </li>
                <li class="gift_list_top">
                <article class="gift_list_item_top">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item3.png" alt="">';
                        }
                        ?>
                        <div class="gift_list_item_body_top">
                            <h3 class="gift_list_item_title_top"><?php the_title();?></h3>
                            <span class="gift_list_item_price_top"><?php the_field('price');?></span>
                            <a href="<?php the_permalink();?>" class="gift_list_item_link_top">ショップで確認する</a>
                        </div>
                    </article>
                </li>
                <li class="gift_list_top">
                <article class="gift_list_item_top">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item4.png" alt="">';
                        }
                        ?>
                        <div class="gift_list_item_body_top">
                            <h3 class="gift_list_item_title_top"><?php the_title();?></h3>
                            <span class="gift_list_item_price_top"><?php the_field('price');?></span>
                            <a href="<?php the_permalink();?>" class="gift_list_item_link_top">ショップで確認する</a>
                        </div>
                    </article>
                </li>
                <li class="gift_list_top">
                <article class="gift_list_item_top">
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item5.png" alt="">';
                        }
                        ?>
                        <div class="gift_list_item_body_top">
                            <h3 class="gift_list_item_title_top"><?php the_title();?></h3>
                            <span class="gift_list_item_price_top"><?php the_field('price');?></span>
                            <a href="<?php the_permalink();?>" class="gift_list_item_link_top">ショップで確認する</a>
                        </div>
                    </article>
                </li>
            </div>
        </ul>
        <ul class="gift_lists_row_bottom">
            <li class="gift_list_bottom">
                <article class="gift_list_item_bottom">
                <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item6.png" alt="">';
                        }
                        ?>
                    <div class="gift_list_item_body_bottom">
                        <h3 class="gift_list_item_title_bottom"><?php the_title();?></h3>
                        <span class="gift_list_item_price_bottom"><?php the_field('price');?></span>
                        <a href="<?php the_permalink();?>" class="gift_list_item_link_bottom">ショップで確認する</a>
                    </div>
                </article>
            </li>
            <li class="gift_list_bottom">
            <article class="gift_list_item_bottom">
                <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item7.png" alt="">';
                        }
                        ?>
                    <div class="gift_list_item_body_bottom">
                        <h3 class="gift_list_item_title_bottom"><?php the_title();?></h3>
                        <span class="gift_list_item_price_bottom"><?php the_field('price');?></span>
                        <a href="<?php the_permalink();?>" class="gift_list_item_link_bottom">ショップで確認する</a>
                    </div>
                </article>
            </li>
            <li class="gift_list_bottom">
            <article class="gift_list_item_bottom">
                <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item8.png" alt="">';
                        }
                        ?>
                    <div class="gift_list_item_body_bottom">
                        <h3 class="gift_list_item_title_bottom"><?php the_title();?></h3>
                        <span class="gift_list_item_price_bottom"><?php the_field('price');?></span>
                        <a href="<?php the_permalink();?>" class="gift_list_item_link_bottom">ショップで確認する</a>
                    </div>
                </article>
            </li>
            <li class="gift_list_bottom">
            <article class="gift_list_item_bottom">
                <?php if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail');
                        }else {
                            echo '<img src="'.esc_url(get_template_directory_uri()).'/img/img_item8.png" alt="">';
                        }
                        ?>
                    <div class="gift_list_item_body_bottom">
                        <h3 class="gift_list_item_title_bottom"><?php the_title();?></h3>
                        <span class="gift_list_item_price_bottom"><?php the_field('price')?></span>
                        <a href="<?php the_permalink();?>" class="gift_list_item_link_bottom">ショップで確認する</a>
                    </div>
                </article>
            </li>
        </ul>
    </div>
    <div class="gift_info_wrapper">
        <div class="gift_info_wrap">
            <div class="gift_info">
                <div class="gift_info_body">
                    <div class="gift_info_body_left">
                        <span class="gift_info_body_left_top">ラッピングは無料でお付けいたします。 お気軽にご相談ください。</span>
                        <p class="gift_info_body_left_bottom">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                    </div>
                    <div class="gift_info_body_right">
                        <img src="<?php echo get_template_directory_uri();?>/img/img_wrapping.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_template_part('template/access');?>
</main>

<?php get_footer();?>