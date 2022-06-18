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
    <!-- パンくずリストbreadcrumbs -->
    <?php get_template_part('template/breadcrumbs');?>

    <div class="contact_thanks_content">
        <span class="contact_thanks">送信が完了しました</span>
        <div class="contact_thanks_lead_body">
            <p class="contact_thanks_lead">お問い合わせありがとうございました。<br> 3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</p>
        </div>
    </div>
    <?php get_template_part('template/access');?>
</main>

<?php get_footer(); ?>