<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
  $custom_post = 'news'; // カスタム投稿

  //キーワード検索欄に入力した単語を取得
  $search_word = array();
  if ( ! empty( $_GET['f'] ) ) {
    $search_word = $_GET['f'];
    $search_word = str_replace( '　', ' ', $search_word ); //全角スペースを半角スペースに置き換える（複数単語対応のため）
  }
?>
<?php get_header();?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents NewsItemPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>ニュース</li>
    </ul>
  </section>

  <section class="NewsItem">
    <div class="NewsItem__inner">
      <div class="NewsItem__title">
        <h3 class="NewsItem__titleText">News</h3>
        <p class="NewsItem__subTitle">ニュース</p>
      </div>

      <div class="NewsItem__container">
        <div class="BlogList__mainContents">
          <h1 class="NewsItem__containerTitle"><?php echo get_the_title(); ?></h1>
          <!-- サムネイル -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="NewsItem__thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

          <!-- 投稿コンテンツ -->
          <div class="NewsItem__contents">
            <?php the_content(); ?>
          </div>

          <!-- 関連記事 -->
          <div class="NewsItem__footerSearchTag">
            <h2 class="NewsItem__footerSearchTagTitle">関連記事</h2>
            <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $args = array(
                'post_status'    => 'publish',
                'post_type'      => $custom_post, // 自分のカスタム投稿スラッグを入れる
                'paged'          => $paged,
                'posts_per_page' => 3, // 固定3件
                'orderby'        => 'date',
                'order'          => 'DESC',
              ); ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php if ($my_query->have_posts()) : ?>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="NewsItem__item">
                  <!-- 画像 -->
                  <?php
                    if (has_post_thumbnail()) {
                      echo '<div class="NewsItem__thumbnail">';
                      the_post_thumbnail();
                      echo '</div>';
                    }
                  ?>
                  <!-- 日付 -->
                  <div>
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="NewsItem__date"><?php the_time('Y/m/d'); ?></time>
                    <p class="NewsItem__itemTitle"><?php echo get_the_title(); ?></p>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>

        <!-- サイドコンテンツ -->
        <div class="NewsItem__subContents">
          <!-- ブログの検索 -->
          <div class="NewsItem__sideBarItem">
            <h2 class="NewsItem__sideBarItemTitle"><img src="<?php echo $imgUri;?>/search_orange.webp" alt="" loading="lazy" /><span>ブログ検索</span></h2>
            <form method="get" action="<?php echo esc_url( home_url("/") ); ?><?php echo esc_attr( $custom_post ); ?>">
              <div class="NewsItem__sideBarItemInputWrap">
                <input type="search" placeholder="キーワードを入力" value="<?php echo $search_word ? $search_word : ''; ?>" name="f" >
                <button type="submit" value="" class="NewsItem__sideBarItemSearchButton"><img src="<?php echo $imgUri;?>/search_black.webp" alt="" loading="lazy" /></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 入園バナー PCのみ -->
  <?php get_template_part('enrollmentBanner'); ?>

  <!-- Hello World -->
  <?php get_template_part('helloWorld'); ?>

  <!-- Recruit -->
  <?php get_template_part('recruit'); ?>
</main>

<?php get_footer();?>