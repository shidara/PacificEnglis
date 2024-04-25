<?php
/**
 * Cart Pge Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

<div class="p_shopCart">
  <?php // get_template_part( 'parts/subpageHeader' ); ?>
  <div class="l_container">
    <div class="l_inner">
      <div class="cart-page" role="main">
        <?php if ( have_posts() ) : usces_remove_filter(); ?>
        <article class="post" id="wc_<?php usces_page_name(); ?>">
          <h1 class="cart_page_title">カート</h1>
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
                      <th class="thumbnail"></th>
                      <th class="productname"><?php esc_html_e( 'item name', 'usces' ); ?></th>
                      <th class="unitprice"><?php esc_html_e( 'Unit price', 'usces' ); ?></th>
                      <th class="quantity"><?php esc_html_e( 'Quantity', 'usces' ); ?></th>
                      <th class="subtotal">金額<span>(税込)</span></th>
                      <th class="stock"><?php esc_html_e( 'stock status', 'usces' ); ?></th>
                      <th class="action"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php usces_get_cart_rows(); ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="3" scope="row" class="aright">商品合計<span>(税込)</span></th>
                      <th class="aright amount"><?php usces_crform( usces_total_price( 'return' ), true, false ); ?></th>
                    </tr>
                  </tfoot>
                </table>
                <?php if ( $usces_gp ) : ?>
                  <div class="gp"><img src="<?php echo esc_url( get_theme_file_uri( 'images/gp.gif' ) ); ?>" alt="<?php esc_attr_e( 'Business package discount', 'usces' ); ?>" /><span><?php esc_html_e( 'The price with this mark applys to Business pack discount.', 'usces' ); ?></span></div>
                <?php endif; ?>
              </div><!-- #cart -->
              <div class="send _flex">
                <input name="customerinfo" type="submit" class="to_customerinfo_button" value="次　へ" onclick="return uscesCart.cartNext();">
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
      </div><!-- #content -->
    </div>
  </div>
  <?php get_template_part( 'parts/contactArea' ); ?>
</div>

<?php
get_footer();
