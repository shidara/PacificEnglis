<?php
/**
 * Loging Page template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>
<div class="LoginPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>ログイン</li>
    </ul>
  </section>

  <section class="Login">
    <div class="Login__title">
      <h3 class="Login__titleText">LOG IN</h3>
      <p class="Login__subTitle Login__subTitle--beforeIcon">ログイン</p>
    </div>

    <?php if ( have_posts() ) : usces_remove_filter();?>
    <div class="Login__contents">
      <!-- 会員 -->
      <h4 class="Login__contentsTitle">会員の方はこちら</h4>
      <p class="Login__contentsSubTitle">会員の方は、登録時に入力されたE-mailとパスワードでログインしてください。</p>

      <form name="loginform" id="loginform" action="<?php echo apply_filters( 'usces_filter_login_form_action', USCES_MEMBER_URL ); // phpcs:ignore ?>" method="post">
        <div class="Login__formItem">
          <label>
            <span><?php esc_html_e( 'e-mail adress', 'usces' ); ?></span>
            <input type="text" name="loginmail" id="loginmail" class="loginmail Login__formItemInput" placeholder="xxx@example.com" value="<?php echo esc_attr( usces_remembername( 'return' ) ); ?>"  />
          </label>
        </div>

        <div class="Login__formItem">
          <label>
            <span><?php esc_html_e( 'password', 'usces' ); ?></span>
            <input type="password" name="loginpass" id="loginpass" class="loginpass Login__formItemInput" placeholder="※8〜16文字の半角英数字" autocomplete="off" size="20" />
          </label>
        </div>

        <div class="Login__submit">
          <?php usces_login_button(); ?>
        </div>
        <?php do_action( 'usces_action_login_page_inform' ); ?>
      </form>
    </div>

    <hr class="Login__divider" />

    <div class="Login__contents">
      <!-- 非会員 -->
      <h4 class="Login__contentsTitle">まだ会員登録されていない方</h4>
      <p class="Login__contentsSubTitle">初めてご利用の方は、こちらから会員登録すると便利にお買い物ができるようになります。</p>
      <div class="Login__newMember"><a href="<?php usces_url( 'newmember' ) . apply_filters( 'usces_filter_newmember_urlquery', null ); ?>">新規会員登録</a></div>
    </div>

    <script type="text/javascript">
        <?php if ( usces_is_login() ) : ?>
          setTimeout( function() {
            try{
              d = document.getElementById('loginpass');
              d.value = '';
              d.focus();
            }
            catch(e) {}
          }, 200 );
        <?php else : ?>
          try{
            document.getElementById( 'loginmail' ).focus();
          }
          catch(e) {}
        <?php endif; ?>
      </script>
    <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
    <?php endif; ?>

  </section>
</div>
<?php
get_footer();
