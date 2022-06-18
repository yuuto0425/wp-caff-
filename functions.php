<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );


/**
 * CSSとJavaScriptの読み込み
 */
// function my_script_init()
// {
// wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
// wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
// wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'my_script_init');

function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  // wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
  wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

  wp_enqueue_script('js-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
  // wp_enqueue_script('js-wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
  // wp_enqueue_script('script-name', get_template_directory_uri() . '/js/swiper.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'menu'=>'メニューカテゴリー'
    )
  );
}
add_action('init', 'my_menu_init');



// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

//お問い合わせと送信完了（固定ページ）のスラッグをセットする
$contact = 'contact';
$thanks = 'thanks';

//お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  global $contact;
  global $thanks;

  if( is_page($contact)  ) {
  ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('/'.$contact.'/'.$thanks); ?>'; // 遷移先のURL
    }, false );
  </script>
  <?php }
}

//固定ページにカテゴリーを設定できるようにする。
add_action( 'init', 'my_add_pages_categories' ) ; 
function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}
add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}
