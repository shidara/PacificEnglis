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
<main class="pageContents NewsListPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>ニュース</li>
    </ul>
  </section>

  <section class="NewsItem NewsList">
    <div class="NewsItem__inner">
      <div class="NewsItem__title">
        <h3 class="NewsItem__titleText">News</h3>
        <p class="NewsItem__subTitle">ニュース</p>
      </div>

      <div class="NewsItem__container">
        <div class="NewsItem__mainContents">
          <!-- 該当タグ -->
          <!-- コンテンツ -->
          <div class="NewsItem__contents">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
                'post_status'    => 'publish',
                'post_type'      => $custom_post, // ページの種類（例、page、post、カスタム投稿タイプ）
                'paged'          => $paged,
                'posts_per_page' => 12, // 表示件数
                'orderby'        => 'date',
                'order'          => 'DESC',
                's'              => $search_word, //検索欄に入力した単語
            ));
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
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
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="NewsItem__date"><?php the_time('Y/m/d'); ?></time>
                    <p class="NewsItem__itemTitle"><?php echo get_the_title(); ?></p>
                  </a>
                <?php
                endwhile;
            else:
                echo '<div><p>ありません。</p></div>';
            endif;
            ?>
          </div>
          <!-- ページネーション -->
          <div class="Pagination">
            <?php wp_pagenavi(array('query' => $the_query)); ?>
          </div>
        </div>

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



          <?php
            $args = array(
              'category_name' => $custom_post, // 取得したいカテゴリー
              'posts_per_page' => -1 // カテゴリーの記事を全部出力
            );

            $archive_query = new WP_Query( $args ); // 上記アーカイブクエリを実行

            if(isset($archive_query)){
              while ( $archive_query->have_posts() ) {
                $archive_query->the_post();
                //年月毎に記事情報を配列に格納
                $archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
              }
            }

            wp_reset_postdata();
            ?>
          <?php if( isset($archive_list) ) : ?>
            <ul>
              <?php foreach( $archive_list as $year_month => $archive ) :
                $year_month_arr = explode( '/', $year_month );
              ?>
              <li>
                <a href="<?php echo esc_url( home_url( $year_month.'/?cat_slug='. $custom_post ) ); ?>">
                  <?php echo $year_month_arr[0].'年'.$year_month_arr[1].'月'; ?> [<?php echo count( $archive ); ?>]</a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
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