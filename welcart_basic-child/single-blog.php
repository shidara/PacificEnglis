<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
  $custom_post = 'blog'; // カスタム投稿
  $tax_type01 = 'blog-category'; // タクソノミー

  //キーワード検索欄に入力した単語を取得
  $search_word = array();
  if ( ! empty( $_GET['f'] ) ) {
    print_r('あああああ');
    $search_word = $_GET['f'];
    $search_word = str_replace( '　', ' ', $search_word ); //全角スペースを半角スペースに置き換える（複数単語対応のため）
  }

  // タグ
  $tags = get_terms( array( 'taxonomy'=> $tax_type01, 'get'=>'all' ) );
  $current_term_slug = get_query_var('term'); // 絞り込みタグ取得
?>
<?php get_header();?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents BlogListPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>ブログ</li>
    </ul>
  </section>

  <section class="BlogList BlogItem">
    <div class="BlogList__inner">
      <div class="BlogList__title">
        <h3 class="BlogList__titleText">Blog</h3>
        <p class="BlogList__subTitle">ブログ</p>
      </div>

      <div class="BlogList__container">
          <div class="BlogList__mainContents">
            <h1 class="BlogItem__title"><?php echo get_the_title(); ?></h1>
            <!-- tagがあれば表示 -->
            <?php
              $terms = get_the_terms($post->ID, $tax_type01);
              $i = 0;
              if($terms): ?>
              <p class="BlogItem__titleTagWrapper">
                <img src="<?php echo $imgUri;?>/tag_gray.webp" alt="" loading="lazy" />
                <?php
                  foreach( $terms as $term ) {
                    echo '<a href="' . get_category_link( $terms[$i]->term_id ) . '" class="BlogItem__titleTag">' . $terms[$i]->name . '</a>';
                    $i++;
                  }
                ?>
              </p>
            <?php endif; ?>

            <!-- サムネイル -->
            <?php if (has_post_thumbnail()) : ?>
              <div class="BlogItem__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>

            <!-- 投稿コンテンツ -->
            <div class="BlogItem__contents">
              <?php the_content(); ?>
            </div>
          </div>

          <div class="BlogList__subContents">
          <!-- ブログの検索 -->
          <div class="BlogList__sideBarItem">
            <h2 class="BlogList__sideBarItemTitle"><img src="<?php echo $imgUri;?>/search_orange.webp" alt="" loading="lazy" /><span>ブログ検索</span></h2>
            <form method="get" action="<?php echo esc_url( home_url("/") ); ?><?php echo esc_attr( $custom_post ); ?>">
              <div class="BlogList__sideBarItemInputWrap">
                <input type="search" placeholder="キーワードを入力" value="<?php echo $search_word ? $search_word : ''; ?>" name="f" >
                <button type="submit" value="" class="BlogList__sideBarItemSearchButton"><img src="<?php echo $imgUri;?>/search_black.webp" alt="" loading="lazy" /></button>
              </div>
            </form>
          </div>

          <!-- タグ -->
          <?php if(isset($tags)) :?>
            <div class="BlogList__sideBarItem">
              <h2 class="BlogList__sideBarItemTitle"><img src="<?php echo $imgUri;?>/tag.webp" alt="" loading="lazy" /><span>タグ</span></h2>
              <div class="BlogList__tagWrapper">
                <?php
                  foreach($tags as $value): ?>
                    <div class="BlogList__tag">
                      <a href="<?php echo get_term_link($value, 'blog');?>" class="BlogList__item"><?php echo $value->name; ?></a>
                    </div>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif; ?>
          <!-- 過去のアーカイブ -->
        </div>
      </div>
    </div>
  </section>

  <!-- 入園バナー PCのみ -->
  <?php get_template_part('enrollmentBanner'); ?>

  <!-- LinksNavigation PCのみ -->
  <?php get_template_part('linksNavigation'); ?>

  <!-- Hello World -->
  <?php get_template_part('helloWorld'); ?>

  <!-- Recruit -->
  <?php get_template_part('recruit'); ?>
</main>

<?php get_footer();?>