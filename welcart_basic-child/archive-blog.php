<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
  $custom_post = 'blog'; // カスタム投稿

  //キーワード検索欄に入力した単語を取得
  $search_word = array();
  if ( ! empty( $_GET['f'] ) ) {
    $search_word = $_GET['f'];
    $search_word = str_replace( ' ', ' ', $search_word ); //全角スペースを半角スペースに置き換える（複数単語対応のため）
  }
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

  <section class="BlogList">
    <div class="BlogList__inner">
      <div class="BlogList__title">
        <h3 class="BlogList__titleText">Blog</h3>
        <p class="BlogList__subTitle">ブログ</p>
      </div>

      <div class="BlogList__container">
        <div class="BlogList__mainContents">
          <!-- 該当タグ -->
          <!-- コンテンツ -->
          <div class="BlogList__contents">
            <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;
              $args = array(
                'post_type' => $custom_post,
                's'	=> $search_word, //検索欄に入力した単語
                'post_status' => 'publish',
                // 'tax_query' => array(
                // 	array(
                // 		'taxonomy' => $tax_type01,
                // 		'field' => 'slug',
                // 		'terms' => 'news',
                // 	),
                // ),
                'posts_per_page' => 11, // 表示する数
                'paged' => $paged,
              );
              $blog_query = new WP_Query($args);
              if($blog_query->have_posts()):
                while ($blog_query->have_posts()): $blog_query->the_post();
            ?>
              <a href="<?php the_permalink(); ?>" class="BlogList__item">
                <!-- 画像 -->
                <?php
                  if (has_post_thumbnail()) {
                    echo '<div class="BlogList__thumbnail">';
                    the_post_thumbnail();
                    echo '</div>';
                  }
                ?>
                <!-- 日付 -->
                <time datetime="<?php the_time('Y-m-d'); ?>" class="BlogList__date"><?php the_time('Y/m/d'); ?></time>
                <p class="BlogList__itemTitle"><?php echo get_the_title(); ?></p>
              </a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <!-- ページネーション -->
          <?php the_posts_navigation(); ?>
        </div>

        <div class="BlogList__subContents">
          <!-- ブログの検索 -->
          <!-- タグ -->
          <!-- 過去のアーカイブ -->
          <?php
            $cat_slug = 'blog'; // 取得したいカテゴリー
            $args = array(
              'category_name' => $cat_slug,
              'posts_per_page' => -1 // カテゴリーの記事を全部出力
            );
            $archive_query = new WP_Query( $args ); // 上記アーカイブクエリを実行

            while ( $archive_query->have_posts() ) {
              $archive_query->the_post();
              //年月毎に記事情報を配列に格納
              $archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
            }
            wp_reset_postdata();

          ?>
          <?php if( isset($archive_list) ) : ?>
            <ul>
              <?php foreach( $archive_list as $year_month => $archive ) :
                $year_month_arr = explode( '/', $year_month );
              ?>
              <li>
                <a href="<?php echo esc_url( home_url( $year_month.'/?cat_slug='.$cat_slug ) ) ?>">
                  <?php echo $year_month_arr[0].'年'.$year_month_arr[1].'月' ?> [<?php echo count( $archive ) ?>]</a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

      <!-- タグの一覧 -->
      <!-- キーワードから記事を探す -->
      <div class="BlogList__keyWordSearch">
        <h2 class="BlogList__keyWordSearchTitle"><img src="<?php echo $imgUri;?>/search_orange.webp" alt="" loading="lazy" /><span>キーワードから記事を探す</span></h2>
        <form method="get" action="<?php echo esc_url( home_url("/") ); ?><?php echo esc_attr( $custom_post ); ?>">
        <div class="BlogList__keyWordSearchInputWrap">
          <input type="search" placeholder="キーワードを入力" value="<?php echo $search_word ? $search_word : ''; ?>" name="f" >
          <button type="submit" value="" class="BlogList__keyWordSearchButton"><img src="<?php echo $imgUri;?>/search_black.webp" alt="" loading="lazy" /></button>
        </div>
      </form>
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