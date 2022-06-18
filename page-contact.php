<?php get_header(); ?>

<main class="main">
    <div class="contact_first_view first_view">
        <div class="first_view_body">
            <h1 class="first_view_title">
                <span class="first_view_title_en">CONTACT</span>
                <p class="first_view_title_ja">お問い合わせ</p>
            </h1>
        </div>
    </div>
    <?php get_template_part('template/breadcrumbs');?>

    <div class="contact_wrapper inner">
        <div class="contact_head">
            <h2 class="contact_title">お問い合わせフォーム</h2>
            <p class="contact_lead">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
        </div>
        <div class="contact_content">
            <?php the_content();?>
            <!-- <div id="js-success" class="contact_message">
                <p></p>
            </div> -->
            <!-- <div id="js-error" class="contact_message -error">
                <p></p>
            </div> -->
        </div>
    </div>

<?php get_template_part('template/access');?>
</main>

<?php get_footer(); ?>