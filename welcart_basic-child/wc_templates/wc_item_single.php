<?php
/**
 * Product Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>
<div class="ShopItemPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>商品詳細</li>
    </ul>
  </section>

  <section class="ShopItemModule">

  </section>
</div>


<div class="p_shopSingle">
  <?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
  <?php get_template_part( 'parts/subpageHeader' ); ?>
  <div class="l_container">
    <div class="l_inner">
    <?php if ( have_posts() ) : the_post(); ?>
      <main class="p_shopSingle_main">
        <div class="p_shopSingle_body">
        <?php
          usces_remove_filter();
          usces_the_item();
          usces_have_skus();
        ?>
          <div class="p_shopSingleImage">
            <?php $image_ids = usces_get_itemSubImageNums(); ?>
            <div class="p_shopSingleImage_main">
              <div class="swiper js-shopSingleImage-main">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <?php usces_the_itemImage( 0, 1280, 1280, $post ); ?>
                  </div>
                  <?php if ( ! empty( $image_ids ) ) : ?>
                    <?php foreach ( $image_ids as $image_id ) : ?>
                    <div class="swiper-slide">
                      <?php usces_the_itemImage( $image_id, 1280, 1280, $post ); ?>
                    </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="p_shopSingleImage_thumbnail">
              <div class="swiper js-shopSingleImage-thumbnail">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <?php usces_the_itemImage( 0, 640, 640, $post ); ?>
                  </div>
                  <?php if ( ! empty( $image_ids ) ) : ?>
                    <?php foreach ( $image_ids as $image_id ) : ?>
                    <div class="swiper-slide">
                      <?php usces_the_itemImage( $image_id, 640, 640, $post ); ?>
                    </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="p_shopSingleDetail">
            <?php
              $categories = get_the_category();
              if( $categories ){
                echo '<span class="e_category">' . $categories[0]->name . '</span>';
              }
            ?>
            <h2 class="p_shopSingleDetail_title"><?php usces_the_itemName(); ?></h2>
            <div class="p_shopSingleDetail_information">
              <?php $item_custom = usces_get_item_custom( $post->ID, 'list', 'return' ); ?>
              <?php	if ( $item_custom ) : ?>
                <?php echo wp_kses_post( $item_custom ); ?>
              <?php endif;?>
              <form action="<?php echo esc_url( USCES_CART_URL ); ?>" method="post">
                <?php do { ?>
                <div class="p_shopSingleDetail_form">
                  <span class="p_shopSingleDetail_price">
                    <?php usces_the_itemPriceCr(); ?><span class="tax">（税込）</span>
                  </span>
                  <?php do_action( 'usces_theme_item_single_before_options' ); ?>
                  <?php if ( usces_is_options() ) : ?>
                  <div class="p_shopSingleDetailOption-wrap _flex">
                    <?php while ( usces_have_options() ) : ?>
                    <div class="p_shopSingleDetailOption _flex">
                      <p class="p_shopSingleDetailOption_title"><?php usces_the_itemOptName(); ?></p>
                      <div class="p_shopSingleDetailOption_select">
                        <?php usces_the_itemOption( usces_getItemOptName(), '' ); ?>
                      </div>
                    </div>
                    <?php endwhile; ?>
                  </div>
                  <?php endif; ?>
                  <div class="p_shopSingleDetailCart">
                    <div class="p_shopSingleDetailQuantity _flex">
                      <p class="p_shopSingleDetailQuantity_title"><?php esc_html_e( 'Quantity', 'usces' ); ?></p>
                      <div class="p_shopSingleDetailQuantity_input js-hopSingleDetailQuantity">
                        <span class="minus js-minus"></span>
                        <?php usces_the_itemQuant(); ?>
                        <span class="plus js-plus"></span>
                      </div>
                    </div>
                    <?php if(has_category('insertname')): ?>
                    <div class="p_shopSingleDetailCart_button is-fake js-show-modal">カートに追加</div>
                    <?php else: ?>
                    <div class="p_shopSingleDetailCart_button">
                      <?php usces_the_itemSkuButton( __( 'カートに追加', 'usces' ), 0 ); ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <p class="p_shopSingleDetail_error"><?php usces_singleitem_error_message( $post->ID, usces_the_itemSku( 'return' ) ); ?></p>
                </div>
                <?php } while ( usces_have_skus() ); ?>
                <?php do_action( 'usces_action_single_item_inform' ); ?>
              </form>
              <?php do_action( 'usces_action_single_item_outform' ); ?>
            </div>
            <?php if (get_the_content()) : ?>
            <div class="p_shopSingleDetailText">
              <h3 class="p_shopSingleDetailText_title js-accordion-title">商品説明</h3>
              <div class="p_shopSingleDetailText_description js-accordion-description">
                <?php the_content(); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </main>
    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
    <?php endif; ?>
    </div>
  </div>

  <!-- レコメンド -->
  <div class="p_shopSingleRecommend">
    <h2 class="e_heading-m _center">
      <span class="en">Recommend</span>
      <span class="jp">関連商品</span>
    </h2>
    <div class="l_inner">
      <?php
        $window_width = get_transient('window_width'); // 保存した値を取得
        $posts_per_page = $window_width < 1280 ? 4 : 3; // 画面幅に基づいて投稿数を変更
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
      <?php endif; wp_reset_postdata(); ?>
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="e_button _blue">商品一覧へ</a>
    </div>
  </div>
</div>

<script>
  // サムネイル
  var sliderThumbnail = new Swiper(".js-shopSingleImage-thumbnail", {
    slidesPerView: 3, // サムネイルの枚数
    spaceBetween: 8,
  });
  // スライダー
  var slider = new Swiper(".js-shopSingleImage-main", {
    loop: true,
    thumbs: {
      swiper: sliderThumbnail,
    },
  });
  jQuery(function () {
    jQuery('.js-accordion-title').on('click', function() {
      jQuery(".js-accordion-description").slideToggle();//アコーディオンの上下動作
      if(jQuery(this).hasClass('_close')){//タイトル要素にクラス名closeがあれば
        jQuery(this).removeClass('_close');
        jQuery('.js-conditions').removeClass('_close');
      }else{//それ以外は
        jQuery(this).addClass('_close');//クラス名closeを付与
        jQuery('.js-conditions').addClass('_close');
      }
    });
  });

  const $wrap = document.querySelector('.js-hopSingleDetailQuantity')
  const $input = $wrap.querySelector('input')
  $wrap.querySelector('.js-minus').onclick = ()=>{
    $input.stepDown()
  }
  $wrap.querySelector('.js-plus').onclick = ()=>{
    $input.stepUp()
  }
  </script>
<?php
  get_template_part('helloWorld');
  get_template_part('recruit');
  get_footer();
?>
