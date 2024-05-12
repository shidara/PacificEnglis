<?php

// 子テーマ有効化
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('parent-cart', get_template_directory_uri() . '/usces_cart.css', array('parent-style', 'usces_default_css'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/* ---------- カスタム投稿タイプを追加 ---------- */
function create_post_type_blog() {
  register_post_type(
    'blog', // URL
    array(
      'labels' => array(
        'name' => 'Blog' // カスタム投稿名
      ),
      'hierarchical' => true,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','author'),
      'show_in_rest' => true,
    )
  );
}

add_action( 'init', 'create_post_type_blog' );

function create_post_type_news() {
  register_post_type(
    'news', // URL
    array(
      'labels' => array(
        'name' => 'News'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','author'),
      'show_in_rest' => true,
    )
  );
}

add_action( 'init', 'create_post_type_news' );

/*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );


// CSS読み込み
function add_styles() {
  $date = date("Y-m-d-h-i");
  $css_directory = get_template_directory_uri().'-child/assets/css/';
  // $css_page_directory = $css_directory . 'page/';
  $css_version = $date; //'1.0.1';//ここの数値を変更すればバージョンが更新できる
  wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_style( 'main_style', $css_directory.'style.css', "", $css_version);
}
add_action('wp_enqueue_scripts', 'add_styles', 11);

// JS読み込み
function add_scripts() {
  $date = date("Y-m-d-h-1");
    // 閉じBODYタグ前に出力
  $js_directory = get_template_directory_uri().'-child/assets/js/';
  $js_version = $date; // '1.0.0';//ここの数値を変更すればバージョンが更新できる
  wp_enqueue_script('jquery', true);
  //  wp_enqueue_script( 'micromodal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', true);
  wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', true);
  wp_enqueue_script('main', $js_directory.'main.js', array('jquery'), $js_version, true);
}
add_action('wp_print_scripts', 'add_scripts', 11);


/*
/* PHPの読み込み
 */
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');


?>

