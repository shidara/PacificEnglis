<?php
/**
 * Customer Page template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

  <div id="primary" class="site-content CustomerPage">
    <div id="content" class="cart-page" role="main">

    <?php
    if ( have_posts() ) :
      usces_remove_filter();
      ?>

      <article class="post" id="wc_<?php usces_page_name(); ?>">

        <h1 class="cart_page_title"><?php esc_html_e( 'Customer Information', 'usces' ); ?></h1>

        <div id="customer-info">

          <div class="cart_navi">
            <ul>
              <li><?php esc_html_e( '1.Cart', 'usces' ); ?></li>
              <li class="current"><?php esc_html_e( '2.Customer Info', 'usces' ); ?></li>
              <li><?php esc_html_e( '3.Deli. & Pay.', 'usces' ); ?></li>
              <li><?php esc_html_e( '4.Confirm', 'usces' ); ?></li>
            </ul>
          </div><!-- .cart_navi -->

          <div class="header_explanation">
            <?php do_action( 'usces_action_customer_page_header' ); ?>
          </div><!-- .header_explanation -->

          <div class="error_message"><?php usces_error_message(); ?></div>

        <?php if ( usces_is_membersystem_state() ) : ?>

          <?php if ( ! wel_have_ex_order() ) : ?>
          <h5>会員の方はこちら</h5>
          <P class="cart_page_title_sub">会員の方は、登録時に入力されたE-mailとパスワードでログインしてください。</P>
          <?php endif; ?>

          <form action="<?php usces_url( 'cart' ); ?>" method="post" name="customer_loginform" onKeyDown="if(event.keyCode == 13){return false;}">
            <table width="100%" cellpadding="0" cellspacing="0" class="customer_form">
              <tr>
                <th scope="row"><?php esc_html_e( 'e-mail adress', 'usces' ); ?></th>
                <td><input name="loginmail" id="loginmail" type="text" value="<?php echo esc_attr( $usces_entries['customer']['mailaddress1'] ); ?>" style="ime-mode: inactive" placeholder="xxx@example.jp" /></td>
              </tr>
              <tr>
                <th scope="row"><?php esc_html_e( 'password', 'usces' ); ?></th>
                <td><input name="loginpass" id="loginpass" type="password" autocomplete="new-password" value="" placeholder="ABCDEFG123" /></td>
              </tr>
            </table>
          <?php if ( wel_have_ex_order() ) : ?>
            <p id="nav"><a class="lostpassword" href="<?php usces_url( 'lostmemberpassword' ); ?>"><?php esc_html_e( 'Did you forget your password?', 'usces' ); ?></a></p>
            <p id="nav"><a class="newmember" href="<?php usces_url( 'newmember' ); ?>&dlseller_transition=newmember"><?php esc_html_e( 'New enrollment for membership.', 'usces' ); ?></a></p>
          <?php endif; ?>
            <div class="send"><input name="customerlogin" class="to_memberlogin_button" type="submit" value="ログインしてご注文手続きへ進む" /></div>
            <?php do_action( 'usces_action_customer_page_member_inform' ); ?>
          </form>
        <?php endif; ?>

        <?php if ( ! wel_have_ex_order() ) : ?>

          <?php if ( usces_is_membersystem_state() ) : ?>
          <h5>会員ではない方はこちら</h5>
          <P class="cart_page_title_sub">※必須項目は必ずご入力ください。</P>
          <?php endif; ?>

          <form action="<?php echo esc_url_raw( USCES_CART_URL ); ?>" method="post" name="customer_form" onKeyDown="if(event.keyCode == 13){return false;}">
            <div class="c_form_item">
              <p class="c_form_name"><span class="required">必須</span>お名前</p>
              <div class="c_form_input _sm-row _lg-col2">
                <input name="customer[name1]" id="name1" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
                <input name="customer[name2]" id="name2" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
              </div>
            </div>
            <div class="c_form_item">
              <p class="c_form_name"><span class="required">必須</span>フリガナ</p>
              <div class="c_form_input _sm-row _lg-col2">
                <input name="customer[name3]" id="name3" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
                <input name="customer[name4]" id="name4" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
              </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>メールアドレス</p>
                <div class="c_form_input">
                <input name="customer[mailaddress1]" id="mailaddress1" type="text" value="<?php echo esc_attr( $usces_entries['customer']['mailaddress1'] ); ?>" style="ime-mode: inactive" autocomplete="off" />
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>メールアドレス（確認用）</p>
                <div class="c_form_input">
                  <input name="customer[mailaddress2]" id="mailaddress2" type="text" value="<?php echo esc_attr( $usces_entries['customer']['mailaddress2'] ); ?>" style="ime-mode: inactive" autocomplete="off" />
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>電話番号</p>
                <div class="c_form_input">
                <input name="customer[tel]" id="tel" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive">
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name">FAX番号</p>
                <div class="c_form_input">
                  <input name="customer[fax]" id="fax" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive">
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>郵便番号</p>
                <div class="c_form_input _zip">
                  <input name="customer[zipcode]" id="zipcode" type="tel" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive" maxlength="8" placeholder="住所自動入力">
                  <button type="button" id="search_zipcode" class="search-zipcode button" onclick="AjaxZip3.zip2addr('customer[zipcode]', '', 'customer[pref]', 'customer[address1]' );">郵便番号から<br class="_lg_hide">住所を入力</button>
                </div>
            </div>
            <div class="c_form_item">
              <p class="c_form_name"><span class="required">必須</span>都道府県</p>
              <div class="c_form_input _select">
                  <select name="customer[pref]" id="customer_pref" class="pref">	<option value="--選択--">--選択--</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                  </select>
              </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>市区郡町村</p>
                <div class="c_form_input">
                  <input name="customer[address1]" id="address1" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name"><span class="required">必須</span>番地</p>
                <div class="c_form_input">
                  <input name="customer[address2]" id="address2" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
                </div>
            </div>
            <div class="c_form_item">
                <p class="c_form_name">ビル・マンション名号室</p>
                <div class="c_form_input">
                  <input name="customer[address3]" id="address3" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
                </div>
            </div>
            <div class="c_form_item">
              <p class="c_form_name"><span class="required">必須</span>パスワード</p>
              <div class="c_form_input">
                <input name="customer[password1]" type="password" value="<?php echo esc_attr( $usces_entries['customer']['password1'] ); ?>" autocomplete="new-password" />
              </div>
            </div>
            <div class="c_form_item">
              <p class="c_form_name"><span class="required">必須</span>パスワード（確認用）</p>
              <div class="c_form_input">
                <input name="customer[password2]" type="password" value="<?php echo esc_attr( $usces_entries['customer']['password2'] ); ?>" autocomplete="new-password" />
              </div>
            </div>

            <div class="c_form_agree js-agree">
              <span class="mwform-checkbox-field horizontal-item">
                <label>
                  <input type="checkbox" name="agree[data][]" value="個人情報の取り扱いに同意する。">
                  <span class="mwform-checkbox-field-text"><a href="https://test.wittydesign11.com/another-wave/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報の取り扱い</a>に同意する。</span>
                </label>
              </span>
            </div>
            <input name="member_regmode" type="hidden" value="<?php echo esc_attr( $member_regmode ); ?>" />

            <div class="send">
              <input name="backCart" type="submit" class="back_cart_button" value="戻る">
              <input name="deliveryinfo" type="submit" class="to_deliveryinfo_button" value="会員登録をしないで次へ">
              <input name="reganddeliveryinfo" type="submit" class="to_reganddeliveryinfo_button" value="会員登録して次へ">
            </div>

            <?php usces_agree_member_field(); ?>
            <?php do_action( 'usces_action_customer_page_inform' ); ?>
          </form>

        <?php endif; ?>

          <div class="footer_explanation">
            <?php do_action( 'usces_action_customer_page_footer' ); ?>
          </div><!-- .footer_explanation -->

        </div><!-- #customer-info -->

      </article><!-- .post -->

    <?php else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

    <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>
<script type='text/javascript' src='https://ajaxzip3.github.io/ajaxzip3.js?'></script>
<script type="text/javascript">
(function($) {
	jQuery("#search_zipcode").click(function () {
    var str = jQuery("#zipcode").val();
    if( !str.match(/^\d{7}$|^\d{3}-\d{4}$/) ){
        alert("郵便番号を正しくご入力ください。");
        $("#zipcode").focus();
    }
	});
})(jQuery);
</script>
