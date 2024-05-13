<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
  $custom_post = 'blog'; // カスタム投稿
  $tax_type01 = 'blog-category'; // タクソノミー
  //キーワード検索欄に入力した単語を取得
  $search_word = array();
  if ( ! empty( $_GET['f'] ) ) {
    $search_word = $_GET['f'];
    $search_word = str_replace( ' ', ' ', $search_word ); //全角スペースを半角スペースに置き換える（複数単語対応のため）
  }

?>
<div class="BlogList__keyWordSearch">
  <h2 class="BlogList__keyWordSearchTitle"><img src="<?php echo $imgUri;?>/search_orange.webp" alt="" loading="lazy" /><span>キーワードから記事を探す</span></h2>
  <form method="get" action="<?php echo esc_url( home_url("/") ); ?><?php echo esc_attr( $custom_post ); ?>">
    <div class="BlogList__keyWordSearchInputWrap">
      <input type="search" placeholder="キーワードを入力" value="<?php echo $search_word ? $search_word : ''; ?>" name="f" >
      <button type="submit" value="" class="BlogList__keyWordSearchButton"><img src="<?php echo $imgUri;?>/search_black.webp" alt="" loading="lazy" /></button>
    </div>
  </form>
</div>