<?php get_header();
/**
* Template Name: Shop_ホーム
*
* @package Welcart
* @subpackage Welcart_Basic
*/
?>
<div class="p_shopHome">
  <?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
  <?php // get_template_part( 'parts/subpageHeader' ); ?>
  <div class="l_container">
    <div class="l_inner _shop">
      <div class="c_archiveSearch">
        <span class="arrow"></span>
        <?php
        $categories = get_categories();
        if( $categories && !is_wp_error($categories) ){ // タームがあれば表示
          echo '<select name="select" onChange="location.href=value;">'; // option の value 値を URL とする
          echo '<option value="' . esc_url( home_url( '/shop/' ) ) . '">' .'すべて</option>';
          foreach ($categories as $category) { // 配列の繰り返し
            if ($category->slug === 'item'|| $category->slug === 'uncategorized') {
              continue;
          }
            echo '<option value="'.get_category_link($category->term_id).'">'.esc_html($category->name).'</option>'; // タームのURLとタイトルを表示
          }
          echo '</select>';
        }
      ?>
      </div>
      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedの設定
        // if (is_mobile()) {
          $posts_per_page = 8;
        // } else {
          // $posts_per_page = 9;
        // }
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
            'post_status' => 'publish',
            'category_name' => 'item',
          );
        $the_query = new WP_Query($args);
      ?>
      <?php if($the_query->have_posts()): ?>
      <div class="c_productList _grid">
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="c_productList_item">
          <a href="<?php echo get_permalink(); ?>">
            <div class="c_productList_thumbnail">
              <?php usces_the_itemImage( 0, 660, 660 ); ?>
            </div>
            <div class="c_productList_detail">
              <?php
                $categories = get_the_category();
                if( $categories ){
                  echo '<span class="e_category">' . $categories[0]->name . '</span>';
                }
              ?>
              <p class="c_productList_title"><?php usces_the_itemName(); ?></p>
              <span class="c_productList_price"><?php usces_the_firstPriceCr(); ?><span class="tax">（税込）</span>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="c_pageNavi">
        <?php
        if(function_exists('wp_pagenavi')) {
          wp_pagenavi(array('query' => $the_query));
        }
        ?>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      </div>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
  <?php // get_template_part( 'parts/contactArea' ); ?>
</div>
<?php get_footer();?>