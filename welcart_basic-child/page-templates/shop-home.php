<?php
/**
* Template Name: Shop_ホーム
*
* @package Welcart
* @subpackage Welcart_Basic
*/

get_template_part('header-cart');

$imgUri = get_theme_file_uri() . "/assets/image/";
?>
<div class="ShopListPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>商品一覧</li>
    </ul>
  </section>

  <section class="ShopListModule">
    <div class="ShopListModule__title">
      <h3 class="ShopListModule__titleText">
        <span>Online Shop</span>
        <span class="ShopListModule__titleSubText">オンラインショップ</span>
      </h3>
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

      <div class="ShopListModule__list">
        <?php
          while($the_query->have_posts()):
            $the_query->the_post();
            $image_id = get_post_thumbnail_id();
            // メディアで設定したalt（代替テキスト）属性を取得
            $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        ?>
        <div class="ShopListModule__item">
          <a href="<?php echo get_permalink(); ?>">
            <div class="ShopListModule__itemThumbnail">
              <?php usces_the_itemImage(); ?>
            </div>

            <div class="ShopListModule__itemInfo">
              <?php
                $categories = get_the_category();
                if( $categories ){
                  echo '<span class="ShopListModule__itemCategory">' . $categories[0]->name . '</span>';
                }
              ?>
              <div class="ShopListModule__itemTitle"><?php usces_the_itemName(); ?></div>
              <div class="ShopListModule__itemPrice"><?php usces_the_firstPriceCr(); ?></div>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>

    <?php endif; wp_reset_postdata(); ?>
  </section>

</div>
<?php
  get_template_part('helloWorld');
  get_template_part('recruit');
  get_template_part('footer-cart');
?>