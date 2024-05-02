<?php
/**
 * Product Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

$imgUri = get_theme_file_uri() . "/assets/image/";

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
    <div class="ShopItemModule__title">
      <h3 class="ShopItemModule__titleText">
        <span>Online Shop</span>
        <span class="ShopItemModule__titleSubText">オンラインショップ</span>
      </h3>
    </div>

    <?php if ( have_posts() ) : the_post(); ?>
      <main class="ShopItemModule__main">
        <div class="ShopItemModule__body">
        <?php
          usces_remove_filter();
          usces_the_item();
          usces_have_skus();
        ?>
          <!-- メイン画像 -->
          <div class="ShopItemModule__mainImageWrapper">
            <?php $image_ids = usces_get_itemSubImageNums(); ?>
            <div class="ShopItemModule__mainImage">
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

            <!-- 画像複数枚 -->
            <div class="ShopItemModule__subImage">
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

          <!-- 商品情報 -->
          <div class="ShopItemModule__info">
            <?php
              $categories = get_the_category();
              if( $categories ){
                echo '<span class="ShopItemModule__itemCategory">' . $categories[0]->name . '</span>';
              }
            ?>
            <!-- タイトル -->
            <h2 class="ShopItemModule__itemTitle"><?php usces_the_itemName(); ?></h2>

            <div class="ShopItemModule__infoDetail">
              <?php $item_custom = usces_get_item_custom( $post->ID, 'list', 'return' ); ?>
              <?php	if ( $item_custom ) : ?>
                <?php echo wp_kses_post( $item_custom ); ?>
              <?php endif;?>
              <form action="<?php echo esc_url( USCES_CART_URL ); ?>" method="post">
                <?php do { ?>
                <div class="ShopItemModule__infoForm">
                  <p class="ShopItemModule__infoPrice">
                    <?php usces_the_itemPriceCr(); ?><span class="ShopItemModule__infoPriceTax">（税込）</span>
                  </p>

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

                  <!-- 数量調整 -->
                  <div class="ShopItemModule__infoNumber">
                    <span class="ShopItemModule__infoNumberTitle"><?php esc_html_e( 'Quantity', 'usces' ); ?></span>
                    <div class="ShopItemModule__infoNumberInput js-hopSingleDetailQuantity">
                      <span class="ShopItemModule__infoNumberInputMinus js-minus"></span>
                      <?php
                      // 表示されるinput typeがtextになってしまうため強引に number に書き換えている
                      echo str_replace( 'type="text"', 'type="number" min="1"', usces_the_itemQuant( 'return' ) );
                      ?>
                      <span class="ShopItemModule__infoNumberInputPlus js-plus"></span>
                    </div>
                  </div>
                  <!-- カートに追加 -->
                  <div class="ShopItemModule__infoSendButton">
                    <?php usces_the_itemSkuButton( __( 'カートに追加', 'usces' ), 0 ); ?>
                  </div>

                  </div>

                  <p class="p_shopSingleDetail_error"><?php usces_singleitem_error_message( $post->ID, usces_the_itemSku( 'return' ) ); ?></p>
                </div>
                <?php } while ( usces_have_skus() ); ?>
                <?php do_action( 'usces_action_single_item_inform' ); ?>
              </form>
              <?php do_action( 'usces_action_single_item_outform' ); ?>

              <hr class="ShopItemModule__infoDetailDivider" />

              <?php if (get_the_content()) : ?>
                <div class="ShopItemModule__infoSummary">
                  <h3 class="ShopItemModule__infoSummaryTitle js-accordion-title">商品説明</h3>
                  <div class="ShopItemModule__infoSummaryDescription js-accordion-description">
                    <?php the_content(); ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </main>
    <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
    <?php endif; ?>
  </section>

  <!-- 関連商品 -->
  <section class="ShopRecommendModule">
    <div class="ShopRecommendModule__inner">
      <div class="ShopRecommendModule__title">
        <h3 class="ShopRecommendModule__titleText">Recommend</h3>
        <p class="ShopRecommendModule__titleSubText">関連商品</p>
      </div>

      <div class="ShopRecommendModule__contents">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedの設定
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'paged' => $paged,
            'post_status' => 'publish',
            'category_name' => 'item',
          );
          $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <div class="ShopRecommendModule__list">
          <?php while($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="ShopRecommendModule__item">
            <a href="<?php echo get_permalink(); ?>">
              <div class="ShopRecommendModule__itemThumbnail">
                <?php usces_the_itemImage( 0, 660, 660 ); ?>
              </div>

              <div class="ShopRecommendModule__itemInfo">
                <div class="ShopRecommendModule__itemInfoMain">
                  <?php
                    $categories = get_the_category();
                    if( $categories ){
                      echo '<span class="ShopRecommendModule__itemCategory">' . $categories[0]->name . '</span>';
                    }
                  ?>
                  <p class="ShopRecommendModule__itemTitle"><?php usces_the_itemName(); ?></p>
                </div>
                 <div class="ShopRecommendModule__itemInfoSub">
                   <p class="ShopRecommendModule__itemPrice"><?php usces_the_firstPriceCr(); ?></p>
                  </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>

        <div class="ShopRecommendModule__send">
          <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="ShopRecommendModule__sendButton">商品一覧へ</a>
        </div>

      </div>
    </div>

  </section>
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

  // 注文数カウント
  const wrap = document.querySelector('.js-hopSingleDetailQuantity')
  const input = wrap.querySelector('input')
  wrap.querySelector('.js-minus').onclick = ()=>{
    input.stepDown()
  }
  wrap.querySelector('.js-plus').onclick = ()=>{
    input.stepUp()
  }
  </script>

<?php
  get_template_part('helloWorld');
  get_template_part('recruit');
  get_footer();
?>
