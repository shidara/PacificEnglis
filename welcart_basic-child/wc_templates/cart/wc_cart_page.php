<?php
/**
 * Cart Pge Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

<div class="CartPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>カート</li>
    </ul>
  </section>

  <section class="CartModule cart-page" role="main">
    <?php if ( have_posts() ) : usces_remove_filter(); ?>
    <article class="post" id="wc_<?php usces_page_name(); ?>">
      <h1 class="CartModule__title">カート</h1>
      <div class="cart_navi">
        <ul>
          <li class="current"><span>カート</span></li>
          <li><span>お客様情報</span></li>
          <li><span>発送・支払方法</span></li>
          <li><span>内容確認</span></li>
        </ul>
      </div>

      <div class="header_explanation">
        <?php do_action( 'usces_action_cart_page_header' ); ?>
      </div><!-- .header_explanation -->

      <div class="error_message"><?php usces_error_message(); ?></div>

      <form class="p_shopCartForm" action="<?php usces_url( 'cart' ); ?>" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
        <?php if ( usces_is_cart() ) : ?>
          <div id="cart">
            <?php echo apply_filters( 'usces_theme_filter_upbutton', '<div class="upbutton">' . '<span>数量を変更した場合は必ず<br>更新ボタンを押してください。</span>' . '<input name="upButton" type="submit" value="' . __( 'Quantity renewal', 'usces' ) . '" onclick="return uscesCart.upCart()" class="p_shopCartForm_button" /></div>' ); // phpcs:ignore ?>
            <table cellspacing="0" id="cart_table">
              <thead>
                <tr>
                  <th scope="row" class="num">No.</th>
                  <th class="productname" colspan="2">商品名</th>
                  <th class="unitprice">単価</th>
                  <th class="quantity">数量</th>
                  <th class="subtotal">金額<span>(税込)</span></th>
                  <th class="stock">在庫状態</th>
                  <th class="action"></th>
                </tr>
              </thead>
              <tbody>
                <?php usces_get_cart_rows(); ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="5" scope="row" class="aright">商品合計<span>(税込)</span></th>
                  <th class="aright amount"><?php usces_crform( usces_total_price( 'return' ), true, false ); ?></th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <?php if ( $usces_gp ) : ?>
              <div class="gp"><img src="<?php echo esc_url( get_theme_file_uri( 'images/gp.gif' ) ); ?>" alt="<?php esc_attr_e( 'Business package discount', 'usces' ); ?>" /><span><?php esc_html_e( 'The price with this mark applys to Business pack discount.', 'usces' ); ?></span></div>
            <?php endif; ?>
          </div><!-- #cart -->
          <div class="send _flex">
            <input name="customerinfo" type="submit" class="to_customerinfo_button" value="ご注文手続きへ" onclick="return uscesCart.cartNext();">
            <input name="previous" type="button" id="previouscart" class="continue_shopping_button" value="買い物を続ける" onclick="uscesCart.previousCart();">
          </div>
        <?php else : ?>
          <div class="no_cart"><?php esc_html_e( 'There are no items in your cart.', 'usces' ); ?></div>
          <div class="send _flex">
            <input name="previous" type="button" id="previouscart" class="continue_shopping_button" value="買い物を続ける" onclick="uscesCart.previousCart();">
          </div>
        <?php endif; ?>
        <?php do_action( 'usces_action_cart_page_inform' ); ?>
      </form>
      <div class="footer_explanation">
        <?php do_action( 'usces_action_cart_page_footer' ); ?>
      </div><!-- .footer_explanation -->
    </article><!-- .post -->
    <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
    <?php endif; ?>
  </section>
</div>
<?php
get_footer();
