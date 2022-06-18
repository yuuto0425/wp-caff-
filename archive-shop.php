<?php get_header(); ?>

<main class="main">
    <div class="shop_first_view first_view">
        <div class="first_view_body">
            <h1 class="first_view_title">
                <span class="first_view_title_en">SHOP</span>
                <p class="first_view_title_ja">店舗一覧</p>
            </h1>
        </div>
    </div>
    <?php get_template_part('template/breadcrumbs');?>
    <?php if(have_posts()):
        while(have_posts()): the_post();?>
    <section class="access access_shop_wrapper">
        <div class="access_inner inner">
            <div class="access_content">
                <div class="section_group access_section_head access_shop_section_head">
                    <h2 class=" access_shop_section_title"><?php the_title();?></h2>
                </div>
                <div class="access_map">
                    <iframe
                        src="<?php the_field('map');?>"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </div>
                <div class="access_info_column">
                    <dl class="access_info_column_lists">
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">住所</dt>
                            <dd class="access_info_column_dd"><?php the_field('address')?></dd>
                        </div>
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">TEL</dt>
                            <dd class="access_info_column_dd"><?php the_field('tel')?></dd>
                        </div>
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">Mail</dt>
                            <dd class="access_info_column_dd"><?php the_field('email')?></dd>
                        </div>
                    </dl>
                    <dl class="access_info_column_lists">
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">営業時間</dt>
                            <dd class="access_info_column_dd"><?php the_field('time');?></dd>
                        </div>
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">定休日</dt>
                            <dd class="access_info_column_dd"><?php the_field('rest-date')?></dd>
                        </div>
                        <div class="access_info_column_row">
                            <dt class="access_info_column_dt">座席</dt>
                            <dd class="access_info_column_dd"><?php the_field('zaseki')?></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;?>
<?php get_template_part('template/access');?>
</main>

<?php get_footer();?>