<?php
/**
 * New Member Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>
<div class="NewMemberPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>新規会員登録</li>
    </ul>
  </section>

  <section class="NewMember">
    <div class="NewMember__title">
      <h3 class="NewMember__titleText">REGISTAR</h3>
      <p class="NewMember__subTitle NewMember__subTitle--beforeIcon">新規会員登録</p>
    </div>

    <p class="NewMember__summary">会員登録すると便利にお買い物ができるようになります。</p>
    <p class="NewMember__note">※必須項目は必ずご入力ください。</p>

    <div class="NewMember__contents" role="main">
      <?php if ( have_posts() ) : usces_remove_filter(); ?>
        <div class="error_message"><?php usces_error_message(); ?></div>
        <form action="<?php echo apply_filters( 'usces_filter_newmember_form_action', usces_url( 'member', 'return' ) ); // phpcs:ignore ?>" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>お名前</p>
            <div class="c_form_input">
              <input name="member[name1]" id="name1" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" placeholder="姓">
              <input name="member[name2]" id="name2" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" placeholder="名">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>フリガナ</p>
            <div class="c_form_input _sm-row _lg-col2">
              <input name="member[name3]" id="name3" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" placeholder="セイ">
              <input name="member[name4]" id="name4" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active" placeholder="メイ">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>メールアドレス</p>
            <div class="c_form_input">
            <input name="member[mailaddress1]" id="mailaddress1" type="text" value="<?php usces_memberinfo( 'mailaddress1' ); ?>" autocomplete="off" placeholder="xxx@example.jp" />
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>メールアドレス（確認用）</p>
            <div class="c_form_input">
            <input name="member[mailaddress2]" id="mailaddress2" type="text" value="<?php usces_memberinfo( 'mailaddress2' ); ?>" autocomplete="off" placeholder="xxx@example.jp" />
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>電話番号</p>
            <div class="c_form_input">
              <input name="member[tel]" id="tel" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive" placeholder="0000000000">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>郵便番号</p>
            <div class="c_form_input _zip">
              <input name="member[zipcode]" id="zipcode" type="tel" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: inactive" maxlength="8" placeholder="0000000">
              <button type="button" id="search_zipcode" class="search-zipcode button" onclick="AjaxZip3.zip2addr('member[zipcode]', '', 'member[pref]', 'member[address1]' );">住所検索</button>
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>都道府県</p>
            <div class="c_form_input _select">
            <select name="member[pref]" id="member_pref pref" class="pref">
              <option value="--選択--">--選択--</option>
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

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>市区郡町村</p>
            <div class="c_form_input">
              <input name="member[address1]" id="address1" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>番地</p>
            <div class="c_form_input">
              <input name="member[address2]" id="address2" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name">ビル・マンション名号室</p>
            <div class="c_form_input">
              <input name="member[address3]" id="address3" type="text" value="" onkeydown="if (event.keyCode == 13) {return false;}" style="ime-mode: active">
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>パスワード</p>
            <div class="c_form_input">
              <input name="member[password1]" id="password1" type="password" value="<?php usces_memberinfo( 'password1' ); ?>" autocomplete="new-password" />
            </div>
          </div>

          <div class="NewMember__item">
            <p class="c_form_name"><span class="required">必須</span>パスワード（確認用）</p>
            <div class="c_form_input">
              <input name="member[password2]" id="password2" type="password" value="<?php usces_memberinfo( 'password2' ); ?>" autocomplete="new-password" />
            </div>
          </div>

          <div class="c_form_agree js-agree">
            <span class="mwform-checkbox-field horizontal-item">
              <label>
                <input type="checkbox" name="agree[data][]" value="個人情報の取り扱いに同意する。">
                <span class="mwform-checkbox-field-text"><a href="https://anotherwave.jp/another-wave/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報の取り扱い</a>に同意する。</span>
              </label>
            </span>
          </div>

          <div class="c_form_submit">
            <input name="member_regmode" type="hidden" value="newmemberform">
            <input name="regmember" type="submit" value="送信する" class="c_form_submit_button">
          </div>
          <?php usces_agree_member_field(); ?>
          <?php do_action( 'usces_action_newmember_page_inform' ); ?>
        </form>
      <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
      <?php endif; ?>
    </div>
  </section>
</div>

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